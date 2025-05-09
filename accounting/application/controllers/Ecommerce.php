<?php
defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Item $Item
 * @property Journal $Journal
 * @property Transaction $Transaction
 * @property Transaction_item $Transaction_item
 * @property Order $Order
 * @property Coupon $Coupon
 * @property Inbox $Inbox
 * @property Landing_page $Landing_page
 */
class Ecommerce extends MY_Controller
{

    public $Ecommerce = null;
    public $Ecommerce_user = null;
    public $Section = null;
    public $Landing_page = null;
    public $Configuration = null;
    public $User = null;

    public function __construct()
    {
        parent::__construct();
        // $this->pageTitle = $this->lang->line('Ecommerce');
        $this->load->model('Order');
    }

    public function index()
    {
        redirect('ecommerce/orders');
    }

    public function orders()
    {
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Order->load_ecommerce_orders_data_tables());
        } else {
            $this->load->model('Configuration');
            $status = $this->Configuration->fetch_status()["valueStr"];
            $status = explode(",", $status);
            $data['status'] = array_combine($status, $status);
            $this->load->model('User');
            $drivers = $this->User->load_all_users_with_type_driver();
            $data['drivers'] = [0 => ""];
            foreach ($drivers as $d) {
                $data['drivers'][$d["id"]] = $d["user_name"];
            }
            $data['records'] = $this->Order->paginate_ecommerce_orders();
            $data['title'] = $this->lang->line('Ecommerce_orders');
            $this->load->view('templates/eco_header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min'],
            ]);
            $this->load->view('ecommerce_orders/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'ecommerce_orders/index', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en']]);
        }
    }

    public function orders_history()
    {
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Order->load_ecommerce_orders_history_data_tables());
        } else {
            $data['records'] = $this->Order->paginate_ecommerce_orders_history();
            $data['title'] = $this->lang->line('Ecommerce_orders_history');
            $this->load->view('templates/eco_header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min'],
            ]);
            $this->load->view('ecommerce_orders/history', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'ecommerce_orders/history', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en']]);
        }
    }

    public function edit_order_status()
    {
        $post = $this->input->post(null, true);
        $this->load->model(['Order', 'Inbox', 'Transaction']);
        $order = $this->Order->load_order_data($post['order_id']);
        $sale_data = $this->Transaction->load_trans_data_by_trans_id($order['transaction_id']);
        if ($sale_data) {
            if ($post) {
                if ($post['old_status'] !== $post['status']) {
                    $updated = $this->Order->update_order_status($post['order_id'], $post['status']);
                    $this->Transaction->update_status2($order['transaction_id'], $post['status']);
                    if ($updated) {
                        $this->Inbox->set_field('from_user_id', 1);
                        $this->Inbox->set_field('to_user_id', $order["customer_id"]);
                        $this->Inbox->set_field('subject', 'Order #' . $order['auto_no'] . ' Status Changed');
                        $this->Inbox->set_field('message', 'Dear customer, your order #' . $order['auto_no'] . ' status changed from ' . $post['old_status'] . ' to ' . $post['status'] . '.');
                        $this->Inbox->set_field('date', date("Y-m-d"));
                        $saved = $this->Inbox->insert();
                    }
                }
                if ($post['dispatch_date']) {
                    $done = $this->Transaction->update_dispatch_date($order['transaction_id'], $post['dispatch_date']);
                }
                if ($post['driver']) {
                    $updated = $this->Transaction->update_driver($order['transaction_id'], $post['driver']);
                }
                $this->Order->update_hide_show_order($post['order_id'], 1);
                $this->Transaction->update_hide_show_invoice($order['transaction_id'], 0);
            }
            redirect('ecommerce/orders');
        }
        redirect('ecommerce/orders');
    }

    public function coupons()
    {
        $this->load->model('Coupon');
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Coupon->load_coupons_data_tables());
        } else {
            $data['records'] = $this->Coupon->paginate_coupons();
            // var_dump( $data['records']);
            // exit;
            $data['title'] = $this->lang->line('coupons');
            $this->load->view('templates/eco_header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min'],
            ]);
            $this->load->view('coupons/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'coupons/index']]);
        }
    }

    public function add_coupon()
    {
        $this->save_coupon(0, $this->lang->line('add_coupon'));
    }

    public function edit_coupon($id = '0')
    {
        $this->save_coupon($id, $this->lang->line('edit_coupon'));
    }

    private function save_coupon($id = '0', $page_title)
    {
        $this->load->model('Coupon');
        $fetched = ($id > 0 ? $this->Coupon->fetch(_gnv($id)) : false);
        $post = $this->input->post(null, true);
        if ($post) {
            $this->Coupon->set_field('coupon', $post["coupon"]);
            if ($post["customer_id"] == '') {
                $this->Coupon->set_field('customer_id', 1);
            } else {
                $this->Coupon->set_field('customer_id', $post["customer_id"]);
            }
            $this->Coupon->set_field('expiry_date', date("Y-m-d", strtotime($post["expiry_date"])));
            $this->Coupon->set_field('amount', $post["amount"]);
            $this->Coupon->set_field('discount_type', $post["discount_type"]);
            $this->Coupon->set_field('limited', $post["limited"]);
            $this->Coupon->set_field('usage_times', $post["usage_times"]);
            if ($fetched) {
                $this->Coupon->set_field('id', $post["id"]);
            }
            $saved = $fetched ? $this->Coupon->update() : $this->Coupon->insert();
            redirect('ecommerce/coupons');
            // var_dump($saved);
            // exit;
        }
        if ($fetched) {
            $this->load->model('Account');
            if ($this->Coupon->get_field('customer_id') !== '1') {
                $acc_id = $this->Account->fetch_account_id_by_ecommerce_user_id($this->Coupon->get_field('customer_id'));
                $account = $this->Account->load($acc_id['account_id']);
                $data['customer_selected'] = "{$account['account_number']} - {$account['account_name']}";
            } else {
                $data['customer_selected'] = '';
            }
        } else {
            $data['customer_selected'] = '';
        }
        $this->load->model('Coupon');
        $data['discount_type'][0] = '%';
        $data['discount_type'][1] = '$';
        $data['title'] = $page_title;
        $data['limited_list'][1] = 'Limited';
        $data['limited_list'][0] = 'Unlimited';
        $this->load->view('templates/eco_header', [
            '_page_title' => $data['title'],
            '_moreCss' => ['js/air-datepicker/css/datepicker.min'],
        ]);
        $this->load->view('coupons/form', $data);
        $this->load->view('templates/footer', ['_moreJs' => ['air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'jquery.autocomplete.min', 'coupons/form']]);
    }

    public function lookup_customer_users()
    {
        $this->load->model('Account');
        $this->_render_json(
            $this->Account->search_eco_users_suggestions(trim($this->input->get('query', true)))
        );
    }

    public function check_if_coupon_exists()
    {
        $this->load->model('Coupon');
        $coupon = $this->input->post('coupon');
        $this->_render_json(
            $this->Coupon->check_if_coupon_code_exists($coupon)
        );
    }

    public function inbox()
    {
        $this->load->model('Inbox');
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Inbox->load_inbox_data_tables());
        } else {
            $data['records'] = $this->Inbox->paginate_inbox();
            $data['title'] = $this->lang->line('inbox');
            $this->load->view('templates/eco_header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min'],
            ]);
            $this->load->view('inbox/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'inbox/index']]);
        }
    }

    public function sent_messages()
    {
        $this->load->model('Inbox');
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Inbox->load_sent_messages_data_tables());
        } else {
            $data['records'] = $this->Inbox->paginate_sent_messages();
            $data['title'] = $this->lang->line('sent_messages');
            $this->load->view('templates/eco_header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min'],
            ]);
            $this->load->view('inbox/sent_messages', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'inbox/sent_messages']]);
        }
    }

    public function create_message()
    {
        $this->load->model('Inbox');
        $post = $this->input->post(null, true);
        if ($post) {
            // var_dump($post);
            // exit;
            $this->Inbox->set_field('from_user_id', 1);
            if ($post["customer_id"]) {
                $this->Inbox->set_field('to_user_id', $post["customer_id"]);
            } else {
                $this->Inbox->set_field('to_user_id', 1);
            }
            $this->Inbox->set_field('subject', $post["subject"]);
            $this->Inbox->set_field('message', $post["message"]);
            $this->Inbox->set_field('date', date("Y-m-d"));
            $saved = $this->Inbox->insert();
            if ($saved) {
                redirect('ecommerce/sent_messages');
            } else {
                redirect('ecommerce/inbox');
            }
        }
        $data['subject'] = '';
        $data['message'] = '';
        $data['date'] = '';
        $data['to_user_id'] = '';
        $data['msg_id'] = '';
        $data['customer'] = '';
        $data['title'] = $this->lang->line('create_message');
        $this->load->view('templates/eco_header', [
            '_page_title' => $data['title'],
            '_moreCss' => [],
        ]);
        $this->load->view('inbox/form', $data);
        $this->load->view('templates/footer', ['_moreJs' => ['jquery.autocomplete.min', 'inbox/form']]);
    }

    public function sales()
    {
        $this->load->model('Transaction');
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Transaction->load_ecommerce_sales_data_tables(Transaction::SaleTransType));
        } else {
            $this->session->unset_userdata('previous_url');
            $this->session->set_userdata('previous_url', 'ecommerce/sales');
            $this->load->model('Transaction_item');
            $data['records'] = $this->Transaction->paginate_ecommerce_sales_data(Transaction::SaleTransType);
            $data['title'] = $this->lang->line('Ecommerce_Sales');
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
            $this->load->view('templates/eco_header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min'],
            ]);
            $this->load->view('ecommerce_sales/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'dataTables.datetime.format', 'ecommerce_sales/index']]);
        }
    }

    public function update_coupon_deactivate_field()
    {
        $this->load->model('Coupon');
        $coupon_id = $this->input->post('coupon_id');
        $deactivate = $this->input->post('deactivate');
        $res = $this->Coupon->update_coupon_deactivate($coupon_id, $deactivate);
        echo ($res) ? '1' : '0';
    }

    public function users()
    {
        $this->load->model('Ecommerce_user');
        if ($this->input->is_ajax_request()) {
            $this->_render_json($this->Ecommerce_user->load_ecommerce_users_data_tables());
        } else {
            $data['records'] = $this->Ecommerce_user->paginate_ecommerce_users();
            $data['title'] = $this->lang->line('inbox');
            $this->load->view('templates/eco_header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min'],
            ]);
            $this->load->view('ecommerce_users/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'ecommerce_users/index']]);
        }
    }

    public function get_order_data_and_items()
    {
        $this->load->model('Order');
        $order_id = $this->input->post('order_id');
        $order['order_data'] = $this->Order->load_order_data($order_id);
        $order['order_data']['address_details'] = explode("-", $order['order_data']['address']);
        $order['items'] = $this->Order->load_order_items($order_id);
        $this->_render_json($order);
    }

    public function preview_order_private_waybil($order_id)
    {
        $this->load->model('Order');
        $order = $this->Order->load_order_data($order_id);
        redirect('sales/preview/' . $order['transaction_id']);
    }

    public function delete_message($msg_id)
    {
        $this->load->model('Inbox');
        if ($this->Inbox->delete($msg_id)) {
            $this->session->set_flashdata('message', $this->lang->line('Deleted_Successfully'));
        } else {
            $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
        }
        redirect('ecommerce/sent_messages');
    }

    public function edit_message($msg_id)
    {
        $this->load->model(['Inbox', 'Account']);
        $msg = $this->Inbox->load_message_data($msg_id);
        $data['subject'] = $msg['subject'];
        $data['message'] = $msg['message'];
        $data['date'] = $msg['date'];
        $data['to_user_id'] = $msg['to_user_id'];
        $data['msg_id'] = $msg['id'];
        if ($data['to_user_id'] != 1) {
            $customer = $this->Account->get_ecommerce_user_info($data['to_user_id']);
            $data['customer'] = $customer['info'];
        } else {
            $data['customer'] = 'All';
        }
        $post = $this->input->post(null, true);
        if ($post) {
            $this->Inbox->set_field('id', $data['msg_id']);
            $this->Inbox->set_field('from_user_id', 1);
            if ($post["customer_id"]) {
                $this->Inbox->set_field('to_user_id', $post["customer_id"]);
            } else {
                $this->Inbox->set_field('to_user_id', 1);
            }
            $this->Inbox->set_field('subject', $post["subject"]);
            $this->Inbox->set_field('message', $post["message"]);
            $saved = $this->Inbox->update();
            if ($saved) {
                $this->session->set_flashdata('message_success', $this->lang->line('Updated_Successfully'));
            } else {
                $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
            }
            redirect('ecommerce/edit_message/' . $data['msg_id']);
        }
        $data['title'] = $this->lang->line('edit_message');
        $this->load->view('templates/eco_header', [
            '_page_title' => $data['title'],
            '_moreCss' => [],
        ]);
        $this->load->view('inbox/form', $data);
        $this->load->view('templates/footer', ['_moreJs' => ['jquery.autocomplete.min', 'inbox/form']]);
    }

    public function reset_ecommerce_user_password()
    {
        $customer_id = $this->input->post('customer_id');
        $this->load->model(['Ecommerce_user']);
        $res = $this->Ecommerce_user->reset_password($customer_id);
        echo ($res) ? '1' : '0';
    }

    public function sections()
    {
        $this->load->model(['Section']);
        $post = $this->input->post(null, true);
        // var_dump($post);exit;
        if ($post) {
            $countfiles = count($_FILES['files']['name']);
            $data['filenames'] = [];
            // Looping all files
            for ($i = 0; $i < $countfiles; $i++) {

                if (!empty($_FILES['files']['name'][$i])) {

                    // Define new $_FILES array - $_FILES['file']
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                    // Set preference
                    $config['upload_path'] = './sections_uploads';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size'] = '5000'; // max_size in kb
                    $config['file_name'] = $_FILES['files']['name'][$i];

                    //Load upload library
                    $this->load->library('upload', $config);

                    // File upload
                    if ($this->upload->do_upload('file')) {
                        // Get data about the file
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];
                        // Initialize array
                        $data['filenames'][] = $filename;
                        //update data base
                        $this->Section->update_section_value($post['id'], $filename);
                    } else {
                        $errors = array('error' => $this->upload->display_errors());
                    }
                }
            }
        }
        $data['sections'] = $this->Section->load_all_sections();
        // var_dump($data['sections']);exit;
        $data['title'] = $this->lang->line('sections');
        $this->load->view('templates/eco_header', [
            '_page_title' => $data['title'],
            '_moreCss' => [],
        ]);
        $this->load->view('sections/form', $data);
        $this->load->view('templates/footer', ['_moreJs' => []]);
  
    }
    public function update_sections()
    {
        $this->load->model(['Section']);
        $post = $this->input->post(null, true);
        // var_dump($post);exit;
        if ($post) {
            $countfiles = count($_FILES['files']['name']);
            $data['filenames'] = [];
            // Looping all files
            for ($i = 0; $i < $countfiles; $i++) {

                if (!empty($_FILES['files']['name'][$i])) {

                    // Define new $_FILES array - $_FILES['file']
                    $_FILES['file']['name'] = $_FILES['files']['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files']['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files']['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files']['size'][$i];

                    // Set preference
                    $config['upload_path'] = './sections_uploads';
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';
                    $config['max_size'] = '5000'; // max_size in kb
                    $config['file_name'] = $_FILES['files']['name'][$i];
                    // var_dump($_FILES['file']);
                    //Load upload library
                    $this->load->library('upload', $config);

                    // File upload
                    if ($this->upload->do_upload('file')) {
                        // Get data about the file
                        $uploadData = $this->upload->data();
                        $filename = $uploadData['file_name'];
                        // Initialize array
                        $data['filenames'][] = $filename;
                        //update data base
                        $this->Section->update_section_value($post['id'], $filename);
                    } else {
                        $errors = array('error' => $this->upload->display_errors());
                        if(isset($errors["error"])){
                            $this->session->set_flashdata('message_error', trim($errors["error"]));
                        }
                    }
                }
            }
        }
        // exit;
        // $data['sections'] = $this->Section->load_all_sections();
        // var_dump($data['sections']);exit;
        // $data['title'] = $this->lang->line('sections');
        // $this->load->view('templates/eco_header', [
        //     '_page_title' => $data['title'],
        //     '_moreCss' => [],
        // ]);
        // $this->load->view('sections/form', $data);
        // $this->load->view('templates/footer', ['_moreJs' => []]);
        $cat_id = $post['id']-10;
        redirect('ecommerce/landing_page/' . $cat_id);
    }
    public function check_if_their_orders_unhided()
    {
        $this->load->model(['Order']);
        $res = $this->Order->load_all_unhided_orders();
        if (count($res) > 0) {
            echo 1;
        } else {
            echo 0;
        }
    }

 public function landing_page($category = null)
    {
        $this->load->model(['Landing_page']);
        // $data['categories'] = ['', 'shoes', 'Bags & Wallets', 'Hats', 'Sunglasses', 'Perfume', 'Clothing', 'Bracelets', 'Hair & Skin Products', 'Socks'];
        $data['sections'] = ['', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
        $allsections = $this->Landing_page->load_all_landing_page_sections();
        $data['categories'][] = "";
        foreach ($allsections as $s) {
            $data['categories'][] = $s['cat_name'];
        }
        // var_dump($data);exit;
        $data['selected_category'] = $category;
        $data['items'] = [];
        $data['section_nb'] = [];
        $data['banner_data']=[];
        if ($category) {
            if (isset($data['categories'][$category])) {
                $data['items'] = $this->Landing_page->load_all_landing_page_items_by_category($data['categories'][$category]);
                // echo($this->db->last_query());exit;
                // var_dump($data['categories'][$category] );exit;
                $data['section_nb'] = $this->Landing_page->load_all_landing_page_sections_by_category($data['categories'][$category]);
                // var_dump($data['section_nb']);exit;
                if($category == 10){
                    $load_section_id = 26;
                }else{
                    $load_section_id = $category + 10;
                }

                $data['banner_data'] = $this->Landing_page->load_section($data['section_nb'][0]['banner_id']+1);
                // var_dump($data['items']);exit;
            }
        }

        
        // var_dump($data['section_nb']);exit;
        $data['title'] = $this->lang->line('landing_page');
        $this->load->view('templates/eco_header', [
            '_page_title' => $data['title'],
            '_moreCss' => [],
        ]);
        $this->load->view('landing_page/index', $data);
        $this->load->view('templates/footer', ['_moreJs' => ['jquery.autocomplete.min', 'landing_page/index']]);
    }

    public function change_landing_page_item()
    {
        $post = $this->input->post(null, true);
        if ($post) {
            $this->load->model(['Landing_page']);
            $check = $this->Landing_page->check_if_item_exists($post['item_id']);
            if (!$check) {
                $res = $this->Landing_page->update_landing_page_item_id($post['item_id'], $post['id']);
                if ($res) {
                    $this->session->set_flashdata('message_success', $this->lang->line('Updated_Successfully'));
                } else {
                    $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
                }
            } else {
                $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Item_Already_Selected'));
            }
            redirect('ecommerce/landing_page/' . $post['category']);
        } else {
            $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
            redirect('ecommerce/landing_page');
        }
    }

    public function change_landing_page_items()
    {
        $post = $this->input->post(null, true);
        
        if ($post) {
            $this->load->model(['Landing_page']);

            $old_section_nb = $post['old_section_nb'];
            $section_id = $post['section_id'];
            $section_nb = $post['section_nb'];
            $replaye_array = $this->Landing_page->load_landing_page_sections_by_section_number($section_nb);
            // var_dump($replaye_array);exit;

            $this->Landing_page->update_landing_page_sections($replaye_array[0]['id'], $old_section_nb);
            $this->Landing_page->update_landing_page_sections($section_id, $section_nb);
            foreach ($post['item']['item_id'] as $k => $i) {
                if ($i) {
                    $res = $this->Landing_page->update_landing_page_item_id($i, $post['item']['id'][$k]);
                }
            }
            $this->session->set_flashdata('message_success', $this->lang->line('Updated_Successfully'));
            redirect('ecommerce/landing_page/' . $post['category']);
        } else {
            $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
            redirect('ecommerce/landing_page');
        }
    }
}
