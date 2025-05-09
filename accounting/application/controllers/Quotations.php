<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Transaction_item $Transaction_item
 */
class Quotations extends MY_Controller
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
		// $this->pageTitle = $this->lang->line('quotations');
		$this->load->model('Transaction');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_transactions_data_tables(Transaction::QuatationTransType, false));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'quotations/index');
			// $this->pageTitle = $this->lang->line('Quotations');
			$this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_quotations();
			$data['title'] = $this->lang->line('Quotations');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('quotations/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.datetime.format', 'quotations/index']]);
		}
	}

	public function add()
	{
		$this->save(0, Transaction::QuatationTransType);
	}

	public function edit($id = '0')
	{
		$this->save($id, Transaction::QuatationTransType);
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
					$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, "QU");
					redirect('quotations/index');
				} elseif ($fetched) {
					//delete journal
					$this->load->model('Journal');
					$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
					$this->Journal->delete($journal_id["id"]);
					//insert journal
					$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "QU");
					//delete trans_items
					$this->load->model('Transaction_item');
					$trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
					foreach ($trans_items_id as $t) {
						$this->Transaction_item->delete($t["id"]);
					}
					//insert trans_items and sizes
					$this->Transaction->save_transaction_items_and_sizes_without_warehouse_id($post['transItems'], 0);
				
					redirect($this->session->userdata('previous_url'));
				}
			} elseif ($this->Transaction->is_valid()) {
				redirect($this->session->userdata('previous_url'));
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
		$this->load->view('quotations/quotations_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'bootstrap-select.min', 'bootstrap-select-country.min', 'transactions/quotation', 'accounts/account_modal', 'items/item_modal'
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
			// var_dump($data['trans_items']);
			// exit;
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
			redirect('quotations/index');
		} else {
			// $this->add_msg($this->lang->line('record_not_deleted'), 'warning');
			redirect('quotations/index');
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

	public function add_to_order($id)
	{
		$transType = "OS";
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		if (($fetched) and ($this->Transaction->set_next_auto_number($transType))) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
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
				$this->Transaction->save_transaction_items_and_sizes_without_warehouse_id($post['transItems'], 0);
				$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);
				$trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
				$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, $transType);
				$this->Transaction->update_status($id);
				redirect('orders/index');
			} elseif ($this->Transaction->is_valid()) {
				redirect('orders/index');
			}
		}
		$data = $this->_load_related_models($fetched, $transType);
		$data['transTypeText'] = "Quotation to Order";
		$data["status"] = 0;
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('quotations/quotations_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'transactions/form'
			]
		]);
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
		$data['title'] = $this->lang->line('Quotation');
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $this->lang->line('Print')
		]);
		$this->load->view('quotations/preview', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'sales/preview'
			]
		]);
	}
}
