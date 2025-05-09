<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Warehouse $Warehouse

 */
class Opening_items extends MY_Controller
{

    public $Transaction = NULL;
    public $Transaction_item = NULL;
    public $Configuration = NULL;

    public function __construct()
    {
        parent::__construct();
        // $this->pageTitle = $this->lang->line('opening_items');
        $this->load->model('Transaction');
    }

    public function index()
    {
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Transaction->load_opening_items_data_tables(Transaction::OpeningItemTransType));
        } else {
            $this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'opening_items/index');
            // $this->pageTitle = $this->lang->line('opening_items');
            $this->load->model('Transaction_item');
            $data['records'] = $this->Transaction->paginate_opening_items(Transaction::OpeningItemTransType);
            $data['title'] = $this->lang->line('Opening_Items');
            $this->load->view('templates/header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
            ]);
            $this->load->view('opening_items/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'opening_items/index']]);
        }
    }

    public function add()
    {
        $this->save(0, Transaction::OpeningItemTransType);
    }

    public function edit($id = '0')
    {
        $this->save($id, Transaction::OpeningItemTransType);
    }

    private function save($id = '0', $transType)
    {
        $fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
        $post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
        // var_dump('<pre>');
        // var_dump($post['trans']["currency_rate"]);
        // exit;
        if ((!$fetched) and ($this->Transaction->set_next_auto_number($transType))) {
            $this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
        }
        if ($post['submitBtn']) {
            $this->load->model('Configuration');
            $local_currency= $this->Configuration->fetch_local_currency()['valueInt'];
            $this->Transaction->set_fields($post['trans']);
            $this->Transaction->set_field('account_id', 1);
            $this->Transaction->set_field('account2_id', 1);
            $this->Transaction->set_field('currency_id', $local_currency);
            $this->Transaction->set_field('currency_rate', 1);
            $this->Transaction->set_field('trans_type', $transType);
            $this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
            $this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
            $saved = $fetched ? $this->Transaction->update() : $this->Transaction->insert();
            if ($saved) {
                $this->load->model('Item');
                if (!$fetched) {
                    $qty_cost_array = $this->Transaction->get_array_of_qty_and_cost_of_each_item_in_trans($post['transItems']);
                    $this->Item->update_open_qty($qty_cost_array);
                    $this->Item->update_qty_in_op($qty_cost_array);
                    $this->Transaction->save_opening_items_trans_items_and_sizes($post['transItems'], 1);
                    redirect('opening_items/index');
                } elseif ($fetched) {                    
                    $old_open_qty_array= $this->Transaction->get_array_of_old_open_qty_each_item_in_trans_on_edit_op($post['transItems']);
                    $qty_cost_array = $this->Transaction->get_array_of_qty_and_cost_of_each_item_in_trans_on_edit_op($post['transItems']);
                    $edit_qty_array= [];
                    foreach($old_open_qty_array as $old){
                        foreach($qty_cost_array as $new){
                            if($old["item_id"] === $new["item_id"]){
                                $edit_qty = $new["qty"] - $old["qty"];
                                array_push($edit_qty_array, ["item_id" => $old["item_id"], "qty" => $edit_qty]);
                            }
                        }
                    }
                    $this->Item->update_open_qty($qty_cost_array);
                    $this->Item->update_qty_in_op($edit_qty_array);                   
                    $this->load->model('Transaction_item');
                    $trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
                    foreach ($trans_items_id as $t) {
                        $this->Transaction_item->delete($t["id"]);
                    }
                    //insert trans_items and sizes
                    $this->Transaction->save_opening_items_trans_items_and_sizes($post['transItems'], 1);              
                    $this->session->set_flashdata('message_op', $this->lang->line('Updated_Successfully'));
                    redirect($this->session->userdata('previous_url'));
                }
            } elseif ($this->Transaction->is_valid()) {
                redirect($this->session->userdata('previous_url'));
            }
        }
        $data = $this->_load_related_models($fetched, $transType);
        $this->load->view('templates/header', [
            '_moreCss' => ['js/air-datepicker/css/datepicker.min'],
            '_page_title' => $data['transTypeText']
        ]);
        $this->load->view('opening_items/form', $data);
        $this->load->view('templates/footer', [
            '_moreJs' => [
                'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
                'jquery.autocomplete.min', 'items/opening_items'
            ]
        ]);
    }

    private function _load_related_models($fetched, $transType)
    {
        $data = [];
        $this->load->model(['Currency']);
        $data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Transaction->get_transaction_types_list()[$transType];
        $data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
        $system_currency_id = $this->Currency->get_sys_config_cur()["valueint"];
        $data['system_currency_rate'] = $this->Currency->fetch_currency_rate($system_currency_id)["currency_rate"];
        $data['system_currency_code'] = $this->Currency->fetch_currency_code($system_currency_id)["currency_code"];
        $data['sizes'] = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
        if ($fetched) {
            $this->load->model('Transaction_item');
            $data['trans_items'] = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
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
            $data['item_id']= $data['trans_items'][0]["item_id"];
            $data['trans_date']= $this->Transaction->get_field('trans_date');
            $currency_id = $this->Currency->fetch_currency_id_by_code("€")["id"];
		    $data['currency_rate'] = $this->Currency->fetch_currency_rate($currency_id)["currency_rate"];
            $trans_items = $this->Transaction_item->load_all_trans_items_ids($this->Transaction->get_field('id'));
			$data["records"] = [];
			$size_list = [];
			foreach ($data['sizes'] as $d) {
				$size_list[$d] = 0;
			}
            $all_trans_items =$this->Transaction_item->load_all_trans_items_without_sizes($this->Transaction->get_field('id'));
			foreach ($trans_items as $t) {
				$sizes = $this->Transaction_item->load_trans_item_sizes_by_trans_item_id($t["id"]);
				foreach ($all_trans_items as $k => $i) {
					if ($i["id"] === $t["id"]) {
						$data["records"][$k] = $i;
						$data["records"][$k]["size_qty"] = $size_list;
						if ($sizes === []) {
							$data["records"][$k]["item_qty"] = $i["qty"];
						} else {
							$data["records"][$k]["item_qty"] = 0;
							foreach ($sizes as $s) {
								$data["records"][$k]["size_qty"][$s["size"]] = $s["qty"];
							}
						}
					}
				}
			}
            // var_dump('<pre>');
            // var_dump();
            // exit;
        } else {
            $data['trans_items'] = [];
            $data['records']= [];
            $this->load->model('Warehouse');
            $w = $this->Warehouse->load_warehouses_list();
            $data['warehouses_list'] = array_combine($w, $w);
            $data['trans_date']= date("d-m-Y");           
        }
        return $data;
    }

    public function delete($id)
    {
        $this->load->model('Transaction_item');
        $trans_items = $this->Transaction_item->load_all_trans_items($id);
        $this->load->model('Item');
        $this->Item->update_open_cost_and_open_qty_on_OP_delete($trans_items["0"]["item_id"]);
        if ($this->Transaction->delete($id)) {
            $this->Item->update_qty_on_delete_op($trans_items);
            redirect('opening_items/index');
        } else {
            redirect('opening_items/index');
        }
    }

    public function lookup_items()
    {
        $this->load->model('Item');
        $this->_render_json(
            $this->Item->search_suggestions(trim($this->input->get('query', true)))
        );
    }
}
