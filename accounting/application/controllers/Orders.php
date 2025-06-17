<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 */
class Orders extends MY_Controller
{
	public $Transaction = NULL;
	public $Transaction_item = NULL;
	public $Configuration = NULL;
	public $Warehouse = NULL;
	public $Journal = NULL;

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('orders');
		$this->load->model('Transaction');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_transactions_data_tables(Transaction::OrderTransType, false));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'orders/index');
			// $this->pageTitle = $this->lang->line('Orders');
			$this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_orders();
			$data['title'] = $this->lang->line('sale_orders');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('orders/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.fixedHeader.min', 'dataTables.datetime.format', 'orders/index']]);
		}
	}

	public function add()
	{
		$this->save(0, Transaction::OrderTransType);
	}

	public function edit($id = '0')
	{
		$this->save($id, Transaction::OrderTransType);
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
			$saved = $fetched ? $this->Transaction->update() : $this->Transaction->insert();
			if ($saved) {
				if (!$fetched) {
					$this->Transaction->save_transaction_items_and_sizes_without_warehouse_id($post['transItems'], 0);

					$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);
					$trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
					$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, "OS");
					redirect('orders/index');
				} elseif ($fetched) {
					//delete journal
					$this->load->model('Journal');
					$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
					$this->Journal->delete($journal_id["id"]);
					//insert journal
					$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "OS");
					//delete trans_items
					$this->load->model('Transaction_item');
					$trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
					foreach ($trans_items_id as $t) {
						$this->Transaction_item->delete($t["id"]);
					}
					//insert trans_items
					$this->Transaction->save_transaction_items_and_sizes_without_warehouse_id($post['transItems'], 0);

					redirect('orders/index');
				}
			} elseif ($this->Transaction->is_valid()) {
				redirect('orders/index');
			}
		}
		$data = $this->_load_related_models($fetched, $transType);
		if ($fetched) {
			$data["status"] = $this->Transaction->get_field('status');
		} else {
			$data["status"] = 0;
		}
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('orders/order_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'bootstrap-select.min',
				'bootstrap-select-country.min',
				'transactions/quotation',
				'accounts/account_modal',
				'items/item_modal'
			]
		]);
	}

	private function _load_related_models($fetched, $transType)
	{
		$data = [];
		$this->load->model(['Currency']);
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Transaction->get_transaction_types_list()[$transType];
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
		$categories = $this->Configuration->fetch_categories()["valueStr"];
		$categories = explode(",", $categories);
		$data['categories'] = array_combine($categories, $categories);
		$sizes = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['sizes'] = array_combine($sizes, $sizes);
		if ($fetched) {
			$this->load->model('Account');
			$account = $this->Account->load($this->Transaction->get_field('account_id'));
			$data['account'] = "{$account['account_number']} - {$account['account_name']}";
			$account2 = $this->Account->load($this->Transaction->get_field('account2_id'));
			$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
			$this->load->model('Transaction_item');
			$data['trans_items'] = $this->Transaction_item->load_all_trans_items_without_warehouses($this->Transaction->get_field('id'));
			$data['trans_date'] = $this->Transaction->get_field('trans_date');
			$data['value_date'] = $this->Transaction->get_field('value_date');
			foreach ($data['trans_items'] as $k => $t) {
				$data['size'][$k] = $this->Transaction_item->fetch_trans_item_selected_size_without_warehouse($t["id"])["size"];
			}
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
			$data['trans_date'] = date("d-m-Y");
			$data['value_date'] = date("d-m-Y");
		}
		return $data;
	}

	public function delete($id)
	{
		if ($this->Transaction->delete($id)) {
			// $this->add_msg($this->lang->line('record_deleted'), 'success');
			redirect('orders/index');
		} else {
			// $this->add_msg($this->lang->line('record_not_deleted'), 'warning');
			redirect('orders/index');
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

	public function to_invoice($id)
	{
		$transType = "SA";
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		if (($fetched) and ($this->Transaction->set_next_auto_number_for_sale_and_exchange())) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number_for_sale_and_exchange());
		}
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
				$this->Transaction->save_sales_transaction_items_and_sizes($post['transItems'], -1);

				$this->Transaction->update_qty($post['transItems'], -1);

				$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);

				$this->load->model('Account');
				$customer_acc = $this->Account->fetch_debit_and_balance($post['trans']['account_id']);
				$this->Account->update_account_debit_and_balance($total, $customer_acc, $post['trans']['account_id']);
				$sales_acc = $this->Account->fetch_credit_and_balance($post['trans']['account2_id']);
				$this->Account->update_account_credit_and_balance($total, $sales_acc, $post['trans']['account2_id']);

				$trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
				$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, "SA");

				$journal_id = $this->Transaction->fetch_journal_id_by_transaction_id($trans_id["0"]["id"], $transType);
				$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
				$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
				$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $total, "-1", $name1["0"]["account_name"], "Sale");
				$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $total, "1", $name2["0"]["account_name"], "Sale");

				$this->Transaction->update_status($id);
				redirect('sales/index');
			} elseif ($this->Transaction->is_valid()) {
				redirect('sales/index');
			}
		}
		$this->load->model('Item');
		$data = $this->_load_related_models_for_to_invoice($fetched, $transType);
		$data["status"] = 0;
		if ($data['trans_items'] !== []) {
			$missing_products = $this->Item->find_missing_products($data['trans_items']);
			if ($missing_products !== []) {
				$this->session->set_flashdata('message', '*Order Missing Products before Invoice*');
				redirect('orders/index');
			}
		}
		$data['transTypeText'] = "Order to Invoice";
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('order_to_invoice/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'transactions/ordertoinvoice'
			]
		]);
	}

	public function missing_products($id)
	{
		$transType = "MP";
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		if (($fetched) and ($this->Transaction->set_next_auto_number($transType))) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
		}
		if ($post['submitBtn']) {
			$this->load->model('Item');
			$mp_id = $this->Transaction->fetch_MP_id();
			if ($mp_id === NULL) {
				$this->Transaction->set_field('id', '');
				$this->Transaction->set_field('relation_id', $id);
				$this->Transaction->set_field('auto_no', "1");
				$this->Transaction->set_field('currency_id', 1);
				$this->Transaction->set_field('currency_rate', 1);
				$this->Transaction->set_field('account_id', 1);
				$this->Transaction->set_field('account2_id', 1);
				$this->Transaction->set_field('trans_date', date("d-m-Y"));
				$this->Transaction->set_field('value_date', NULL);
				$this->Transaction->set_field('trans_type', $transType);
				$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
				$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
				$saved = $this->Transaction->insert();
				if ($saved) {
					$this->Transaction->save_transaction_items_without_warehouse_id($post['transItems'], 0);
					redirect('orders/index');
				} elseif ($this->Transaction->is_valid()) {
					redirect('orders/index');
				}
			} else {
				$this->load->model('Transaction_item');
				$MP_trans_items = $this->Transaction_item->load_all_trans_items($mp_id["id"]);
				$this->Transaction->update_and_save_transaction_items_for_MP($post['transItems'], $MP_trans_items, 0, $mp_id["id"]);
				redirect('orders/index');
			}
		}
		$data = $this->_load_related_models_for_MP($fetched, $transType);
		$data["status"] = 0;
		$data['trans_date'] = date("d-m-Y");
		$data['value_date'] = date("d-m-Y");
		$data['transTypeText'] = "Order Missing Products";
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('orders/order_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'transactions/form'
			]
		]);
	}

	private function _load_related_models_for_MP($fetched, $transType)
	{
		$data = [];
		$this->load->model(['Currency']);
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Transaction->get_transaction_types_list()[$transType];
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		$data['currenciesList'] = $this->Currency->load_currencies_list();
		if ($fetched) {
			$this->load->model('Account');
			$account = $this->Account->load($this->Transaction->get_field('account_id'));
			$data['account'] = "{$account['account_number']} - {$account['account_name']}";
			$account2 = $this->Account->load($this->Transaction->get_field('account2_id'));
			$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
			$this->load->model('Transaction_item');
			$trans_items = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
			$this->load->model(['Item']);
			$data['trans_items'] = $this->Item->find_missing_products($trans_items);
			if ($data['trans_items'] === []) {
				$this->session->set_flashdata('message', '*No Missing Products*');
				redirect('orders/index');
				// redirect('orders/to_invoice/'.$this->Transaction->get_field('id'));
			}
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
		}
		return $data;
	}


	private function _load_related_models_for_to_invoice($fetched, $transType)
	{
		$data = [];
		$this->load->model(['Currency']);
		$this->load->model(['Configuration']);
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Transaction->get_transaction_types_list()[$transType];
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		$data['currenciesList'] = $this->Currency->load_currencies_list();
		$sizes = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['sizes'] = array_combine($sizes, $sizes);
		$delivery_charge = $this->Configuration->fetch_delivery_charge()["valueStr"];
		$delivery_charge = explode(",", $delivery_charge);
		$data['delivery_charge'] = array_combine($delivery_charge, $delivery_charge);
		if ($fetched) {
			$this->load->model('Account');
			$account = $this->Account->load($this->Transaction->get_field('account_id'));
			$data['account'] = "{$account['account_number']} - {$account['account_name']}";
			$account2 = $this->Account->load($this->Transaction->get_field('account2_id'));
			$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
			$this->load->model('Transaction_item');
			$data['trans_items'] = $this->Transaction_item->load_all_trans_items_without_warehouses($this->Transaction->get_field('id'));
			$this->load->model('Warehouse');
			$data['warehouses'] = [];
			$data['shelfs'] = [];
			$data['shelf_list'] = [];
			$data['warehouses_list'] = [];
			foreach ($data['trans_items'] as $t) {
				$warehouse_ids = $this->Warehouse->get_warehouse_ids_of_item($t["item_id"]);
				$w = [];
				foreach ($warehouse_ids as $w_id) {
					$result = $this->Warehouse->fetch_warehouse_and_shelf($w_id["warehouse_id"]);
					array_push($w, $result["warehouse"]);
				}
				$data['warehouses_list'] = array_combine($w, $w);
			}
			foreach ($data['trans_items'] as $k => $t) {
				$data['size'][$k] = $this->Transaction_item->fetch_trans_item_selected_size_without_warehouse($t["id"])["size"];
			}
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
		}
		return $data;
	}

	public function preview($id)
	{
		$this->load->model('Account');
		$this->load->model('Transaction_item');
		$this->load->model('Configuration');
		$this->load->model('Currency');
		$this->load->model('Warehouse');
		$data['trans'] = $this->Transaction->load_trans_data_by_trans_id($id);
		$data['customer_info'] = $this->Account->fetch_account_info($data['trans']["account_id"]);
		$data['sales_info'] = $this->Account->fetch_account_info($data['trans']["account2_id"]);
		$data['trans_items'] = $this->Transaction_item->load_all_trans_items_without_warehouses($id);
		$total = 0;
		foreach ($data['trans_items'] as $k => $t) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($t['warehouse_id']);
			$data['trans_items'][$k]["warehouse"] = $res["warehouse"];
			$data['trans_items'][$k]["shelf"] = $res["shelf"];
			$data['trans_items'][$k]["total"] = floatval($t["price"]) * floatval($t["qty"]) * (1 - (floatval($t["discount"]) / 100));
			$total += $data['trans_items'][$k]["total"];
		}
		$data['sub_total'] = $total;
		$data['total'] = floatval($total) - floatval($data['trans']["discount"]);
		$data['company_name'] = $this->Configuration->fetch_company_name()["valueStr"];
		$data['company_address'] = $this->Configuration->fetch_company_address()["valueStr"];
		$data['company_phone'] = $this->Configuration->fetch_company_phone()["valueStr"];
		$data['company_email'] = $this->Configuration->fetch_company_email()["valueStr"];
		$data['company_website'] = $this->Configuration->fetch_company_website()["valueStr"];
		$data['currency'] = $this->Currency->fetch_currency_code($data['trans']["currency_id"])["currency_code"];
		$data['title'] = $this->lang->line('Order');
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $this->lang->line('Print')
		]);
		$this->load->view('quotations/preview', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'sales/preview'
			]
		]);
	}
}
