<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Warehouse $Warehouse
 */
class Transfers extends MY_Controller
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
		// $this->pageTitle = $this->lang->line('Transfers');
		$this->load->model('Transaction');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_transfers_data_tables(Transaction::TransfersTransType, false));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'transfers/index');
			// $this->pageTitle = $this->lang->line('Transfers');
			$this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_transfers();
			$data['title'] = $this->lang->line('Transfers');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('transfers/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'transfers/index']]);
		}
	}

	public function add()
	{
		$this->save(0, Transaction::TransfersTransType);
	}

	public function edit($id = '0')
	{
		$this->save($id, Transaction::TransfersTransType);
	}

	private function save($id = '0', $transType)
	{
		$this->load->model('Configuration');
		$lc_currency = $this->Configuration->fetch_local_currency()['valueInt'];
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);

		if ((!$fetched) and ($this->Transaction->set_next_auto_number($transType))) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
		}
		if ($post['submitBtn']) {
			$this->Transaction->set_fields($post['trans']);
			$this->Transaction->set_field('account_id', 1);
			$this->Transaction->set_field('account2_id', 1);
			$this->Transaction->set_field('currency_id', $lc_currency);
			$this->Transaction->set_field('currency_rate', 1);
			$this->Transaction->set_field('trans_type', $transType);
			$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
			$saved = $fetched ? $this->Transaction->update() : $this->Transaction->insert();
			if ($saved) {
				if (!$fetched) {
					foreach ($post['transItems'] as $t) {
						$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($t["from"], $t["item_id"], $t["qty"], $t["sizes"], $t["cost"],  -1);
						$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($t["to"], $t["item_id"], $t["qty"], $t["sizes"], $t["cost"],  1);
						$last_trans_date = $this->Transaction->fetch_last_trans_date_of_purchase_or_transfer_of_item($t["item_id"]);
						if ($last_trans_date != NULL) {
							$last_trans_item_id = $this->Transaction->fetch_last_purchase_or_transfer_of_item_using_trans_date($t["item_id"], $last_trans_date["trans_date"]);
							$last = $this->Transaction_item->fetch_trans_item_data($last_trans_item_id["transaction_item_id"]);
							// var_dump($last);
							// exit;
							$this->Transaction->update_cost_and_price_in_tr($last["item_id"], $last["net_cost"]);
						} else {
							$this->load->model('Item');
							$open_cost = $this->Item->fetch_open_cost_of_item($t["item_id"])["open_cost"];
							$this->Item->update_item_cost_by_item_id($t["item_id"], $open_cost);
							$this->Item->update_item_purchase_cost_by_item_id($t["item_id"], 0);
						}
					}
					redirect('transfers/index');
				} elseif ($fetched) {
					$this->load->model('Transaction_item');
					$trans_items_old = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
					$trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
					foreach ($trans_items_id as $t) {
						$this->Transaction_item->delete($t["id"]);
					}
					foreach ($post['transItems'] as $t) {
						$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($t["from"], $t["item_id"], $t["qty"], $t["sizes"], $t["cost"],  -1);
						$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($t["to"], $t["item_id"], $t["qty"], $t["sizes"], $t["cost"],  1);
					}
					//update cost
					$items_ids = [];
					foreach ($post['transItems'] as $p) {
						array_push($items_ids, $p["item_id"]);
					}
					foreach ($trans_items_old as $t) {
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
							$this->load->model('Item');
							$open_cost = $this->Item->fetch_open_cost_of_item($t)["open_cost"];
							$this->Item->update_item_cost_by_item_id($t, $open_cost);
							$this->Item->update_item_purchase_cost_by_item_id($t, 0);
						}
					}
				}
				redirect($this->session->userdata('previous_url'));
			}
		}
		$data = $this->_load_related_models($fetched, $transType);
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('transfers/transfer_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'transactions/transfers'
			]
		]);
	}

	private function _load_related_models($fetched, $transType)
	{
		$data = [];
		$this->load->model(['Currency']);
		$this->load->model('Warehouse');
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Transaction->get_transaction_types_list()[$transType];
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		$system_currency_id = $this->Currency->get_sys_config_cur()["valueint"];
		$data['system_currency_rate'] = $this->Currency->fetch_currency_rate($system_currency_id)["currency_rate"];
		$data['system_currency_code'] = $this->Currency->fetch_currency_code($system_currency_id)["currency_code"];
		$all = $this->Warehouse->fetch_all_warehouse_shelf();
		$data['all_warehouses_shelfs'] = [];
		foreach ($all as $a) {
			$data['all_warehouses_shelfs'][$a["id"]] = $a["w_s"];
		}
		if ($fetched) {
			$this->load->model('Transaction_item');
			$data['trans_items'] = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
			// var_dump($data['trans_items']);
			// exit;
			$data["transfer_lines"] = [];
			for ($i = 0; $i < count($data['trans_items']); $i += 2) {
				$res["from"] = $data['trans_items'][$i]["warehouse_id"];
				$res["to"] = $data['trans_items'][$i + 1]["warehouse_id"];
				$res["item_id"] = $data['trans_items'][$i]["item_id"];
				$res["barcode"] = $data['trans_items'][$i]["barcode"];
				$res["description"] = $data['trans_items'][$i]["description"];
				$res["qty"] = $data['trans_items'][$i]["qty"];
				$res["cost"] = $data['trans_items'][$i]["cost"];
				$warehouses_ids = $this->Warehouse->fetch_warehouse_id_by_item_id($res["item_id"]);
				$warehouses_shelfs = [];
				foreach ($warehouses_ids as $w_id) {
					$result = $this->Warehouse->fetch_warehouse_shelf($w_id["warehouse_id"]);
					$warehouses_shelfs[$w_id["warehouse_id"]] = $result["w_s"];
				}
				$res["from_list"] = $warehouses_shelfs;
				$all_sizes = $this->Warehouse->load_item_sizes_and_qty_by_warehouse_id($res["from"], $res["item_id"]);
				$res["sizes"] = [];
				foreach ($all_sizes as $s) {
					$res["sizes"][$s["size"]] = $s["size"];
				}
				$res['size'] = $this->Transaction_item->fetch_trans_item_selected_size($data['trans_items'][$i]["id"])["size"];
				array_push($data["transfer_lines"], $res);
				// var_dump($data["transfer_lines"]);
				// exit;
			}
			$data['trans_date'] = $this->Transaction->get_field('trans_date');
		} else {
			$data['trans_items'] = [];
			$data["transfer_lines"] = [];
			$data['trans_date'] = date("d-m-Y");
		}
		return $data;
	}

	public function delete($id)
	{
		$this->load->model('Transaction_item');
		$trans_items = $this->Transaction_item->load_all_trans_items($id);
		if ($this->Transaction->delete($id)) {
			foreach ($trans_items as $t) {
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
			redirect('transfers/index');
		} else {
			// $this->add_msg($this->lang->line('record_not_deleted'), 'warning');
			redirect('transfers/index');
		}
	}

	public function lookup_items()
	{
		$this->load->model('Item');
		$this->_render_json(
			$this->Item->search_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function add_new_transfer()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$transType = Transaction::TransfersTransType;
			$this->load->model('Configuration');
			$local_currency = $this->Configuration->fetch_local_currency()['valueInt'];
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
			$this->Transaction->set_field('trans_date', date('d-m-Y'));
			$this->Transaction->set_field('account_id', 1);
			$this->Transaction->set_field('account2_id', 1);
			$this->Transaction->set_field('currency_id', $local_currency);
			$this->Transaction->set_field('currency_rate', 1);
			$this->Transaction->set_field('trans_type', $transType);
			$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
			$saved = $this->Transaction->insert();
			if ($saved) {
				$this->load->model('Warehouse');
				$from_warehouse_id = $this->Warehouse->fetch_warehouse_id_by_warehouse_shelf($post['warehouse'], $post['shelf'])['id'];
				$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($from_warehouse_id, $post["item_id"], $post["transfer_qty"], $post["transfer_size"], 0,  -1);
				$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($post["new_warehouse"], $post["item_id"], $post["transfer_qty"], $post["transfer_size"], 0,  1);
				$this->session->set_flashdata('message_success', $this->lang->line('Saved_Successfully'));
			} else {
				$this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
			}
		} else {
			$this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
		}
		redirect('warehouses/inventory');
	}
}
