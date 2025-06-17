<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Warehouse $Warehouse
 * @property Transaction_item $Transaction_item
 * @property Journal $Journal

 */
class Purchases extends MY_Controller
{

	public $Transaction = NULL;
	public $Transaction_item = NULL;
	public $Configuration = NULL;
	public $User = NULL;
	public $Journal = NULL;
	public $Journal_account = NULL;
	public $Order = NULL;
	public $Inbox = NULL;
	public $Warehouse = NULL;

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('transactions');
		$this->load->model('Transaction');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_transactions_data_tables(Transaction::PurchaseTransType, true));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'purchases/index');
			// $this->pageTitle = $this->lang->line('transactions');
			$this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_purchases();
			$data['title'] = $this->lang->line('Purchases');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('transactions/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.datetime.format', 'purchases/index']]);
		}
	}

	public function add()
	{
		$this->save(0, Transaction::PurchaseTransType);
	}

	public function edit($id = '0')
	{
		$this->save($id, Transaction::PurchaseTransType);
	}

	private function save($id = '0', $transType)
	{
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		if ((!$fetched) and ($this->Transaction->set_next_auto_number($transType))) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
		}
		if ($post['submitBtn']) {
			if ((!$fetched) and ($this->Transaction->set_next_auto_number($transType))) {
				$post['trans']['auto_no'] = $this->Transaction->set_next_auto_number($transType);
			}
			$this->Transaction->set_fields($post['trans']);
			$this->Transaction->set_field('trans_type', $transType);
			$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
			if ($fetched) {
				$this->load->model('Transaction_item');
				$trans = $this->Transaction->load_trans_data_by_trans_id($id);
				$trans_items = $this->Transaction_item->load_all_trans_items($id);
				$tot = $this->Transaction->calculate_purchase_total($trans_items, $trans["discount"]);
				$acc1 = $this->Transaction->get_field('account_id');
				$acc2 = $this->Transaction->get_field('account2_id');
			}
			$saved = $fetched ? $this->Transaction->update() : $this->Transaction->insert();
			if ($saved) {
				if (!$fetched) {
					$this->Transaction->save_purchases_trans_items_and_sizes($post['transItems'], 1);

					//update qty
					$this->Transaction->update_items_qty($post['transItems']);

					$total = $this->Transaction->calculate_purchase_total($post['transItems'], $post['trans']['discount']);

					$this->load->model('Account');

					// $trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "PU");

					//update cost
					foreach ($post['transItems'] as $t) {
						$last_trans_date = $this->Transaction->fetch_last_trans_date_of_purchase_or_transfer_of_item($t["item_id"]);
						$last_trans_item_id = $this->Transaction->fetch_last_purchase_or_transfer_of_item_using_trans_date($t["item_id"], $last_trans_date["trans_date"]);
						$last = $this->Transaction_item->fetch_trans_item_data($last_trans_item_id["transaction_item_id"]);
						if ($last !== NULL) {
							$this->load->model('Currency');
							$currency_code = $this->Currency->fetch_currency_code($last['currency_id'])["currency_code"];
							$this->Transaction->update_cost_and_price_of_item($last, $last['currency_rate'], $currency_code);
						}
					}

					$journal_id = $this->Transaction->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'), $transType);
					$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
					$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
					$this->Transaction->save_in_journal_accounts($journal_id[0]["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $total, "-1", $name2["0"]["account_name"], "Purchase");
					$this->Transaction->save_in_journal_accounts($journal_id[0]["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $total, "1", $name1["0"]["account_name"], "Purchase");
 
					$this->load->model('Journal');
					//update balance debit credit for account 1
					$balance = $this->Journal->calculate_account_balance($post['trans']['account_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account_id'], $balance, $credit, $debit);
					//update balance debit credit for account 2
					$balance = $this->Journal->calculate_account_balance($post['trans']['account2_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account2_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account2_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account2_id'], $balance, $credit, $debit);

					$this->session->unset_userdata('previous_url');
					$this->session->set_userdata('previous_url', 'purchases/index');
					redirect('purchases/index');
				} elseif ($fetched) {
					$this->load->model('Account');
					$this->load->model('Item');
					$total = $this->Transaction->calculate_purchase_total($post['transItems'], $post['trans']['discount']);

					//delete journal
					$this->load->model('Journal');
					$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
					if(isset($journal_id["id"])){
					$this->Journal->delete($journal_id["id"]);
					}
					//delete journal_acc
					$this->load->model('Journal_account');
					$journal_acc_ids = $this->Journal_account->fetch_journal_accounts_id_by_journal_id($journal_id["id"]);
					foreach ($journal_acc_ids as $j) {
						$this->Journal_account->delete($j["id"]);
					}
					//insert journal
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "PU");
					//get new journal id
					$new_journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
					//insert journal accounts
					$this->load->model('Account');
					$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
					$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
					$this->Transaction->save_in_journal_accounts($new_journal_id["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $total, "-1", $name2["0"]["account_name"], "Purchase");
					$this->Transaction->save_in_journal_accounts($new_journal_id["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $total, "1", $name1["0"]["account_name"], "Purchase");
					//delete trans_items
					$trans_items = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
					$trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
					foreach ($trans_items_id as $t) {
						$this->Transaction_item->delete($t["id"]);
					}
					//insert trans_items and trans_items_sizes
					$this->Transaction->save_purchases_trans_items_and_sizes($post['transItems'], 1);

					$this->load->model('Journal');
					//update balance debit credit for account 1
					$balance = $this->Journal->calculate_account_balance($post['trans']['account_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account_id'], $balance, $credit, $debit);
					//update balance debit credit for account 2
					$balance = $this->Journal->calculate_account_balance($post['trans']['account2_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account2_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account2_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account2_id'], $balance, $credit, $debit);

					//update qty 
					$this->Transaction->update_items_qty($trans_items);
					$this->Transaction->update_items_qty($post['transItems']);

					//update cost
					$items_ids = [];
					foreach ($post['transItems'] as $p) {
						array_push($items_ids, $p["item_id"]);
					}
					foreach ($trans_items as $t) {
						array_push($items_ids, $t["item_id"]);
					}
					foreach (array_unique($items_ids) as $t) {
						$last_trans_date = $this->Transaction->fetch_last_trans_date_of_purchase_or_transfer_of_item($t);
						if ($last_trans_date["trans_date"] !== NULL) {
							$last_trans_item_id = $this->Transaction->fetch_last_purchase_or_transfer_of_item_using_trans_date($t, $last_trans_date["trans_date"]);
							$last = $this->Transaction_item->fetch_trans_item_data($last_trans_item_id["transaction_item_id"]);
							$this->load->model('Currency');
							$currency_code = $this->Currency->fetch_currency_code($last['currency_id'])["currency_code"];
							$this->Transaction->update_cost_and_price_of_item($last, $last['currency_rate'], $currency_code);
						} else {
							$open_cost = $this->Item->fetch_open_cost_of_item($t)["open_cost"];
							$this->Item->update_item_cost_by_item_id($t, $open_cost);
							$this->Item->update_item_purchase_cost_by_item_id($t, 0);
						}
					}
					redirect($this->session->userdata('previous_url'));
				}
			} elseif ($this->Transaction->is_valid()) {
				redirect($this->session->userdata('previous_url'));
			}
		}
		$data = $this->_load_related_models($fetched, $transType);
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('transactions/purchase_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'bootstrap-select.min', 'bootstrap-select-country.min', 'transactions/purchase', 'accounts/account_modal', 'items/item_modal'
			]
		]);
	}

	private function _load_related_models($fetched, $transType)
	{
		$data = [];
		$this->load->model(['Currency']);
		$this->load->model(['Configuration']);
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Transaction->get_transaction_types_list()[$transType];
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		$data['currenciesList'] = $this->Currency->load_currencies_list();
		$data['sizes'] = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['account_type'] = array(
			"Customer" => "Customer", "Supplier" => "Supplier",
			"Cash" => "Cash", "Expenses" => "Expenses",
			"Bank" => "Bank", "Sale VAT" => "Sale VAT",
			"Purchase VAT" => "Purchase VAT"
		);
		$this->load->model('Configuration');
		$TVA1 = $this->Configuration->fetch_TVA1()["valueStr"];
		$TVA2 = $this->Configuration->fetch_TVA2()["valueStr"];
		$TVA = [0, doubleval($TVA1), doubleval($TVA2)];
		$data['TVA'] = array_combine($TVA, $TVA);
		$categories = $this->Configuration->fetch_categories()["valueStr"];
		$categories = explode(",", $categories);
		$data['categories'] = array_combine($categories, $categories);
		if ($fetched) {
			$this->load->model('Account');
			$account = $this->Account->load($this->Transaction->get_field('account_id'));
			$data['account'] = "{$account['account_number']} - {$account['account_name']}";
			$account2 = $this->Account->load($this->Transaction->get_field('account2_id'));
			$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
			$this->load->model('Transaction_item');
			$data['trans_items'] = $this->Transaction_item->load_all_trans_items_without_sizes($this->Transaction->get_field('id'));
			$this->load->model('Warehouse');
			$w = $this->Warehouse->load_warehouses_list();
			$data['warehouses_list'] = array_combine($w, $w);
			$data['trans_date'] = $this->Transaction->get_field('trans_date');
			$data['value_date'] = $this->Transaction->get_field('value_date');
			$data["status"] = $this->Transaction->get_field('status');
			$trans_items = $this->Transaction_item->load_all_trans_items_ids($this->Transaction->get_field('id'));
			$data["records"] = [];
			$size_list = [];
			foreach ($data['sizes'] as $d) {
				$size_list[$d] = 0;
			}
			foreach ($trans_items as $t) {
				$sizes = $this->Transaction_item->load_trans_item_sizes_by_trans_item_id($t["id"]);
				foreach ($data['trans_items'] as $k => $i) {
					if ($i["id"] === $t["id"]) {
						$data["records"][$k] = $i;
						$data["records"][$k]["size_qty"] = $size_list;
						if ($sizes === []) {
							$data["records"][$k]["item_qty"] = $i["qty"];
							$data["records"][$k]["size_qty"]["No"] = $i["qty"];
						} else {
							$data["records"][$k]["item_qty"] = 0;
							$data["records"][$k]["size_qty"]["No"] = 0;
							foreach ($sizes as $s) {
								$data["records"][$k]["size_qty"][$s["size"]] = $s["qty"];
							}
						}
					}
				}
			}
			$data['warehouse'] = [];
			$data['shelf'] = [];
			$data['shelf_list'] = [];
			foreach ($data["records"] as $key => $t) {
				$res = $this->Warehouse->fetch_warehouse_and_shelf($t["warehouse_id"]);
				$data['warehouse'][$key] = $res['warehouse'];
				$data['shelf'][$key] = $res['shelf'];
				$s = $this->Warehouse->fetch_all_warehouse_shelfs($res['warehouse']);
				$s = array_combine($s, $s);
				$data['shelf_list'][$key] = $s;
			}
			// var_dump($data["records"]);
			// exit;
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
			$this->load->model('Warehouse');
			$w = $this->Warehouse->load_warehouses_list();
			$data['warehouses_list'] = array_combine($w, $w);
			$data['trans_date'] = date("d-m-Y");
			$data['value_date'] = date("d-m-Y");
			$data["status"] = 0;
			$data["records"] = [];
		}
		return $data;
	}

	public function delete($id)
	{
		//update balance debit credit
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$trans = $this->Transaction->load_trans_data_by_trans_id($id);
		$trans_items = $this->Transaction_item->load_all_trans_items_without_sizes($id);
		
		//delete
		$deleted = $this->Transaction->delete($id);

		//update qty
		$this->Transaction->update_items_qty($trans_items);

		//update cost
		foreach ($trans_items as $t) {
			$last_PU_date = $this->Transaction->fetch_last_trans_date_of_purchase_of_item($t["item_id"]);
			if ($last_PU_date === NULL) {
				$this->Item->update_item_purchase_cost_by_item_id($t["item_id"], 0);
			}
			$last_trans_date = $this->Transaction->fetch_last_trans_date_of_purchase_or_transfer_of_item($t["item_id"]);
			if ($last_trans_date["trans_date"] !== NULL) {
				$last_trans_item_id = $this->Transaction->fetch_last_purchase_or_transfer_of_item_using_trans_date($t["item_id"], $last_trans_date["trans_date"]);
				$last = $this->Transaction_item->fetch_trans_item_data($last_trans_item_id["transaction_item_id"]);
				$this->load->model('Currency');
				$currency_code = $this->Currency->fetch_currency_code($last['currency_id'])["currency_code"];
				$this->Transaction->update_cost_and_price_of_item($last, $last['currency_rate'], $currency_code);
			} else {
				$open_cost = $this->Item->fetch_open_cost_of_item($t["item_id"])["open_cost"];
				$this->Item->update_item_cost_by_item_id($t["item_id"], $open_cost);
				$this->Item->update_item_purchase_cost_by_item_id($t["item_id"], 0);
			}
		}

		$this->load->model('Journal');
		//update balance debit credit for account 1
		$balance = $this->Journal->calculate_account_balance($trans['account_id'])["total"];
		$credit = $this->Journal->calculate_account_credit($trans['account_id'])["total"];
		$debit = $this->Journal->calculate_account_debit($trans['account_id'])["total"];
		$this->Account->update_account_credit_debit_balance($trans['account_id'], $balance, $credit, $debit);
		//update balance debit credit for account 2
		$balance = $this->Journal->calculate_account_balance($trans['account2_id'])["total"];
		$credit = $this->Journal->calculate_account_credit($trans['account2_id'])["total"];
		$debit = $this->Journal->calculate_account_debit($trans['account2_id'])["total"];
		$this->Account->update_account_credit_debit_balance($trans['account2_id'], $balance, $credit, $debit);
		if ($deleted) {
			redirect('purchases/index');
		} else {
			redirect('purchases/index');
		}
	}

	public function lookup_accounts()
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->search_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function lookup_items()
	{
		$this->load->model('Item');
		$this->_render_json(
			$this->Item->search_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function get_account_currency()
	{
		$acc_id = $this->input->post('whatselected');
		$this->load->model('Account');
		$currency_id = $this->Account->fetch_account_currency_id($acc_id);
		echo ($currency_id["currency_id"]);
	}

	public function get_warehouse_shelfs()
	{
		$warehouse = $this->input->post('whatselected');
		$this->load->model('Warehouse');
		$shelfs = $this->Warehouse->fetch_all_warehouse_shelfs($warehouse);
		$this->_render_json(
			$shelfs
		);
	}

	public function get_item_data()
	{
		$item_id = $this->input->post('whatselected');
		$this->load->model('Item');
		$this->_render_json(
			$this->Item->load_item_data($item_id)
		);
	}

	public function get_warehouse_shelfs_for_OP()
	{
		$warehouse = $this->input->post('whatselected');
		$item_id = $this->input->post('item_id');
		$this->load->model('Warehouse');
		$OP_shelfs = $this->Warehouse->fetch_item_warehouse_shelfs_for_OP($warehouse, $item_id);
		$all_shelfs = $this->Warehouse->fetch_all_warehouse_shelfs($warehouse);
		$shelfs = array_diff($all_shelfs, $OP_shelfs);
		$list = [];
		foreach ($shelfs as $s) {
			array_push($list, $s);
		}
		$this->_render_json(
			$list
		);
	}

	public function lookup_purchases_accounts($currency_id)
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->search_purchases_suggestions(trim($this->input->get('query', true)), $currency_id)
		);
	}

	public function preview($id)
	{
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Configuration');
		$this->load->model('Currency');
		$this->load->model('Warehouse');
		$data['sizes'] = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$data['customer_info'] = $this->Account->fetch_account_info($data['trans']["account_id"]);
		$data['sales_info'] = $this->Account->fetch_account_info($data['trans']["account2_id"]);
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items_without_sizes($id);
		$total = 0;
		foreach ($data['trans_items'] as $k => $t) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($t['warehouse_id']);
			$data['trans_items'][$k]["warehouse"] = $res["warehouse"];
			$data['trans_items'][$k]["shelf"] = $res["shelf"];
			$data['trans_items'][$k]["total"] = (floatval($t["price"]) * (1 - (floatval($t["discount"]) / 100)) + floatval($t["cost"])) * floatval($t["qty"]);
			$total += $data['trans_items'][$k]["total"];
		}
		$size_list = [];
        foreach ($data['sizes'] as $d) {
            $size_list[$d] = 0;
        }
        foreach ($data['trans_items'] as $t) {
            $sizes = $this->Transaction_item->load_trans_item_sizes_by_trans_item_id($t["id"]);
            foreach ($data['trans_items'] as $k => $i) {
                if ($i["id"] === $t["id"]) {
                    $data["records"][$k] = $i;
                    $data["records"][$k]["size_qty"] = $size_list;
                    if ($sizes === []) {
                        $data["records"][$k]["item_qty"] = $i["qty"];
                        $data["records"][$k]["size_qty"]["No"] = $i["qty"];
                    } else {
                        $data["records"][$k]["item_qty"] = 0;
                        $data["records"][$k]["size_qty"]["No"] = 0;
                        foreach ($sizes as $s) {
                            $data["records"][$k]["size_qty"][$s["size"]] = $s["qty"];
                        }
                    }
                }
            }
        }
		$data['sub_total'] = $total;
		$data['total'] = floatval($total) - floatval($data['trans']["discount"]);
		$data['company_name'] = $this->Configuration->fetch_company_name()["valueStr"];
		$data['company_address'] = $this->Configuration->fetch_company_address()["valueStr"];
		$data['company_phone'] = $this->Configuration->fetch_company_phone()["valueStr"];
		$data['company_email'] = $this->Configuration->fetch_company_email()["valueStr"];
		$data['company_website'] = $this->Configuration->fetch_company_website()["valueStr"];
		$data['currency'] = $this->Currency->fetch_currency_code($data['trans']["currency_id"])["currency_code"];
		$data['title'] = $this->lang->line('Purchase');
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $this->lang->line('Print')
		]);
		$this->load->view('transactions/preview', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'sales/preview'
			]
		]);
	}

	public function check($id)
	{
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items_grouped_by_item_id($id);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		$data['missing_products'] = [];
		$data['extra_products'] = [];
		$data['posted_products'] = [];
		if ($post['submitBtn']) {
			foreach ($post['transItems'] as $k => $p) {
				$item = $this->Item->fetch_item($p["item_id"]);
				$data['posted_products'][$k] = ["item_id" => $p["item_id"], "barcode" => $item[0]["barcode"], "description" => $item[0]["description"], "qty" => $p["qty"]];
			}
			$items_ids = [];
			foreach ($post['transItems'] as $k => $p) {
				$items_ids[$k] = $p["item_id"];
			}
			$array_item_ids = array_unique($items_ids);
			$items_posted = [];
			foreach ($array_item_ids as $id) {
				$qty = 0;
				foreach ($post['transItems'] as $p) {
					if ($id === $p["item_id"]) {
						$qty += $p["qty"];
					}
				}
				array_push($items_posted, ["item_id" => $id, "qty" => $qty]);
			}

			foreach ($data['trans_items'] as $t) {
				$count = 0;
				$qty = 0;
				foreach ($items_posted as $p) {
					if ($t["item_id"] === $p["item_id"]) {
						if (floatval($t["qty"]) > floatval($p["qty"])) {
							$qty = floatval($t["qty"]) - floatval($p["qty"]);
							$count = 0;
							break;
						} else {
							$count++;
						}
					} else {
						$qty = floatval($t["qty"]);
					}
				}
				if ($count === 0) {
					array_push($data['missing_products'], ["item_id" => $t["item_id"], "barcode" => $t["barcode"], "description" => $t["description"], "qty" => $qty]);
				}
			}
			foreach ($items_posted as $p) {
				$count = 0;
				$qty = 0;
				$barcode = "";
				$desc = "";
				foreach ($data['trans_items'] as $t) {
					if ($p["item_id"] === $t["item_id"]) {
						if (floatval($t["qty"]) < floatval($p["qty"])) {
							$qty = floatval($p["qty"]) - floatval($t["qty"]);
							$count = 0;
							break;
						} else {
							$count++;
						}
					} else {
						$qty = floatval($p["qty"]);
					}
				}
				if ($count === 0) {
					$item = $this->Item->fetch_item($p["item_id"]);
					array_push($data['extra_products'], ["item_id" => $p["item_id"], "barcode" => $item[0]["barcode"], "description" => $item[0]["description"], "qty" => $qty]);
				}
			}
			if ($data['extra_products'] === [] && $data['missing_products'] === []) {
				$this->session->set_flashdata('message', $this->lang->line('All_Items_are_Found'));
			}
		}
		$data['title'] = $this->lang->line('Check_Purchase_items');
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['title']
		]);
		$this->load->view('transactions/check_items', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'transactions/check'
			]
		]);
	}

	public function lookup_suppliers_accounts()
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->search_suppliers_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function get_purchases_account_with_the_same_currency()
	{
		$currency_id = $this->input->post('whatselected');
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->fetch_account_by_type_and_currency_id("Purchases", $currency_id)
		);
	}	
}
