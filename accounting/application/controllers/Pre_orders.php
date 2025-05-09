<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Warehouse $Warehouse
 * @property Transaction $Transaction
 */
class Pre_orders extends MY_Controller
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
		// $this->pageTitle = $this->lang->line('pre_orders');
		$this->load->model('Transaction');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Transaction->load_pre_orders_data_tables(Transaction::OrderTransType));
		} else {
			// $this->load->model('Transaction_item');
			$data['records'] = $this->Transaction->paginate_pre_orders(Transaction::OrderTransType);
			// var_dump($data['records']);exit;
			$data['title'] = $this->lang->line('pre_orders');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'css/jquery-tag-this']
			]);
			$this->load->view('pre_orders/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.fixedHeader.min', 'dataTables.datetime.format', 'jquery.tagthis', 'pre_orders/index']]);
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
					$this->Transaction->save_sales_transaction_items_and_sizes($post['transItems'], 0);
					$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);
					$total += $post['trans']['delivery_charge'];
					$trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
					$this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, "OS");
					redirect('pre_orders/index');
				} elseif ($fetched) {
					//delete journal
					$this->load->model('Journal');
					$journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
					$this->Journal->delete($journal_id["id"]);
					//insert journal
					$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);
					$total += $post['trans']['delivery_charge'];
					$this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "OS");
					//delete trans_items
					$this->load->model('Transaction_item');
					$trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
					foreach ($trans_items_id as $t) {
						$this->Transaction_item->delete($t["id"]);
					}
					//insert trans_items
					$this->Transaction->save_sales_transaction_items_and_sizes($post['transItems'], 0);

					redirect('pre_orders/index');
				}
			} elseif ($this->Transaction->is_valid()) {
				redirect('pre_orders/index');
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
		$this->load->view('pre_orders/pre_orders_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'bootstrap-select.min', 'bootstrap-select-country.min', 'transactions/pre_order', 'accounts/account_modal', 'items/item_modal'
			]
		]);
	}

	private function _load_related_models($fetched, $transType)
	{
		$data = [];
		$this->load->model('Currency');
		$this->load->model('User');
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . 'Pre-order';
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
		$data['payment_method'] = array(
			"BOTH" => "BOTH", "LBP" => "LBP", "USD" => "USD"
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
		// var_dump($data['status2']);exit;
		$delivery_charge = $this->Configuration->fetch_delivery_charge()["valueStr"];
		$delivery_charge = explode(",", $delivery_charge);
		$data['delivery_charge'] = array_combine($delivery_charge, $delivery_charge);
		$sizes = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['sizes']['No'] = 'No';
		foreach($sizes as $s){
			$data['sizes'][$s] = $s;
		}
		// var_dump($data['sizes']);exit;
		$data['try_on_list'] = array(
			"0" => "No", "1" => "Yes"
		);
		$data['exchange_list'] = array(
			"0" => "No", "1" => "Yes"
		);
		$data['try_on'] = '1';
		$data['exchange'] = '0';
		if ($fetched) {
		    $data['try_on'] = $this->Transaction->get_field('try_on');
		    $data['exchange'] = $this->Transaction->get_field('exchange');
			// var_dump(1);exit;
			$this->load->model('Account');
			$account = $this->Account->load($this->Transaction->get_field('account_id'));
			$data['account'] = "{$account['account_number']} - {$account['account_name']}";
			$account2 = $this->Account->load($this->Transaction->get_field('account2_id'));
			$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
			$this->load->model('Transaction_item');
			$data['trans_items'] = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
			// var_dump($data['trans_items']);exit;
			$this->load->model('Warehouse');
			$w = $this->Warehouse->load_warehouses_list();
			$data['warehouses_list'] = array_combine($w, $w);

			$data['warehouses'] = [];
			$data['shelfs'] = [];
			$data['shelf_list'] = [];
			$data['sizes_list'] = [];
			foreach ($data['trans_items'] as $k => $t) {
				$data['warehouses_list'][$k] = $data['warehouses_list'];
				$shelfs = $this->Warehouse->fetch_all_warehouse_shelfs($t['warehouse']);
				$data['shelf_list'][$k] = array_combine($shelfs, $shelfs);
				$data['warehouses'][$k] = $t['warehouse'];
				$data['shelfs'][$k] = $t['shelf'];
				$size = $this->Transaction_item->fetch_trans_item_selected_size($t["id"])["size"];
				$data['size'][$k] = $size;
				$data['sizes_list'][$k] = $data['sizes'];
				// $data['sizes_list'][$k] =
				
				// $data['warehouses_list'][$k][$t['warehouse']] = $t['warehouse'];
				// $data['warehouses'][$k][$t['warehouse']] = $t['warehouse'];
				// $data['shelf_list'][$k][$t['shelf']] = $t['shelf'];
				// $data['shelfs'][$k][$t['shelf']] = $t['shelf'];
				// $size = $this->Transaction_item->fetch_trans_item_selected_size($t["id"])["size"];
				// $data['size'][$k] = $size;
				// $data['sizes_list'][$k][$size] = $size;
			}
			$data['trans_date'] = $this->Transaction->get_field('trans_date');
			$data['value_date'] = $this->Transaction->get_field('value_date');
			$data['selected_status2'] = $this->Transaction->get_field('status2');
			$data['status'] = $this->Transaction->get_field('status');
			$this->load->model("User");
			$data['driver'] = $this->User->get_user_name($this->Transaction->get_field('driver_id'))["user_name"];
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
			$data['trans_date'] = date("d-m-Y");
			$data['value_date'] = '';
			$data['status'] = 0;
			$data['driver'] = '';
			$data['selected_status2'] = 'Pre-order';
		}
		return $data;
	}

	public function delete($id)
	{
		if ($this->Transaction->delete($id)) {
			// $this->add_msg($this->lang->line('record_deleted'), 'success');
			redirect('pre_orders/index');
		} else {
			// $this->add_msg($this->lang->line('record_not_deleted'), 'warning');
			redirect('pre_orders/index');
		}
	}

	public function lookup_items_from_order_purchases()
	{
		$this->load->model('Item');
		$this->_render_json(
			$this->Item->search_pre_orders_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function load_item_available_qty_in_order_purchase()
	{
		$item_id = $this->input->post('item_id');
		$this->_render_json(
			$this->Transaction->load_item_available_qty_in_untransfered_order_purchases($item_id)
		);
	}

	public function load_item_pre_orders()
	{
		$item_id = $this->input->post('item_id');
		$this->_render_json(
			$this->Transaction->load_item_ordered_in_untransfered_pre_orders($item_id)
		);
	}

	public function get_item_sizes_in_specific_warehouse_shelf_in_op()
	{
		$item_id = $this->input->post('item_id');
		$warehouse = $this->input->post('warehouse');
		$shelf = $this->input->post('shelf');
		$this->load->model('Warehouse');
		$res = $this->Warehouse->fetch_item_sizes_in_specific_warehouse_shelf_in_op($item_id, $warehouse, $shelf);
		$pre_orders = $this->Transaction->load_item_ordered_in_untransfered_pre_orders($item_id);
		$av_sizes = [];
		foreach ($res as $r1) {
			$count = 0;
			foreach ($pre_orders as $p) {
				if ($r1['size'] == $p['size']) {
					$diff = doubleval($r1['tot_qty'])  - doubleval($p['qty']);
					if (intval($diff) !== 0) {
						$av_sizes[] = $p['size'];
					}
					break;
				} else {
					$count++;
				}
			}
			if ($count == count($pre_orders)) {
				$av_sizes[] = $r1['size'];
			}
		}
		// $result = [];
		// foreach ($res as $k => $r) {
		// 	$result[$k] = $r['size'];
		// }
		// var_dump($res, $pre_orders, $result, $av_sizes);
		// exit;
		$this->_render_json(
			array_unique($av_sizes)
		);
	}

	public function to_invoice($id)
	{
		// var_dump(1);exit;
		$transType = "SA";
		$fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
		if (($fetched) and ($this->Transaction->set_next_auto_number_for_sale_and_exchange())) {
			$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number_for_sale_and_exchange());
		}
		if ($post['submitBtn']) {
			// var_dump($post['trans']);exit;
			if ($this->Transaction->set_next_auto_number_for_sale_and_exchange()) {
				$post['trans']['auto_no'] = $this->Transaction->set_next_auto_number_for_sale_and_exchange();
			}
			$this->Transaction->set_fields($post['trans']);
			$this->Transaction->set_field('id', '');
			$this->Transaction->set_field('relation_id', $id);
			$this->Transaction->set_field('status', 0);
			$this->Transaction->set_field('status2', 'Pre-order');
			$this->Transaction->set_field('relation_id', $id);
			$this->Transaction->set_field('trans_type', $transType);
			$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
			$saved = $this->Transaction->insert();
			if ($saved) {
				$this->Transaction->save_sales_transaction_items_and_sizes($post['transItems'], -1);

				$this->Transaction->update_qty($post['transItems'], -1);

				$total = $this->Transaction->calculate_transaction_total($post['transItems'], $post['trans']['discount']);
				$total = doubleval($total) + doubleval($post['trans']['delivery_charge']);
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
				$this->session->set_flashdata('message', $this->lang->line('Order_Missing_Products_before_Invoice'));
				redirect('pre_orders/index');
			}
		}
		$data['transTypeText'] = "Pre-order to Invoice";
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('order_to_invoice/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'transactions/ordertoinvoice'
			]
		]);
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
			foreach ($data['trans_items'] as $k=>$t) {
				$result = $this->Warehouse->fetch_warehouse_and_shelf($t["warehouse_id"]);
				$data['warehouses'][$k][$result['warehouse']] = $result['warehouse'];
				$data['shelfs'][$k][$result['shelf']] = $result['shelf'];
				$data['warehouse'][$k] = $result['warehouse'];
				$data['shelf'][$k] = $result['shelf'];
				// var_dump($t);exit;
				// $warehouse_ids = $this->Warehouse->get_warehouse_ids_of_item($t["item_id"]);
				// $w = [];
				// foreach ($warehouse_ids as $w_id) {
				// 	$result = $this->Warehouse->fetch_warehouse_and_shelf($w_id["warehouse_id"]);
				// 	array_push($w, $result["warehouse"]);
				// }
				// $data['warehouses_list'] = array_combine($w, $w);
			}
			foreach ($data['trans_items'] as $k => $t) {
				 $res = $this->Transaction_item->fetch_trans_item_selected_size_without_warehouse($t["id"])["size"];
				 $data['size'][$k] = $res;
				 $data['item_sizes'][$k][$res] = $res;
			}
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['trans_items'] = [];
		}
		return $data;
	}

	public function check_pre_order_transfer()
	{
		$post = $this->input->post(null, true);
		$results = [];
		if ($post) {
			$os_ids = explode(",", $post['all_ids']);
			$this->load->model(['Transaction_item', 'Account']);
			foreach ($os_ids as $k => $id) {
				$trans = $this->Transaction->load_trans_data_by_trans_id($id);
				$account = $this->Account->load($trans['account_id']);
				$customer = "{$account['account_number']} - {$account['account_name']}";
				$trans_items = $this->Transaction_item->load_all_trans_items_without_warehouses($id);
				$count = 0;
				foreach ($trans_items as $item) {
					$item_qty = $this->Transaction->calculate_item_total_available_qty_of_szie($item['item_id'], $item['size']);
					$qty_av = 0;
					if ($item_qty) {
						if ($item_qty['total_qty']) {
							$qty_av = doubleval($item_qty['total_qty']);
						}
					}
					if (doubleval($item['qty']) <= $qty_av) {
						$count++;
					}
				}
				// $results[$k]['os_id']=$id;
				$results[$k] = $trans;
				$results[$k]['customer'] = $customer;
				if ($count == count($trans_items)) {
					$results[$k]['check'] = 'Yes';
				} else {
					$results[$k]['check'] = 'No';
				}
			}
			// var_dump($results);
			// exit;
			$data['records'] = $results;
			$data['title'] =  $this->lang->line('Bulk_Pre_order_to_Invoice');
			$this->load->view('templates/header', [
				'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
				'_page_title' => $data['title']
			]);
			$this->load->view('order_to_invoice/bulk_os_to_sa', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
					'jquery.autocomplete.min', 'transactions/ordertoinvoice'
				]
			]);
		} else {
			redirect('pre_orders/index');
		}
	}

	public function bulk_transfer_os_to_sa()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$this->load->model(['Transaction_item']);
			$transType = 'SA';
			foreach ($post['trans'] as $os) {
				if ($os['check'] == 'Yes') {
					$trans_items = $this->Transaction_item->load_all_trans_items($os['id']);
					$count = 0;
					foreach ($trans_items as $item) {
						$item_qty = $this->Transaction->calculate_item_total_available_qty_of_szie($item['item_id'], $item['size']);
						$qty_av = 0;
						if ($item_qty) {
							if ($item_qty['total_qty']) {
								$qty_av = doubleval($item_qty['total_qty']);
							}
						}
						if (doubleval($item['qty']) <= $qty_av) {
							$count++;
						}
					}
					if ($count == count($trans_items)) {
						$trans = $this->Transaction->load_trans_data_by_trans_id($os['id']);
						if ($this->Transaction->set_next_auto_number_for_sale_and_exchange()) {
							$trans['auto_no'] = $this->Transaction->set_next_auto_number_for_sale_and_exchange();
						}
						$trans['trans_date'] = date('d-m-Y');
						$this->Transaction->set_fields($trans);
						$this->Transaction->set_field('id', '');
						$this->Transaction->set_field('relation_id', $os['id']);
						$this->Transaction->set_field('status', 0);
						$this->Transaction->set_field('status2', 'Pre-order');
						$this->Transaction->set_field('trans_type', $transType);
						$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
						$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
						$saved = $this->Transaction->insert();
						// var_dump($saved);
						// exit;
						if ($saved) {
							$this->load->model(['Warehouse', 'Transaction_item', 'Item']);
							$transaction_id = _gnv($this->Transaction->get_field('id'));
							foreach ($trans_items as $item) {
								// $warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
								$item_cost = $this->Item->fetch_item_cost($item["item_id"])["0"]["cost"];
								$profit = doubleval($item["price"]) - doubleval($item_cost);
								unset($item['id']);
								$this->Transaction_item->reset_fields();
								$this->Transaction_item->set_fields($item);
								$this->Transaction_item->set_field('transaction_id', $transaction_id);
								// $this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
								$this->Transaction_item->set_field('mvt_type', -1);
								$this->Transaction_item->set_field('cost', $item_cost);
								$this->Transaction_item->set_field('profit', $profit);
								$this->Transaction_item->set_field('net_cost', "0");
								$saved = $this->Transaction_item->insert();
								if ($saved) {
									$data = array(
										'transaction_item_id' => $this->Transaction_item->get_field("id"),
										'size' => $item["size"],
										'qty' => $item["size_qty"]
									);
									$this->db->insert('transaction_item_sizes', $data);
								}
							}
							$this->Transaction->update_qty($trans_items, -1);

							$total = $this->Transaction->calculate_transaction_total($trans_items, $this->Transaction->get_field('discount'));
							$total = doubleval($total) + doubleval($this->Transaction->get_field('delivery_charge'));
							$this->load->model('Account');
							$customer_acc = $this->Account->fetch_debit_and_balance($this->Transaction->get_field('account_id'));
							$this->Account->update_account_debit_and_balance($total, $customer_acc, $this->Transaction->get_field('account_id'));
							$sales_acc = $this->Account->fetch_credit_and_balance($this->Transaction->get_field('account2_id'));
							$this->Account->update_account_credit_and_balance($total, $sales_acc, $this->Transaction->get_field('account2_id'));

							$trans_data = $this->Transaction->load_trans_data_by_trans_id($this->Transaction->get_field('id'));
							$this->load->model('Journal');
							$this->Journal->reset_fields();
							$this->Journal->set_field('auto_no', $trans_data['auto_no']);
							$this->Journal->set_field('transaction_id', $this->Transaction->get_field('id'));
							$this->Journal->set_field('account_id', $trans_data['account_id']);
							$this->Journal->set_field('account2_id', $trans_data['account2_id']);
							$this->Journal->set_field('journal_date', $trans_data['trans_date']);
							$this->Journal->set_field('value_date', $trans_data['value_date']);
							$this->Journal->set_field('currency_id', $trans_data['currency_id']);
							$this->Journal->set_field('currency_rate', $trans_data['currency_rate']);
							$this->Journal->set_field('description', "SA NO " . $trans['auto_no']);
							$this->Journal->set_field('amount', $total);
							$this->Journal->set_field('journal_type', "SA");
							$this->Journal->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
							$this->Journal->set_field('user_id', $this->violet_auth->get_user_id());
							$this->Journal->insert();

							$journal_id = $this->Transaction->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'), $transType);
							$name1 = $this->Account->fetch_account_name_by_id($this->Transaction->get_field('account_id'));
							$name2 = $this->Account->fetch_account_name_by_id($this->Transaction->get_field('account2_id'));
							$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $this->Transaction->get_field('account2_id'), $this->Transaction->get_field('auto_no'), $total, "-1", $name1["0"]["account_name"], "Sale");
							$this->Transaction->save_in_journal_accounts($journal_id["0"]["id"], $this->Transaction->get_field('account_id'), $this->Transaction->get_field('auto_no'), $total, "1", $name2["0"]["account_name"], "Sale");
						}
					}
				}
			}
		}
		redirect('pre_orders/index');
	}

	public function get_max_qty_for_item_size_in_warehouse_shelf_case_pre_orders()
	{
		$item_id = $this->input->post('item_id');
		$warehouse = $this->input->post('warehouse');
		$shelf = $this->input->post('shelf');
		$size = $this->input->post('size');
		$this->load->model('Warehouse');
		$res = $this->Warehouse->fetch_item_size_qty_in_specific_warehouse_shelf_in_op($item_id, $size, $warehouse, $shelf);
		$pre = $this->Transaction->load_size_qty_of_item_ordered_in_untransfered_pre_orders($item_id, $size);
		$result['tot_qty'] = intval($res['tot_qty']) - intval($pre['qty']);
		$this->_render_json(
			$result
		);
	}

	public function get_max_qty_for_item_size_in_warehouse_shelf_validation_edit_pre_orders()
	{
		$item_id = $this->input->post('item_id');
		$warehouse = $this->input->post('warehouse');
		$shelf = $this->input->post('shelf');
		$size = $this->input->post('size');
		$trans_id = $this->input->post('trans_id');
		$this->load->model('Warehouse');
		$res = $this->Warehouse->fetch_item_size_qty_in_specific_warehouse_shelf_in_op($item_id, $size, $warehouse, $shelf);
		$pre = $this->Transaction->load_size_qty_of_item_ordered_in_untransfered_pre_orders_edit_mode($item_id, $size, $trans_id);
		$result['tot_qty'] = intval($res['tot_qty']) - intval($pre['qty']);
		$this->_render_json(
			$result
		);
	}

	public function get_all_sizes(){
		$this->load->model('Configuration');
		$res = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$this->_render_json(
			$res
		);
	}
}
