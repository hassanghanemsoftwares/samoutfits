<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Warehouse $Warehouse
 * @property Transaction_item $Transaction_item

 */
class Order_purchases extends MY_Controller
{

    public $Transaction = NULL;
    public $Transaction_item = NULL;
    public $Configuration = NULL;
    public $Warehouse = NULL;
    public $Journal = NULL;

    public function __construct()
    {
        parent::__construct();
        // $this->pageTitle = $this->lang->line('order_purchases');
        $this->load->model('Transaction');
    }
 
    public function index()
    {
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Transaction->load_transactions_data_tables(Transaction::OrderPurchaseTransType, true));
        } else {
            $this->session->unset_userdata('previous_url');
            $this->session->set_userdata('previous_url', 'order_purchases/index');
            // $this->pageTitle = $this->lang->line('order_purchases');
            $this->load->model('Transaction_item');
            $data['records'] = $this->Transaction->paginate_order_purchases();
            $data['title'] = $this->lang->line('order_purchases');
            $this->load->view('templates/header', [
                '_page_title' =>  $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
            ]);
            $this->load->view('order_purchases/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.datetime.format', 'order_purchases/index']]);
        }
    }

    public function add()
    {
        $this->save(0, Transaction::OrderPurchaseTransType);
    }

    public function edit($id = '0')
    {
        $this->save($id, Transaction::OrderPurchaseTransType);
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
                    //insert trans_items and trans_items_sizes
                    $this->Transaction->save_purchases_trans_items_and_sizes($post['transItems'], 0);

                    //insert journal
                    $total = $this->Transaction->calculate_purchase_total($post['transItems'], $post['trans']['discount']);
                    $trans_id = $this->Transaction->fetch_transaction_id_by_autono($post['trans']['auto_no'], $transType);
                    $this->Transaction->save_transaction_in_journals($post['trans'], $trans_id["0"]["id"], $total, "OP");
                    if ($this->violet_auth->get_user_type() === "Employee") {
                        redirect('sales/index');
                    } else {
                        redirect('order_purchases/index');
                    }
                } elseif ($fetched) {
                    //delete trans_items
                    $this->load->model('Transaction_item');
                    $trans_items_id = $this->Transaction_item->fetch_trans_items_id_for_edit($this->Transaction->get_field('id'));
                    foreach ($trans_items_id as $t) {
                        $this->Transaction_item->delete($t["id"]);
                    }
                    //insert trans_items and trans_items_sizes
                    $this->Transaction->save_purchases_trans_items_and_sizes($post['transItems'], 0);

                    //delete journal
                    $this->load->model('Journal');
                    $journal_id = $this->Journal->fetch_journal_id_by_transaction_id($this->Transaction->get_field('id'));
                    $this->Journal->delete($journal_id["id"]);
                    //insert journal
                    $total = $this->Transaction->calculate_purchase_total($post['transItems'], $post['trans']['discount']);
                    $this->Transaction->save_transaction_in_journals($post['trans'], $this->Transaction->get_field('id'), $total, "OP");
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
        $this->load->view('order_purchases/order_purchase_form', $data);
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
        $data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Transaction->get_transaction_types_list()[$transType];
        $data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
        $data['currenciesList'] = $this->Currency->load_currencies_list();
        $data['account_type'] = array(
            "Customer" => "Customer", "Supplier" => "Supplier",
            "Cash" => "Cash", "Expenses" => "Expenses",
            "Bank" => "Bank", "Sale VAT" => "Sale VAT",
            "Purchase VAT" => "Purchase VAT"
        );
        $this->load->model('Account');
        $this->load->model('Configuration');
        $TVA1 = $this->Configuration->fetch_TVA1()["valueStr"];
        $TVA2 = $this->Configuration->fetch_TVA2()["valueStr"];
        $TVA = [0, doubleval($TVA1), doubleval($TVA2)];
        $data['TVA'] = array_combine($TVA, $TVA);
        $categories = $this->Configuration->fetch_categories()["valueStr"];
        $categories = explode(",", $categories);
        $data['categories'] = array_combine($categories, $categories);
        $data['sizes'] = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
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
        } else {
            $data['account'] = '';
            $data['account2'] = '';
            $data['trans_items'] = [];
            $this->load->model('Warehouse');
            $w = $this->Warehouse->load_warehouses_list();
            $data['warehouses_list'] = array_combine($w, $w);
            $data['trans_date'] = date("d-m-Y");
            $data['value_date'] = date("d-m-Y");
            $data["records"] = [];
        }
        return $data;
    }

    public function delete($id)
    {
        if ($this->Transaction->delete($id)) {

            redirect('order_purchases/index');
        } else {
            redirect('order_purchases/index');
        }
    }

    public function to_purchase($id)
    {
        $transType = "PU";
        $fetched = ($id > 0 ? $this->Transaction->fetch(_gnv($id)) : false);
        $post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
        if (($this->Transaction->set_next_auto_number($transType))) {
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
                //insert trans_items and trans_items_sizes
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
                $this->Transaction->update_status($id);
                redirect('purchases/index');
            } elseif ($this->Transaction->is_valid()) {
                redirect('purchases/index');
            }
        }
        $data = $this->_load_related_models($fetched, $transType);
        $data['transTypeText'] = "Order Purchases to Purchase";
        $this->load->view('templates/header', [
            '_moreCss' => ['js/air-datepicker/css/datepicker.min'],
            '_page_title' => $data['transTypeText']
        ]);
        $this->load->view('order_purchases/order_purchase_form', $data);
        $this->load->view('templates/footer', [
            '_moreJs' => [
                'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
                'jquery.autocomplete.min', 'transactions/purchase'
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
        $data['title'] = "Order Purchase";
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

    public function op_inventory()
    {
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Transaction->load_order_purchases_inventory_data_tables());
        } else {
            $data['records'] = $this->Transaction->paginate_order_purchases_inventory();
            // var_dump($data['records']);exit;
            $data['title'] = 'OP Items Report';
            $this->load->view('templates/header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
            ]);
            $this->load->view('order_purchases/op_inventory', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.datetime.format', 'order_purchases/op_inventory']]);
        }
    }

    public function check_if_op_nb_exists()
    {
        $op_nb = $this->input->post('op_nb');
        $trans_type = $this->input->post('trans_type');
        $trans_id = $this->input->post('trans_id');
        $res = $this->Transaction->check_if_op_nb_exists_by_trans_type($op_nb, $trans_type, $trans_id);
        $this->_render_json($res);
    }

    public function inventory()
    {
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Transaction->load_op_inventory_data_tables());
        } else {
            $data['records'] = $this->Transaction->paginate_op_inventory_data();
            // var_dump($data['records']);exit;
            $data['title'] = $this->lang->line('order_purchases_inventory');
            $this->load->view('templates/header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
            ]);
            $this->load->view('order_purchases/inventory', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.datetime.format', 'order_purchases/inventory']]);
        }
    }
}
