<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Transaction_item $Transaction_item
 * @property Configuration $Configuration
 * @property Journal $Journal
 */

class Sales extends MY_Controller
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
		// $this->pageTitle = $this->lang->line('invoices');
		$this->load->model('Transaction');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_sales_data_tables(Transaction::SaleTransType));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'sales/index');
			// $this->pageTitle = $this->lang->line('Sales');
			$this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_sales_data(Transaction::SaleTransType);
			$this->load->model('User');
			$this->load->model('Configuration');
			$drivers = $this->User->load_all_users_with_type_driver();
			$data['drivers'] = [0 => ""];
			foreach ($drivers as $d) {
				$data['drivers'][$d["id"]] = $d["user_name"];
			}
			$status2 = $this->Configuration->fetch_status()["valueStr"];
			$status2 = explode(",", $status2);
			$data['status2'][0] = '';
			foreach ($status2 as $s) {
				$data['status2'][$s] = $s;
			}
			$data['title'] = $this->lang->line('active_orders');
			$this->load->view('templates/header', [
				'_page_title' => $this->lang->line('Invoices'),
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min', 'css/jquery-tag-this']
			]);
			$this->load->view('sales/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'dataTables.datetime.format', 'jquery.autocomplete.min', 'jquery.tagthis', 'sales/index']]);
		}
	}

	public function add()
	{
		$this->save(0, Transaction::SaleTransType);
	}

	public function edit($id = '0')
	{
		$this->save($id, Transaction::SaleTransType);
	}

	private function save($id = '0', $transType)
	{
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);

		if ((!$fetched) and ($this->Transaction->set_next_auto_number_for_sale_and_exchange())) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number_for_sale_and_exchange());
		}
		if ($post['submitBtn']) {

			if ((!$fetched) and ($this->Transaction->set_next_auto_number_for_sale_and_exchange())) {
				$post['trans']['auto_no'] = $this->Transaction->set_next_auto_number_for_sale_and_exchange();
			}
			$this->Transaction->set_fields($post['trans']);
			$this->Transaction->set_field('trans_type', $transType);
			$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			if (!$fetched) {
				$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
			}
			if ($fetched) {
				$this->load->model('Transaction_item');
				$trans = $this->Transaction->load_trans_data_by_trans_id($id);
				$trans_items = $this->Transaction_item->load_all_trans_items($id);
			}
			$saved = $fetched ? $this->Transaction->update() : $this->Transaction->insert();
			if ($saved) {
				if (!$fetched) {
					//insert trans_items and trans_items_sizes
					$this->Transaction->save_sales_transaction_items_and_sizes($post['transItems'], -1);

					$this->Transaction->update_items_qty($post['transItems']);

					$total = $this->Transaction->calculate_sale_transaction_total($post['transItems'], $post['trans']['discount'], $post['trans']['delivery_charge']);
					$this->load->model('Account');

					// $trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "SA");

					$journal_id = $this->Transaction->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'), $transType);
					$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
					$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
					$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $total, "-1", $name1["0"]["account_name"], "Sale");
					$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $total, "1", $name2["0"]["account_name"], "Sale");

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
					redirect('sales/index');
				} elseif ($fetched) {
					$this->load->model('Account');
					//delete journal
					$this->load->model('Journal');
					$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
					if ($journal_id["id"] !== NULL) {
						$this->Journal->delete($journal_id["id"]);
						//delete journal_acc
						$this->load->model('Journal_account');
						$journal_acc_ids = $this->Journal_account->fetch_journal_accounts_id_by_journal_id($journal_id["id"]);
						foreach ($journal_acc_ids as $j) {
							$this->Journal_account->delete($j["id"]);
						}
					}
					//insert journal
					$total = $this->Transaction->calculate_sale_transaction_total($post['transItems'], $post['trans']['discount'], $post['trans']['delivery_charge']);
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "SA");
					//get new journal id
					$new_journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
					//insert journal accounts
					$this->load->model('Account');
					$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
					$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
					$this->Transaction->save_in_journal_accounts($new_journal_id["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $total, "-1", $name1["0"]["account_name"], "Sale");
					$this->Transaction->save_in_journal_accounts($new_journal_id["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $total, "1", $name2["0"]["account_name"], "Sale");
					//delete trans_items
					$this->load->model('Transaction_item');
					$trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
					foreach ($trans_items_id as $t) {
						$this->Transaction_item->delete($t["id"]);
					}
					//insert trans_items and trans_items_sizes
					$this->Transaction->save_sales_transaction_items_and_sizes($post['transItems'], -1);

					//update qty 
					$this->Transaction->update_items_qty($trans_items);
					$this->Transaction->update_items_qty($post['transItems']);

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
					//update eco order status if exists
					$this->load->model('Order');
					$eco_order = $this->Order->load_order_data_by_trans_id($this->Transaction->get_field('id'));
					if ($eco_order) {
						if (array_key_exists("id", $eco_order)) {
							$updated = $this->Order->update_order_status($eco_order['id'], $post['trans']['status2']);
							if ($updated) {
								if ($post['trans']['status2'] !== $eco_order['status']) {
									$this->load->model('Inbox');
									$this->Inbox->set_field('from_user_id', 1);
									$this->Inbox->set_field('to_user_id', $eco_order["customer_id"]);
									$this->Inbox->set_field('subject', 'Order #' . $eco_order['auto_no'] . ' Status Changed');
									$this->Inbox->set_field('message', 'Dear customer, your order #' . $eco_order['auto_no'] . ' status changed from ' . $eco_order['status'] . ' to ' . $post['trans']['status2'] . '.');
									$this->Inbox->set_field('date', date("Y-m-d"));
									$s = $this->Inbox->insert();
								}
							}
						}
					}
					redirect($this->session->userdata('previous_url'));
				}
			} elseif ($this->Transaction->is_valid()) {
				redirect($this->session->userdata('previous_url'));
			}
		}
		$data = $this->_load_related_models($fetched, $transType, "Invoice");

		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('sales/sales_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'transactions/form',
				'bootstrap-select.min',
				'bootstrap-select-country.min',
				'accounts/account_modal',
				'items/item_modal'
			]
		]);
	}

	private function _load_related_models($fetched, $transType, $transTypeText)
	{
		$data = [];
		$this->load->model('Currency');
		$this->load->model('User');
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $transTypeText;
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		$data['currenciesList'] = $this->Currency->load_currencies_list();
		$drivers = $this->User->load_all_users_with_type_driver();
		$employees = $this->User->load_all_users_with_type_employee();
		$data['account_type'] = array(
			"Customer" => "Customer",
			"Supplier" => "Supplier",
			"Cash" => "Cash",
			"Expenses" => "Expenses",
			"Bank" => "Bank",
			"Sale VAT" => "Sale VAT",
			"Purchase VAT" => "Purchase VAT"
		);
		$data['payment_method'] = array(
			"BOTH" => "BOTH",
			"LBP" => "LBP",
			"USD" => "USD"
		);
		$data['payment_method_gateway'] = array(
			"C.O.D" => "C.O.D",
			"whish" => "whish"
		);
		$data['payment_method_gateway_status'] = array(
			"" => "",
			"Pending" => "Pending",
			"Payment successful" => "Payment successful",
			"Payment failed (insufficient balance)" => "Payment failed (insufficient balance)"

		);
		$this->load->model('Configuration');
		$TVA1 = $this->Configuration->fetch_TVA1()["valueStr"];
		$TVA2 = $this->Configuration->fetch_TVA2()["valueStr"];
		$TVA = [0, doubleval($TVA1), doubleval($TVA2)];
		$data['TVA'] = array_combine($TVA, $TVA);
		$categories = $this->Configuration->fetch_categories()["valueStr"];
		$categories = explode(",", $categories);
		$data['categories'] = array_combine($categories, $categories);
		$data['drivers'] = [0 => ""];
		$data['profit_permission'] = $this->User->check_user_permission($this->violet_auth->get_user_id(), "profit")["count"];
		foreach ($drivers as $d) {
			$data['drivers'][$d["id"]] = $d["user_name"];
		}
		$data['employees'] = [0 => ""];
		foreach ($employees as $e) {
			$data['employees'][$e["id"]] = $e["user_name"];
		}
		$this->load->model('Configuration');
		$sources = $this->Configuration->fetch_source()["valueStr"];
		$sources = explode(",", $sources);
		$data['sources'] = [0 => ""];
		foreach ($sources as $s) {
			$data['sources'][$s] = $s;
		}
		$status2 = $this->Configuration->fetch_status()["valueStr"];
		$status2 = explode(",", $status2);
		$data['status2'] = array_combine($status2, $status2);
		$delivery_charge = $this->Configuration->fetch_delivery_charge()["valueStr"];
		$delivery_charge = explode(",", $delivery_charge);
		$data['delivery_charge'] = array_combine($delivery_charge, $delivery_charge);
		// var_dump($data['delivery_charge']);
		// exit;
		$data['try_on_list'] = array(
			"0" => "No",
			"1" => "Yes"
		);
		$data['exchange_list'] = array(
			"0" => "No",
			"1" => "Yes"
		);
		$data['try_on'] = '0';
		$data['exchange'] = '0';
		if ($transType == 'EX') {
			$data['exchange'] = '1';
		}
		if ($fetched) {
			$data['try_on'] = $this->Transaction->get_field('try_on');
			$data['exchange'] = $this->Transaction->get_field('exchange');
			$this->load->model('Account');
			$account = $this->Account->load($this->Transaction->get_field('account_id'));
			$data['account'] = "{$account['account_number']} - {$account['account_name']}";
			$account2 = $this->Account->load($this->Transaction->get_field('account2_id'));
			$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
			$this->load->model('Transaction_item');
			$data['trans_items'] = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
			$this->load->model('Warehouse');
			$data['warehouses'] = [];
			$data['shelfs'] = [];
			$data['shelf_list'] = [];
			$data['sizes_list'] = [];
			foreach ($data['trans_items'] as $k => $t) {
				$w_s = $this->Warehouse->fetch_warehouse_and_shelf($t["warehouse_id"]);
				array_push($data['warehouses'], $w_s["warehouse"]);
				array_push($data['shelfs'], $w_s["shelf"]);
				$shelfs = $this->Warehouse->fetch_all_warehouse_shelfs_of_item($w_s["warehouse"], $t["item_id"]);
				$shelf = [];
				foreach ($shelfs as $s) {
					array_push($shelf, $s["shelf"]);
				}
				$shelf = array_combine($shelf, $shelf);
				array_push($data['shelf_list'], $shelf);
				$warehouse_ids = $this->Warehouse->get_warehouse_ids_of_item($t["item_id"]);
				$w = [];
				foreach ($warehouse_ids as $w_id) {
					$result = $this->Warehouse->fetch_warehouse_and_shelf($w_id["warehouse_id"]);
					array_push($w, $result["warehouse"]);
				}
				$data['warehouses_list'][$k] = array_combine($w, $w);

				$res = $this->Transaction_item->fetch_item_sizes_by_warehouse_id($t['item_id'], $t["warehouse_id"]);
				$result = [];
				foreach ($res as $i => $r) {
					$result[$i] = $r['size'];
				}
				$list = array_unique($result);
				$data['sizes_list'][$k] = array_combine($list, $list);
				$data['size'][$k] = $this->Transaction_item->fetch_trans_item_selected_size($t["id"])["size"];
			}
			$data['trans_date'] = $this->Transaction->get_field('trans_date');
			$data['value_date'] = $this->Transaction->get_field('value_date');
			$data['status'] = $this->Transaction->get_field('status');
			$this->load->model("User");
			$data['driver'] = $this->User->get_user_name($this->Transaction->get_field('driver_id'))["user_name"] ?? "";
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
			$data['trans_date'] = date("d-m-Y");
			$data['value_date'] = '';
			$data['status'] = 0;
			$data['driver'] = '';
		}
		return $data;
	}

	public function delete($id)
	{
		//update balance debit credit
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$trans = $this->Transaction->load_trans_data_by_trans_id($id);
		$trans_items = $this->Transaction_item->load_all_trans_items($id);
		if ($this->Transaction->delete($id)) {
			$this->Transaction->update_items_qty($trans_items);
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
			redirect('sales/index');
		} else {
			// $this->add_msg($this->lang->line('record_not_deleted'), 'warning');
			redirect('sales/index');
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

	public function lookup_sales_accounts($currency_id)
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->search_sales_suggestions(trim($this->input->get('query', true)), $currency_id)
		);
	}

	public function preview($id, $print = '')
	{
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Configuration');
		$this->load->model('Currency');
		$this->load->model('Warehouse');
		$data['trans_id'] = $id;
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$data['customer_info'] = $this->Account->fetch_account_info($data['trans']["account_id"]);
		$data['sales_info'] = $this->Account->fetch_account_info($data['trans']["account2_id"]);
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items($id);
		if ($data['trans']["trans_type"] === "SA") {
			$total = 0;
			foreach ($data['trans_items'] as $k => $t) {
				$res = $this->Warehouse->fetch_warehouse_and_shelf($t['warehouse_id']);
				$data['trans_items'][$k]["warehouse"] = $res["warehouse"];
				$data['trans_items'][$k]["shelf"] = $res["shelf"];
				$data['trans_items'][$k]["total"] = floatval($t["price"]) * floatval($t["qty"]) * (1 - (floatval($t["discount"]) / 100));
				$total += $data['trans_items'][$k]["total"];
			}
			$data['sub_total'] = $total;
			$data['total'] = floatval($total) - floatval($data['trans']["discount"]) + floatval($data['trans']["delivery_charge"]);
		} else {
			$this->load->model('Journal');
			$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($id)["id"];
			$data['total'] = $this->Journal->load_journal_data_by_jonrnal_id($journal_id)["amount"];
		}
		$data['company_name'] = $this->Configuration->fetch_company_name()["valueStr"];
		$data['company_address'] = $this->Configuration->fetch_company_address()["valueStr"];
		$data['company_phone'] = $this->Configuration->fetch_company_phone()["valueStr"];
		$data['company_email'] = $this->Configuration->fetch_company_email()["valueStr"];
		$data['company_website'] = $this->Configuration->fetch_company_website()["valueStr"];
		$data['currency'] = $this->Currency->fetch_currency_code($data['trans']["currency_id"])["currency_code"];
		$data['title'] =  $this->lang->line('Sale_Invoice');
		$this->load->view('templates/' . ($print ? 'print_h' : 'header'), [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $this->lang->line('Print'),
			'print' => $print
		]);
		$this->load->view('sales/invoice_preview', $data);
		$this->load->view('templates/' . ($print ? 'print_f' : 'footer'), [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'qrcode.min',
				'sales/preview'
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
		$data['title'] = $this->lang->line("Check_Sale_Products");
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['title']
		]);
		$this->load->view('transactions/check_items', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'transactions/check'
			]
		]);
	}

	public function driver_page()
	{
		$driver_id = $this->violet_auth->get_user_id();
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_driver_delivery_notes_data_tables($driver_id));
		} else {
			// $this->pageTitle = $this->lang->line('Driver Page');
			$data['records'] = $this->Transaction->paginate_driver_delivery_notes($driver_id);
			$data['title'] = $this->lang->line("Driver_Page");
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('sales/driver_page', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'sales/driver_page']]);
		}
	}

	public function lookup_drivers()
	{
		$this->load->model('User');
		$this->_render_json(
			$this->User->search_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function update_delivered($id)
	{
		$this->Transaction->update_delivered_field($id);
		$this->session->set_flashdata('message', $this->lang->line('Updated_Successfully'));
		redirect('sales/driver_page');
	}

	public function get_order_auto_no()
	{
		$order_id = $this->input->post('id');
		$auto_no = $this->Transaction->fetch_trans_autono($order_id);
		echo ($auto_no["auto_no"]);
	}

	public function lookup_customers_accounts()
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->search_customers_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function employee_page()
	{
		$employee_id = $this->violet_auth->get_user_id();
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_employee_page_data_tables($employee_id));
		} else {
			// $this->pageTitle = $this->lang->line('Driver Page');
			$data['records'] = $this->Transaction->paginate_employee_page($employee_id);
			$this->load->model('User');
			$this->load->model('Configuration');
			$drivers = $this->User->load_all_users_with_type_driver();
			$data['drivers'] = [0 => ""];
			foreach ($drivers as $d) {
				$data['drivers'][$d["id"]] = $d["user_name"];
			}
			$status2 = $this->Configuration->fetch_status()["valueStr"];
			$status2 = explode(",", $status2);
			$status2[0] = 0;
			$data['status2'] = array_combine($status2, $status2);
			$data['status2'][0] = '';
			$data['title'] = $this->lang->line("Employee_Page");
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min']
			]);
			$this->load->view('sales/employee_page', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'jquery.dataTables.min', 'dataTables.bootstrap.min', 'sales/employee_page']]);
		}
	}

	public function pickup_notes($id)
	{
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Configuration');
		$this->load->model('Currency');
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$data['customer_info'] = $this->Account->fetch_account_info($data['trans']["account_id"]);
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items($id);
		$data['company_name'] = $this->Configuration->fetch_company_name()["valueStr"];
		$data['company_address'] = $this->Configuration->fetch_company_address()["valueStr"];
		$data['company_phone'] = $this->Configuration->fetch_company_phone()["valueStr"];
		$data['company_email'] = $this->Configuration->fetch_company_email()["valueStr"];
		$data['company_website'] = $this->Configuration->fetch_company_website()["valueStr"];
		$data['currency'] = $this->Currency->fetch_currency_code($data['trans']["currency_id"])["currency_code"];
		$data['title'] = $this->lang->line("Pickup_Note");
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['title']
		]);
		$this->load->view('pickup_notes/pickup_note', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'delivery_notes/preview',
			]
		]);
	}

	public function update_pickup($id)
	{
		$this->Transaction->update_pickup_field($id);
		$this->session->set_flashdata('message', $this->lang->line('Updated_Successfully'));
		redirect('sales/employee_page');
	}

	public function get_sales_account_with_the_same_currency()
	{
		$currency_id = $this->input->post('whatselected');
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->fetch_account_by_type_and_currency_id("Sales", $currency_id)
		);
	}

	public function get_item_sizes_in_specific_warehouse_shelf()
	{
		$item_id = $this->input->post('item_id');
		$warehouse = $this->input->post('warehouse');
		$shelf = $this->input->post('shelf');
		$this->load->model('Warehouse');
		$res = $this->Warehouse->fetch_item_sizes_in_specific_warehouse_shelf($item_id, $warehouse, $shelf);
		$result = [];
		foreach ($res as $k => $r) {
			$result[$k] = $r['size'];
		}
		$this->_render_json(
			array_unique($result)
		);
	}

	public function get_max_qty_for_item_size_in_warehouse_shelf()
	{
		$item_id = $this->input->post('item_id');
		$warehouse = $this->input->post('warehouse');
		$shelf = $this->input->post('shelf');
		$size = $this->input->post('size');
		$this->load->model('Warehouse');
		$res = $this->Warehouse->fetch_qty_of_item_size_in_specific_warehouse_shelf($item_id, $warehouse, $shelf, $size);
		$this->_render_json(
			$res
		);
	}

	public function get_max_qty_for_item_size_in_warehouse_shelf_validation_edit_sale()
	{
		$item_id = $this->input->post('item_id');
		$warehouse = $this->input->post('warehouse');
		$shelf = $this->input->post('shelf');
		$size = $this->input->post('size');
		$trans_id = $this->input->post('trans_id');
		$this->load->model('Warehouse');
		$res = $this->Warehouse->calculate_item_max_qty_by_warehouse_id_and_size_for_validation_in_edit_sale($trans_id, $item_id, $warehouse, $shelf, $size);
		$this->_render_json(
			$res
		);
	}

	public function bulk_transaction_fields_update_in_sale()
	{
		$trans_ids = $this->input->post('ids');
		$status = $this->input->post('status');
		$driver = $this->input->post('driver');
		$value_date = $this->input->post('value_date');
		$cash_date = $this->input->post('cash_date');
		$return_date = $this->input->post('return_date');
		$receipt = $this->input->post('receipt');
		$customer_nbs = $this->input->post('customer_nbs');
		$amounts = $this->input->post('totals');
		// var_dump($trans_ids);
		if ($status !== "0") {
			$updated = $this->Transaction->bulk_update_for_status($trans_ids, $status);
			if ($updated) {
				$this->load->model(['Order', 'Inbox']);
				foreach ($trans_ids as $trans_id) {
					$order = $this->Order->load_order_data_by_trans_id($trans_id);
					if ($order) {
						$done = $this->Order->update_order_status($order['id'], $status);
						if ($done) {
							$this->Inbox->reset_fields();
							$this->Inbox->set_field('from_user_id', 1);
							$this->Inbox->set_field('to_user_id', $order["customer_id"]);
							$this->Inbox->set_field('subject', 'Order #' . $order['auto_no'] . ' Status Changed');
							$this->Inbox->set_field('message', 'Dear customer, your order #' . $order['auto_no'] . ' status changed from ' . $order['status'] . ' to ' . $status . '.');
							$this->Inbox->set_field('date', date("Y-m-d"));
							$saved = $this->Inbox->insert();
						}
					}
				}
			}
		}
		if ($driver !== "0") {
			$this->Transaction->bulk_update_for_driver($trans_ids, $driver);
		}
		if ($value_date !== "0") {
			$this->Transaction->bulk_update_for_value_date($trans_ids, $value_date);
		}
		if ($cash_date !== "0") {
			$this->Transaction->bulk_update_for_cash_date($trans_ids, $cash_date);
			if ($receipt === "true") {
				$this->load->model('Journal');
				$this->Journal->bulk_add_receipts_for_invoices($trans_ids, $amounts);
			}
		}
		if ($return_date !== "0") {
			$this->Transaction->bulk_update_for_return_date($trans_ids, $return_date);
		}
	}

	public function bulk_preview()
	{
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Configuration');
		$this->load->model('Currency');
		$this->load->model('Warehouse');
		$post = $this->input->post(null, true);
		// var_dump(explode(",",$post["all_ids"]));
		// exit;
		$ids = explode(",", $post["all_ids"]);
		// $ids = [587,588,589];
		foreach ($ids as $i => $id) {
			$data['trans_id'][$i] = $id;
			$data['trans'][$i] = $this->Transaction->load_trans_data_by_trans_id($id);
			$data['customer_info'][$i] = $this->Account->fetch_account_info($data['trans'][$i]["account_id"]);
			$data['trans_items'][$i] = $this->Transaction_item->load_all_trans_items($id);
			$total = 0;
			if ($data['trans'][$i]["trans_type"] === "SA") {
				foreach ($data['trans_items'][$i] as $k => $t) {
					$res = $this->Warehouse->fetch_warehouse_and_shelf($t['warehouse_id']);
					$data['trans_items'][$i][$k]["warehouse"] = $res["warehouse"];
					$data['trans_items'][$i][$k]["shelf"] = $res["shelf"];
					$data['trans_items'][$i][$k]["total"] = floatval($t["price"]) * floatval($t["qty"]) * (1 - (floatval($t["discount"]) / 100));
					$total += $data['trans_items'][$i][$k]["total"];
				}
				$data['sub_total'][$i] = $total;
				$data['total'][$i] = floatval($total) - floatval($data['trans'][$i]["discount"]) + floatval($data['trans'][$i]["delivery_charge"]);
			} else {
				$this->load->model('Journal');
				$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($id)["id"];
				$data['total'][$i] = $this->Journal->load_journal_data_by_jonrnal_id($journal_id)["amount"];
			}

			$data['title'][$i] = "Sale Invoice";
		}
		$data['title'] = $this->lang->line("Print_Sale");
		$this->load->view('templates/print_h', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['title']
		]);
		$this->load->view('sales/bulk_preview', $data);
		$this->load->view('templates/print_f', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'qrcode.min',
				'sales/bulk_preview'
			]
		]);
	}

	public function receive_cash()
	{
		require_once FCPATH . 'vendor/autoload.php';
		$post = $this->input->post(null, true);
		$data["tot_profit"] = 0;
		if ($post) {
			// var_dump($_FILES["file"]["name"]);
			// exit;
			$upload_file = $_FILES["file"]["name"];
			if ($upload_file !== '') {
				$extension = pathinfo($upload_file, PATHINFO_EXTENSION);
				if ($extension == 'csv') {
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
				} else if ($extension == 'xls') {
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
				} else {
					$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
				}
				$spreadsheet = $reader->load($_FILES['file']['tmp_name']);
				$sheetdata = $spreadsheet->getActiveSheet()->toArray();
				$sheetcount = count($sheetdata);
				if ($sheetcount > 1) {
					$data = array();
					for ($i = 1; $i < $sheetcount; $i++) {
						$invoice_nb = $sheetdata[$i][0];
						$customer = $sheetdata[$i][1];
						$cash = $sheetdata[$i][2];
						$excel_data[] = array(
							'invoice nb'  => $invoice_nb,
							'customer'  => $customer,
							'cash'   => $cash
						);
					}
					$this->load->model('Journal');
					$data["tot_profit"] = 0;
					foreach ($excel_data as $k => $e) {
						$amount = $this->Journal->fetch_invoice_amount_by_trans_auto_no($e["invoice nb"]);
						$excel_data[$k]["profit"] = $this->Transaction->fetch_invoice_total_profit($e["invoice nb"])["total_profit"];
						$data["tot_profit"] += doubleval($excel_data[$k]["profit"]);
						if ($amount !== NULL) {
							$excel_data[$k]["differance"] = doubleval($amount["amount"]) - doubleval($e["cash"]);
							if ($excel_data[$k]["differance"] === floatval(0)) {
								$excel_data[$k]["note"] = "Accapted";
							} else {
								$excel_data[$k]["note"] = "Rejected";
							}
						} else {
							$excel_data[$k]["differance"] = $e["cash"];
							$excel_data[$k]["note"] = "Rejected: invoice nb not found";
						}
					}
					$data['results'] = $excel_data;
				} else {
					$data['results'] = [];
				}
			} else {
				$data['results'] = [];
				// $this->session->set_flashdata('message', '*please select Excel document before Check*');			
			}
		} else {
			$data['results'] = [];
		}
		$data['selected_status'] = "";
		$data['title'] = $this->lang->line("Receive_Cash");
		$this->load->model('Configuration');
		$status2 = $this->Configuration->fetch_status()["valueStr"];
		$status2 = explode(",", $status2);
		$status2[0] = 0;
		$data['status2'] = array_combine($status2, $status2);
		$data['status2'][0] = '';
		// var_dump($data['status2']);exit;
		if (in_array('Successfully Delivered', $data['status2'])) {
			$data['selected_status'] = "Successfully Delivered";
		}
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data["title"]
		]);
		$this->load->view('sales/receive_cash', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => ['sales/receive_cash', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'xlsx.full.min']
		]);
	}

	public function bulk_receipts_for_invoices()
	{
		$auto_nbs = $this->input->post('auto_nbs');
		$amounts = $this->input->post('amounts');
		$cash_date = $this->input->post('cash_date');
		$cash_date = date("Y-m-d", strtotime($cash_date));
		$status2 = $this->input->post('status2');
		foreach ($auto_nbs as $k => $a) {
			$trans_ids[$k] = $this->Transaction->fetch_transaction_id_by_autono_for_bulk_receipts($a)[0]["id"];
		}
		$this->load->model('Journal');
		$this->Journal->bulk_add_receipts_for_invoices($trans_ids, $amounts);
		if ($cash_date !== '') {
			$this->Transaction->update_invoice_cash_date($trans_ids, $cash_date);
		}
		if ($status2 !== "0") {
			$this->Transaction->update_invoice_status2($trans_ids, $status2);
		}
	}

	public function wakilni_preview($id)
	{
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Configuration');
		$this->load->model('Currency');
		$this->load->model('Warehouse');
		$data['trans_id'] = $id;
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$data['customer_info'] = $this->Account->fetch_account_info($data['trans']["account_id"]);
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items($id);
		$data['company_name'] = $this->Configuration->fetch_company_name()["valueStr"];
		$total = 0;
		if ($data['trans']["trans_type"] === "SA") {
			foreach ($data['trans_items'] as $k => $t) {
				$data['trans_items'][$k]["total"] = floatval($t["price"]) * floatval($t["qty"]) * (1 - (floatval($t["discount"]) / 100));
				$total += $data['trans_items'][$k]["total"];
			}
			$data['total'] = floatval($total) - floatval($data['trans']["discount"]) + floatval($data['trans']["delivery_charge"]);
		} else {
			$this->load->model('Journal');
			$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($id)["id"];
			$data['total'] = $this->Journal->load_journal_data_by_jonrnal_id($journal_id)["amount"];
		}
		$data['title'] = $this->lang->line("Print_Sale");
		$this->load->view('templates/print_h', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['title']
		]);
		$this->load->view('sales/wakilni_preview', $data);
		$this->load->view('templates/print_f', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'qrcode.min',
				'sales/wakilni_preview'
			]
		]);
	}

	public function exchange($id)
	{
		$transType = Transaction::ExchangeTransType;
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number_for_sale_and_exchange());
		if ($post['submitBtn']) {
			$post['trans']['auto_no'] = $this->Transaction->set_next_auto_number_for_sale_and_exchange();
			$this->Transaction->set_fields($post['trans']);
			$this->Transaction->set_field('id', '');
			$this->Transaction->set_field('relation_id', $id);
			$this->Transaction->set_field('trans_type', $transType);
			$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
			$saved = $this->Transaction->insert();
			if ($saved) {
				$this->Transaction->save_transaction_items_and_sizes($post['transItems'], -1);

				$this->Transaction->update_items_qty($post['transItems']);

				// $total = $this->Transaction->calculate_sale_transaction_total($post['transItems'], $post['trans']['discount'], $post['trans']['delivery_charge']);
				$this->load->model('Account');

				$trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
				$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $post['trans']["final_total"], "EX");

				$journal_id = $this->Transaction->fetch_journal_id_by_transaction_id($trans_id["0"]["id"], $transType);
				$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
				$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
				$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $post['trans']["final_total"], "-1", $name1["0"]["account_name"], "Sale");
				$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $post['trans']["final_total"], "1", $name2["0"]["account_name"], "Sale");

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
				redirect('sales/index');
			}
		}
		$data = $this->_load_related_models('', $transType, "Exchange");
		$data['old_sub_total'] = -1 * doubleval($this->Transaction->calculate_invoice_sub_totoal($id)['subtot']);
		$data['auto_no'] = $this->Transaction->set_next_auto_number_for_sale_and_exchange();
		$data["DN"] = "Exchange Order";
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('exchange/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'transactions/exchange',
				'bootstrap-select.min',
				'bootstrap-select-country.min',
				'accounts/account_modal',
				'items/item_modal'
			]
		]);
	}

	public function return_sales($id)
	{
		$transType = Transaction::ReturnSaleTransType;
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
		if ($post['submitBtn']) {
			if ($this->Transaction->set_next_auto_number($transType)) {
				$post['trans']['auto_no'] = $this->Transaction->set_next_auto_number($transType);
			}
			$this->Transaction->set_fields($post['trans']);
			$this->Transaction->set_field('id', '');
			$this->Transaction->set_field('relation_id', $id);
			$this->Transaction->set_field('trans_type', $transType);
			$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
			$saved = $this->Transaction->insert();
			if ($saved) {
				$this->Transaction->save_transaction_items_and_sizes($post['transItems'], 1);

				$this->Transaction->update_items_qty($post['transItems']);

				$total = $this->Transaction->calculate_sale_transaction_total($post['transItems'], $post['trans']['discount'], $post['trans']['delivery_charge']);

				$trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
				$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, "RS");
				$this->load->model('Account');
				$journal_id = $this->Transaction->fetch_journal_id_by_transaction_id($trans_id["0"]["id"], $transType);
				$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
				$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
				$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $total, "-1", $name2["0"]["account_name"], "Retrurn Sale");
				$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $total, "1", $name1["0"]["account_name"], "Retrurn Sale");
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
				//update status 
				// $ex_id = $this->Transaction->fetch_exchange_trans_id_by_sale_id($id);
				// if ($ex_id['id'] !== NULL) {
				// 	$this->Transaction->update_status($ex_id['id']);
				// }
				redirect('sales/index');
			}
		}
		$data = $this->_load_related_models_for_return_sale($transType, "Return Invoice", $id);
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('sales/return_sales_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'bootstrap-select.min',
				'bootstrap-select-country.min',
				'transactions/return_sale',
				'accounts/account_modal',
				'items/item_modal'
			]
		]);
	}

	private function _load_related_models_for_return_sale($transType, $transTypeText, $id)
	{
		$data = [];
		$this->load->model(['Currency']);
		$data['auto_no'] = $this->Transaction->set_next_auto_number($transType);
		$data['transTypeText'] = 'Add New ' . $transTypeText;
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		$data['currenciesList'] = $this->Currency->load_currencies_list();
		$data['account_type'] = array(
			"Customer" => "Customer",
			"Supplier" => "Supplier",
			"Cash" => "Cash",
			"Expenses" => "Expenses",
			"Bank" => "Bank",
			"Sale VAT" => "Sale VAT",
			"Purchase VAT" => "Purchase VAT"
		);
		$this->load->model('Configuration');
		$TVA1 = $this->Configuration->fetch_TVA1()["valueStr"];
		$TVA2 = $this->Configuration->fetch_TVA2()["valueStr"];
		$TVA = [0, doubleval($TVA1), doubleval($TVA2)];
		$data['TVA'] = array_combine($TVA, $TVA);
		$data['delivery_charge'][0] = 0;
		$delivery_charge = $this->Configuration->fetch_delivery_charge()["valueStr"];
		$delivery_charge = explode(",", $delivery_charge);
		foreach ($delivery_charge as $d) {
			$data['delivery_charge'][$d] = $d;
		}
		$categories = $this->Configuration->fetch_categories()["valueStr"];
		$categories = explode(",", $categories);
		$data['categories'] = array_combine($categories, $categories);
		$sizes = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['sizes']["No"] = "No";
		foreach ($sizes as $s) {
			$data['sizes'][$s] = $s;
		}
		$this->load->model('Account');
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$account = $this->Account->load($data['trans']["account_id"]);
		$data['account'] = "{$account['account_number']} - {$account['account_name']}";
		$account2 = $this->Account->load($data['trans']["account2_id"]);
		$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
		$this->load->model('Transaction_item');
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items($id);
		$this->load->model('Warehouse');
		$data['warehouse'] = [];
		$data['shelf'] = [];
		$data['shelf_list'] = [];
		foreach ($data['trans_items'] as $t) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($t["warehouse_id"]);
			array_push($data['warehouse'], $res['warehouse']);
			array_push($data['shelf'], $res['shelf']);
			$s = $this->Warehouse->fetch_all_warehouse_shelfs($res['warehouse']);
			$s = array_combine($s, $s);
			array_push($data['shelf_list'], $s);
		}
		$w = $this->Warehouse->load_warehouses_list();
		$data['warehouses_list'] = array_combine($w, $w);
		$data['trans_date'] = date("d-m-Y");
		$data['value_date'] = date("d-m-Y");
		foreach ($data['trans_items'] as $k => $t) {
			$data['size'][$k] = $this->Transaction_item->fetch_trans_item_selected_size_without_warehouse($t["id"])["size"];
		}
		return $data;
	}

	public function bulk_wakilni_preview()
	{
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Configuration');
		$post = $this->input->post(null, true);
		$ids = explode(",", $post["all_ids"]);
		$data['count'] = count($ids);
		foreach ($ids as $i => $id) {
			$data['trans_id'][$i] = $id;
			$data['trans'][$i] = $this->Transaction->load_trans_data_by_trans_id($id);
			// var_dump($post);exit;
			$data['customer_info'][$i] = $this->Account->fetch_account_info($data['trans'][$i]["account_id"]);
			$data['trans_items'][$i] = $this->Transaction_item->load_all_trans_items($id);
			$data['company_name'][$i] = $this->Configuration->fetch_company_name()["valueStr"];
			$total = 0;
			if ($data['trans'][$i]["trans_type"] === "SA") {
				foreach ($data['trans_items'][$i] as $k => $t) {
					$tot = floatval($t["price"]) * floatval($t["qty"]) * (1 - (floatval($t["discount"]) / 100));
					$total += $tot;
				}
				$data['total'][$i] = floatval($total) - floatval($data['trans'][$i]["discount"]) + floatval($data['trans'][$i]["delivery_charge"]);
			} else {
				$this->load->model('Journal');
				$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($id)["id"];
				$data['total'][$i] = $this->Journal->load_journal_data_by_jonrnal_id($journal_id)["amount"];
			}
		}
		$data['title'] = $this->lang->line("Print_Sale");
		$this->load->view('templates/print_h', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['title']
		]);
		$this->load->view('sales/bulk_wakilni_preview', $data);
		$this->load->view('templates/print_f', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'qrcode.min',
				'sales/bulk_wakilni_preview'
			]
		]);
	}

	public function archive()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_sales_archive_data_tables(Transaction::SaleTransType));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'sales/archive');
			// $this->pageTitle = $this->lang->line('Sales');
			$this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_sales_archive_data(Transaction::SaleTransType);
			$data['title'] = $this->lang->line('sales_archive');
			$this->load->model('User');
			$this->load->model('Configuration');
			$drivers = $this->User->load_all_users_with_type_driver();
			$data['drivers'] = [0 => ""];
			foreach ($drivers as $d) {
				$data['drivers'][$d["id"]] = $d["user_name"];
			}
			$status2 = $this->Configuration->fetch_status()["valueStr"];
			$status2 = explode(",", $status2);
			$data['status2'][0] = '';
			foreach ($status2 as $s) {
				$data['status2'][$s] = $s;
			}
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min', 'css/jquery-tag-this']
			]);
			$this->load->view('sales/sales_archive', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'jquery.tagthis', 'sales/archive']]);
		}
	}

	public function invoice_preview($id)
	{
		$this->load->model(['Account', 'Transaction_item', 'Configuration', 'Currency', 'Warehouse']);
		$data['trans_id'] = $id;
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$data['customer_info'] = $this->Account->fetch_account_info($data['trans']["account_id"]);
		$data['address'] = $data['customer_info']["country"] . " - " . $data['customer_info']["city"] . " - " . $data['customer_info']["place"] . " - " . $data['customer_info']["street"];
		if ($data['customer_info']["building"]) {
			$data['address'] = $data['address'] . " - " . $data['customer_info']["building"];
		}
		if ($data['customer_info']["floor"]) {
			$data['address'] = $data['address'] . " - " . $data['customer_info']["floor"];
		}
		if ($data['customer_info']["description"]) {
			$data['address'] = $data['address'] . " - " . $data['customer_info']["description"];
		}
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items($id);
		$data['company_name'] = $this->Configuration->fetch_company_name()["valueStr"];
		$total = 0;
		$data['subtotal'] = 0;
		foreach ($data['trans_items'] as $k => $t) {
			$data['trans_items'][$k]["total"] = floatval($t["price"]) * floatval($t["qty"]) * (1 - (floatval($t["discount"]) / 100));
			$total += $data['trans_items'][$k]["total"];
			$data['subtotal'] += floatval($t["price"]) * floatval($t["qty"]);
		}
		$data['total'] = floatval($total) - floatval($data['trans']["discount"]) + floatval($data['trans']["delivery_charge"]);
		$data['title'] = $this->lang->line("Print");
		$this->load->view('templates/header_print', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('sales/print_view', $data);
		// $this->load->view('templates/footer', ['_moreJs' => []]);
	}

	public function lookup_tracking_nbs()
	{
		$this->_render_json(
			$this->Transaction->search_tracking_nbs_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function excel_preview()
	{
		$data['records'] = '';
		$post = $this->input->post(null, true);
		if ($post['all_ids']) {
			$ids = explode(',', $post['all_ids']);
			if ($ids) {
				$data['records'] = $this->Transaction->load_sales_data_for_excel($ids);
			}
		}
		$data['title'] = $this->lang->line("Export_Excel");
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('sales/excel_view', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['xlsx.full.min', 'sales/excel_preview']]);
	}

	public function open_customer_whatsapp($sale_id)
	{
		$this->load->model(['Account']);
		$trans = $this->Transaction->load($sale_id);
		$acc = $this->Account->load($trans['account_id']);
		$phone = str_replace('+', '', $acc['phone']);
		redirect("https://wa.me/" . $phone);
	}

	public function load_sales_items_qty_validation()
	{
		$this->load->model('Warehouse');
		$records = $this->input->post('records');
		$trans_id = $this->input->post('trans_id');
		$errors = [];
		foreach ($records as $k => $r) {
			$warehouse_id = $this->Warehouse->fetch_warehouse_id_by_warehouse_shelf($r['warehouse'], $r['shelf'])["id"];
			if ($trans_id) {
				$item = $this->Warehouse->calculate_item_max_qty_by_warehouse_id_and_size_for_validation_in_edit_sale($trans_id, $r['item_id'], $r['warehouse'], $r['shelf'], $r['size']);
			} else {
				$item = $this->Warehouse->fetch_qty_of_item_size_in_specific_warehouse_shelf($r['item_id'], $r['warehouse'], $r['shelf'], $r['size']);
			}
			// echo($this->db->last_query());exit;
			$records[$k]['av_qty'] = 0;
			if (isset($item['qty'])) {
				$records[$k]['av_qty'] = $item['qty'];
			}
			if (doubleval($r['qty']) > doubleval($records[$k]['av_qty'])) {
				$errors[] = $records[$k];
			}
		}
		$this->_render_json(
			$errors
		);
	}

	public function pending()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_pending_sales_data_tables(Transaction::SaleTransType));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'sales/pending');
			// $this->pageTitle = $this->lang->line('Sales');
			$this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_pending_sales_data(Transaction::SaleTransType);
			$this->load->model('User');
			$this->load->model('Configuration');
			$drivers = $this->User->load_all_users_with_type_driver();
			$data['drivers'] = [0 => ""];
			foreach ($drivers as $d) {
				$data['drivers'][$d["id"]] = $d["user_name"];
			}
			$status2 = $this->Configuration->fetch_status()["valueStr"];
			$status2 = explode(",", $status2);
			$data['status2'][0] = '';
			foreach ($status2 as $s) {
				$data['status2'][$s] = $s;
			}
			$data['title'] = $this->lang->line('pending_orders');
			$this->load->view('templates/header', [
				'_page_title' => $this->lang->line('pending_orders'),
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min', 'css/jquery-tag-this']
			]);
			$this->load->view('sales/pending', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'dataTables.datetime.format', 'jquery.autocomplete.min', 'jquery.tagthis', 'sales/pending']]);
		}
	}
}
