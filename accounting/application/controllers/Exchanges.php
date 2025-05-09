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
class Exchanges extends MY_Controller
{
	public $Transaction = NULL;
	public $Warehouse = NULL;
	public $Journal_account = NULL;
	public $User = NULL;	

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('exchange');
		$this->load->model('Transaction');
	}

	public function add()
	{
		$this->save(0, Transaction::ExchangeTransType);
	}

	public function edit($id = '0')
	{
		$this->save($id, Transaction::ExchangeTransType);
	}

	private function save($id = '0', $transType)
	{
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);

		if ((!$fetched) and ($this->Transaction->set_next_auto_number(Transaction::SaleTransType))) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number(Transaction::SaleTransType));
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
			}
			$saved = $fetched ? $this->Transaction->update() : $this->Transaction->insert();
			if ($saved) {
				if (!$fetched) {
					$this->Transaction->save_transaction_items_and_sizes($post['transItems'], -1);

					$this->Transaction->update_items_qty($post['transItems']);

					$total = $this->Transaction->calculate_sale_transaction_total($post['transItems'], $post['trans']['discount'], $post['trans']['delivery_charge']);
					$this->load->model('Account');

					$trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
					$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, "EX");

					$journal_id = $this->Transaction->fetch_journal_id_by_transaction_id($trans_id["0"]["id"], $transType);
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
					$this->Journal->delete($journal_id["id"]);
					//delete journal_acc
					$this->load->model('Journal_account');
					$journal_acc_ids = $this->Journal_account->fetch_journal_accounts_id_by_journal_id($journal_id["id"]);
					foreach ($journal_acc_ids as $j) {
						$this->Journal_account->delete($j["id"]);
					}
					//insert journal
					$total = $post['trans']['final_total'];
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "EX");
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
					//insert trans_items
					$this->Transaction->save_transaction_items($post['transItems'], -1);

					$trans_items_ids = $this->Transaction_item->load_all_trans_items_ids($this->Transaction->get_field('id'));
					$trans_sizes = [];
					$count = -1;
					foreach ($post['transItems'] as $i => $t) {
						$count++;
						$trans_sizes[$count]["id"] = $trans_items_ids[$i]["id"];
						$trans_sizes[$count]["size"] = $t["sizes"];
						$trans_sizes[$count]["qty"] = $t["qty"];
					}
					if ($trans_sizes !== []) {
						foreach ($trans_sizes as $size) {
							$this->Transaction_item->save_transaction_item_sizes($size);
						}
					}
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
					redirect($this->session->userdata('previous_url'));
				}
			} elseif ($this->Transaction->is_valid()) {
				redirect($this->session->userdata('previous_url'));
			}
		}
		$data = $this->_load_related_models($fetched, $transType, $this->lang->line('Invoice'));

		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('exchange/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'transactions/exchange', 'bootstrap-select.min', 'bootstrap-select-country.min', 'accounts/account_modal', 'items/item_modal'
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
		$data['sources'] = array_combine($sources, $sources);
		$status2 = $this->Configuration->fetch_status()["valueStr"];
		$status2 = explode(",", $status2);
		$data['status2'] = array_combine($status2, $status2);
		$delivery_charge = $this->Configuration->fetch_delivery_charge()["valueStr"];
		$delivery_charge = explode(",", $delivery_charge);
		$data['delivery_charge'] = array_combine($delivery_charge, $delivery_charge);
		// var_dump($data['delivery_charge']);
		// exit;
		$data['try_on_list'] = array(
			"0" => "No", "1" => "Yes"
		);
		$data['exchange_list'] = array(
			"0" => "No", "1" => "Yes"
		);
		$data['try_on'] = '1';
		$data['exchange'] = '0';
		if($transType == 'EX'){
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
			$data['driver'] = $this->User->get_user_name($this->Transaction->get_field('driver_id'))["user_name"];
			$data['auto_no'] = $this->Transaction->get_field('auto_no');
			$tot = $this->Transaction->calculate_invoice_subtot_exchange($this->Transaction->get_field('id'))["total"];
			$this->load->model('Journal');
			$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'))["id"];
			$amount = $this->Journal->load_journal_data_by_jonrnal_id($journal_id)["amount"];
// 			var_dump($amount, $tot, $am);exit;
// 			$data['old_sub_total'] = doubleval($amount) - doubleval($tot);
            $data['old_sub_total'] = -1 * doubleval($this->Transaction->calculate_invoice_sub_totoal($this->Transaction->get_field('relation_id'))['subtot']);
			$data['DN'] = $this->Transaction->get_field('delivery_note');
		} else {
			$data['auto_no'] = $this->Transaction->set_next_auto_number_for_sale_and_exchange();
			$relation_id = $this->Transaction->fetch_transaction_data($this->Transaction->get_field('id'))["relation_id"];
			$data['old_sub_total'] = -1 * doubleval($this->Transaction->calculate_invoice_sub_totoal($relation_id)['subtot']);
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
			$data['trans_date'] = date("d-m-Y");
			$data['value_date'] = '';
			$data['status'] = 0;
			$data['driver'] = '';
			$data["DN"] = "Exchange Order";
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

	public function return_exchange($id)
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

				$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);

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
				$this->Transaction->update_status($id);
				redirect('sales/index');
			}
		}
		$relation_id = $this->Transaction->fetch_transaction_data($id)["relation_id"];
		$data = $this->_load_related_models_for_return_exchange($transType, "Return Invoice", $id);
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('sales/return_sales_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'bootstrap-select.min', 'bootstrap-select-country.min', 'transactions/return_sale', 'accounts/account_modal', 'items/item_modal'
			]
		]);
	}

	private function _load_related_models_for_return_exchange($transType, $transTypeText, $id)
	{
		$data = [];
		$this->load->model(['Currency']);
		$data['auto_no'] = $this->Transaction->set_next_auto_number($transType);
		$data['transTypeText'] = 'Add New ' . $transTypeText;
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		$data['currenciesList'] = $this->Currency->load_currencies_list();
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
		// $delivery_charge = $this->Configuration->fetch_delivery_charge()["valueStr"];
		// $delivery_charge = explode(",", $delivery_charge);
		$data['delivery_charge'][0] = 0;
		$delivery_charge = $this->Configuration->fetch_delivery_charge()["valueStr"];
		$delivery_charge = explode(",", $delivery_charge);
		foreach($delivery_charge as $d){
			$data['delivery_charge'][$d] = $d;
		}
		$categories = $this->Configuration->fetch_categories()["valueStr"];
		$categories = explode(",", $categories);
		$data['categories'] = array_combine($categories, $categories);
		$sizes = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['sizes'] = array_combine($sizes, $sizes);
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
		foreach ($data['trans_items'] as $k => $t) {
			$data['trans_items'][$k]["price"] = 0;
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
}
