<?php
defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property User $User
 * @property Transaction $Transaction
 * @property Transaction_item $Transaction_item
 * @property Journal $Journal
 */
class Reports extends MY_Controller
{
    public $Configuration = NULL;
    public $Item = NULL;
    public $Transaction = NULL;
    public $Transaction_item = NULL;
    public $Journal = NULL;
    public $Currency = NULL;

    public function __construct()
    {
        parent::__construct();
    }

    public function wakilni_data()
    {
        $this->load->model('Transaction');

        $data["title"] = $this->lang->line("Wakilni_Data_Report");
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Transaction->load_wakilni_data_report_data_tables());
        } else {
            $data["records"] = $this->Transaction->paginate_wakilni_data_report();
            $this->load->view('templates/header', [
                '_page_title' => $data["title"],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min']
            ]);
            $this->load->view('reports/wakilni_report', $data);
            $this->load->view('templates/footer', ['_moreJs' => [
                'jquery.dataTables.min',
                'dataTables.bootstrap.min',
                'air-datepicker/js/datepicker.min',
                'air-datepicker/js/i18n/datepicker.en',
                'xlsx.full.min',
                'reports/wakilni'
            ]]);
        }
    }

    public function daily_pickup()
    {
        $this->load->model('Transaction');
        $data['title'] = $this->lang->line("Daily_Pickup_Report");
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Transaction->load_daily_pickup_report_data_tables());
        } else {
            $data["records"] = $this->Transaction->paginate_daily_pickup_report();
            $this->load->view('templates/header', [
                '_page_title' => $data["title"],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min']
            ]);
            $this->load->view('reports/daily_pickup_report', $data);
            $this->load->view('templates/footer', ['_moreJs' => [
                'jquery.dataTables.min',
                'dataTables.bootstrap.min',
                'air-datepicker/js/datepicker.min',
                'air-datepicker/js/i18n/datepicker.en',
                'xlsx.full.min',
                'reports/daily_pickup'
            ]]);
        }
    }

    public function print_wakilni_report()
    {
        $data['records'] = $this->input->post('rows');
        $this->load->view('templates/print_h');
        $this->load->view('reports/wakilni_print', $data);
        $this->load->view('templates/print_f');
    }

    public function print_daily_pickup_report()
    {
        $data['records'] = $this->input->post('rows');
        $this->load->view('templates/print_h');
        $this->load->view('reports/daily_pickup_print', $data);
        $this->load->view('templates/print_f');
    }

    public function daily_sales()
    {
        $data['hide_table'] = 0;
        $this->load->model('Configuration');
        $post = $this->input->post(null, true);
        $sources = $this->Configuration->fetch_source()["valueStr"];
        $data['sources'] = explode(",", $sources);
        $status2 = $this->Configuration->fetch_status()["valueStr"];
        $data['status2'] = explode(",", $status2);
        $categories = $this->Configuration->fetch_categories()["valueStr"];
        $data['categories'] = explode(",", $categories);
        $this->load->model('User');
        $users = $this->User->load_all_users();
        $data['users'] = [];
        foreach ($users as $u) {
            $data['users'][$u['id']] = $u['user_name'];
        }
        $data['selected_users'] = [];
        if ($post) {
            $data['hide_table'] = 1;
            $data['selected_date'] = $post["date"];
            $this->load->model('Transaction');
            $date = date("Y-m-d", strtotime($post["date"]));
            foreach ($post["users"] as $su) {
                $data['selected_users'][$su] = $data['users'][$su];
            }
            $data["sales_count"] = $this->Transaction->calculate_number_of_invoices_by_date($date)["count"];
            //sources          
            foreach ($data['sources'] as $s) {
                $data["count_by_source"][$s] = $this->Transaction->calculate_number_of_invoices_by_source_and_date($s, $date)["count"];
            }
            //status
            foreach ($data['status2'] as $st) {
                $data["count_by_status"][$st] = $this->Transaction->calculate_number_of_invoices_by_status_and_date($st, $date)["count"];
            }
            //categories
            foreach ($data['categories'] as $c) {
                $data["products_by_categories"][$c] = $this->Transaction->calculate_number_of_products_of_daily_invoices_by_categories($c, $date)["qty"];
            }
            //users
            foreach ($post["users"] as $u) {
                $data["count_by_user"][$u] = $this->Transaction->calculate_number_of_invoices_by_user_and_date($u, $date)["count"];
            }
        } else {
            $data["sales_count"] = 0;
            //sources          
            foreach ($data['sources'] as $s) {
                $data["count_by_source"][$s] = 0;
            }
            //status
            foreach ($data['status2'] as $st) {
                $data["count_by_status"][$st] = 0;
            }
            //categories
            foreach ($data['categories'] as $c) {
                $data["products_by_categories"][$c] = 0;
            }
            //users
            $data['selected_users'] = '';
        }
        $data['title'] = $this->lang->line("Daily_Sales_Report");
        $this->load->view('templates/header', [
            '_page_title' => $data['title'],
            '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'css/bootstrap-select.min', 'js/air-datepicker/css/datepicker.min']
        ]);
        $this->load->view('reports/daily_sales_report', $data);
        $this->load->view('templates/footer', ['_moreJs' => [
            'jquery.dataTables.min',
            'dataTables.bootstrap.min',
            'xlsx.full.min',
            'bootstrap-select.min',
            'reports/daily_sales',
            'air-datepicker/js/datepicker.min',
            'air-datepicker/js/i18n/datepicker.en'
        ]]);
    }

    public function stock()
    {
        $this->load->model('Transaction');
        $this->load->model('Configuration');
        $post = $this->input->post(null, true);
        $data['from'] = '';
        $data['name'] = '';
        $data['item_id'] = '';
        $data['to'] = '';
        $data['size'] = '';
        $data['records'] = [];
        $data['sizes'] = array(
            '' => '',
            'No' => 'No'
        );
        $sizes = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
        foreach ($sizes as $s) {
            $data['sizes'][$s] = $s;
        }
        if ($post) {
            $data['records'] = $this->Transaction->load_stock_report_data($post);
            $data['from'] = $post['from_date'];
            $data['to'] = $post['to_date'];
            $data['size'] = $post['size'];
            $data['name'] = $post['select_item'];
            $data['item_id'] = $post['item_id'];
        }
        $data['title'] = $this->lang->line("Product_History");
        $this->load->view('templates/header', [
            '_page_title' => $data['title'],
            '_moreCss' => ['js/air-datepicker/css/datepicker.min']
        ]);
        $this->load->view('reports/stock_report', $data);
        $this->load->view('templates/footer', ['_moreJs' => [
            'reports/stock',
            'jquery.autocomplete.min',
            'air-datepicker/js/datepicker.min',
            'air-datepicker/js/i18n/datepicker.en'
        ]]);
    }

    public function  multi_invoices()
    {
        $post = $this->input->post(null, true);
        $trans = [];
        $data['multi_auto_no'] =  '';
        $data['status_selected'] =  '0';
        if ($post) {
            if ($post['multi_auto_no'] || $post['status2']) {
                $data['multi_auto_no'] = $post['multi_auto_no'];
                $data['status_selected'] =  $post['status2'];
                $this->load->model(['Transaction', 'Item']);
                $auto_nos = explode(",", $post['multi_auto_no']);
                $res = $this->Transaction->load_multi_invoices_report_data($auto_nos, $data['status_selected']);
                // echo($this->db->last_query());var_dump($post['multi_auto_no'], $auto_nos, $data['status_selected']);exit;
                foreach ($res as $r) {
                    $images = $this->Item->load_item_image($r['item_id']);
                    if ($images) {
                        $image = $images[0]['image_name'];
                    } else {
                        $image = 'no_image.png';
                    }
                    $item = $r;
                    $item['image'] = $image;
                    // exit;
                    $trans[$r['auto_no']][] = $item;
                }
                // var_dump($trans);exit;
            }
        }
        // $this->load->model('Configuration');
        // $status2 = $this->Configuration->fetch_status()["valueStr"];
        // $status2 = explode(",", $status2);
        $status2 = array(
            0 => 'Received & Pending Approval',
            1 => 'Accepted & Preparing',
            2 => 'Packed & Ready For Pick-up',
            3 => 'Dispatched',
            4 => 'Pre-order',
            5 => 'Pending By Administration',
        );
        $data['status2'][0] = '';
        foreach ($status2 as $s) {
            $data['status2'][$s] = $s;
        }
        $data['trans']  = $trans;
        $data['title'] = $this->lang->line("Packing_Orders_Report");
        $this->load->view('templates/header', [
            '_page_title' => $data['title'],
            '_moreCss' => ['js/air-datepicker/css/datepicker.min']
        ]);
        $this->load->view('reports/multi_invoices', $data);
        $this->load->view('templates/footer', ['_moreJs' => [
            'reports/stock',
            'jquery.autocomplete.min',
            'air-datepicker/js/datepicker.min',
            'air-datepicker/js/i18n/datepicker.en'
        ]]);
    }

    public function accounts_history()
    {
        $data['account'] = '';
        $data['account_id'] = '';
        $data['account_info'] = [];
        $data['records'] = [];
        $get = $this->input->get(null, true);
        if ($get) {
            // $data['account'] = $post['account'];
            $data['account_id'] = $get['account_id'];
            $this->load->model(['Account', 'Journal', 'Currency']);
            $data['account_info'] = $this->Account->load($data['account_id']);
            $data['acc_cdb'] = $this->Account->load_account_credit_debit_balance($data['account_id']);
            $currency = $this->Currency->load($data['account_info']['currency_id']);
            $data['account_info']['currency_code'] = $currency['currency_code'];
            $data['records'] = $this->Journal->load_account_history($data['account_id']);
            // var_dump();
            // exit;
        }
        $data['title'] = $this->lang->line('accounts_history');
        $this->load->view('templates/header', [
            '_page_title' =>  $data['title']
        ]);
        $this->load->view('reports/accounts_history', $data);
        $this->load->view('templates/footer', ['_moreJs' => ['jquery.autocomplete.min', 'reports/accounts_history']]);
    }

    public function profits_per_date()
    {
        $this->load->model('Transaction');
        $post = $this->input->post(null, true);
        $data["from"] = date("d-m-Y");
        $data["to"] = date("d-m-Y");
        if ($post) {
            $data["from"] = $post["from_date"];
            $data["to"] = $post["to_date"];
        }
        $data['records'] = $this->Transaction->load_profits_per_date_data($data["from"], $data["to"]);
        // var_dump($data['records']);exit;
        $data['title'] = $this->lang->line("profits_per_date");
        $this->load->view('templates/header', [
            '_page_title' => $data['title'],
            '_moreCss' => ['js/air-datepicker/css/datepicker.min']
        ]);
        $this->load->view('reports/profits_per_date', $data);
        $this->load->view('templates/footer', ['_moreJs' => [
            'air-datepicker/js/datepicker.min',
            'air-datepicker/js/i18n/datepicker.en',
            'reports/profits_per_date'
        ]]);
    }
}
