<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property Item $Item
 * @property Order $Order
 * @property Order_item $Order_item
 * @property User $User
 * @property Transaction $Transaction
 * @property Transaction_item $Transaction_item
 * @property Journal $Journal
 */
class Checkout extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        // Load cart library
        $this->load->library('cart');
        $this->load->model('Item');
    }

    public function index()
    {
        $data = array();
        $post = $this->input->post(null, true);
        $this->load->model('Account');
        $data['account'] = $this->Account->fetch_customer_account_data($this->violet_auth->get_user_id());
        $data['discount'] = $post['discount'];
        $data['coupon_id'] = $post['coupon_id'];
        $data['discount_type'] = $post['discount_type'];
        $data['cartItems'] = $this->cart->contents();
        $this->load->model('Configuration');
        $delivery_charge = $this->Configuration->fetch_delivery_charge();
        if ($delivery_charge['valueStr']) {
            $data['delivery_charge'] = $delivery_charge['valueStr'];
        } else {
            $data['delivery_charge'] = 0;
        }
        if ($data['cartItems']) {
            $data['subtotal'] = 0;
            foreach ($data['cartItems'] as $item) {
                $data['subtotal'] += $item['subtotal'];
            }
            $data['total'] = $data['subtotal'];
            if ($data['discount_type'] == '1') {
                $data['total'] = $data['total'] - $data['discount'];
            } else {
                $data['total'] = $data['total'] - (($data['total'] * $data['discount']) / 100);
            }
            if (doubleval($data['total']) < 0) {
                $data['total'] = 0;
            }
            $data['total'] = $data['total'] + $data['delivery_charge'];
            $data['title'] = $this->lang->line('Checkout');
            $this->load->view('templates/header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
            ]);
            $this->load->view('checkout/index', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'checkout/index']]);
        } else {
            $this->session->set_flashdata('message', $this->lang->line('*Can_not_proceed_your_cart_is_empty!*'));
            redirect('cart/index');
        }
    }

    //direct checkout and make order start
    public function direct_order()
    {
        $post = $this->input->post(null, true);

        $data['cartItems'] = $this->cart->contents();
        $this->load->model('Configuration');
        $delivery_charge = $this->Configuration->fetch_delivery_charge();
        $data['discount'] = 0;
        $data['coupon_id'] = 0;
        $data['discount_type'] = 1;
        if ($post) {
            $data['coupon'] = $post['coupon'];
            $data['discount'] = $post['discount'];
            $data['coupon_id'] = $post['coupon_id'];
            $data['discount_type'] = $post['discount_type'];


            
        }

        // var_dump($post);exit;
        if ($delivery_charge['valueStr']) {
            $data['delivery_charge'] = $delivery_charge['valueStr'];
        } else {
            $data['delivery_charge'] = 0;
        }

        $data['title'] = $this->lang->line('Checkout');
        if ($data['cartItems']) {
            $data['subtotal'] = 0;
            foreach ($data['cartItems'] as $item) {
                $data['subtotal'] += $item['subtotal'];
            }
            $data['total'] = $data['subtotal'];
            if ($data['discount_type'] == '1') {
                $data['total'] = $data['total'] - $data['discount'];
            } else {
                $data['total'] = $data['total'] - (($data['total'] * $data['discount']) / 100);
            }
            if (doubleval($data['total']) < 0) {
                $data['total'] = 0;
            }
            $data['total'] = $data['total'] + $data['delivery_charge'];
            $data['title'] = $this->lang->line('Checkout');
            $this->load->view('templates/header', [
                '_page_title' => $data['title'],
                '_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
            ]);
            $this->load->view('checkout/direct_order', $data);
            $this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'checkout/direct_order']]);
        } else {
            $this->session->set_flashdata('message', $this->lang->line('*Can_not_proceed_your_cart_is_empty!*'));
            redirect('cart/index');
        }
    }
    //direct checkout and make order end

    public function confirm()
    {
        $data['cartItems'] = $this->cart->contents();
        $count = 0;
        $this->load->model('Transaction');
        foreach ($data['cartItems'] as $k => $item) {
            if ($item['options']['size']) {
                $size = $item['options']['size'];
            } else {
                $size = 'No';
            }
            $res = $this->Transaction->load_avialable_qty_of_item_specific_size($item['id'], $size);
            if (intval($res['av_qty']) < intval($item['qty'])) {
                $count++;
                break;
            }
        }
        if ($count == 0) {
            $this->load->model(['Order', 'Account']);
            $post = $this->input->post(null, true);
            // var_dump($post );exit;
            $address = array(
                'country' => $post['country'],
                'city' => $post['city'],
                'place' => $post['place'],
                'street' => $post['street'],
                'building' => $post['building'],
                'floor' => $post['floor'],
                'description' => $post['direction'],
            );
            $updated = $this->Account->update_user_shipping_address($post);
            if ($post['discount_type'] === '0') {
                $discount = 0;
                $discount_item = $post['discount'];
            } else {
                if ($post['discount_type'] === '1') {
                    $discount = $post['discount'];
                    $discount_item = 0;
                } else {
                    $discount = 0;
                    $discount_item = 0;
                }
            }
            $address = array(
                'country' => $post['country'],
                'city' => $post['city'],
                'place' => $post['place'],
                'street' => $post['street'],
                'building' => $post['building'],
                'floor' => $post['floor'],
                'description' => $post['direction'],
            );
            $saved = $this->Order->create_new_order($post['coupon_id'], $discount, $post['note'], $address, $post['delivery_charge']);
            if ($saved) {
                $this->load->model('Order_item');
                foreach ($data['cartItems'] as $t) {
                    $done = $this->Order_item->add_new_order_item($t, $this->Order->get_field('id'), $discount_item);
                }
                if ($done) {
                    $this->load->model(['Transaction', 'Account', 'User']);
                    $this->load->model('Account');
                    $local_currency = $this->Account->fetch_system_local_currency()['valueInt'];
                    $account2 = $this->Account->fetch_sales_account_LC($local_currency);
                    $user = $this->User->fetch_ecommerce_online_user_from_users_table();
                    $fiscal_year_id = $user['fiscal_year_id'];
                    $user_id = $user['id'];
                    $added = $this->Transaction->create_new_sale_invoice_for_order($discount, $local_currency, $account2, $fiscal_year_id, $user_id, $post['note'], $post['delivery_charge']);
                    if ($added) {
                        $this->load->model('Transaction_item');
                        $total = 0;
                        foreach ($data['cartItems'] as $item) {
                            $done = $this->Transaction_item->add_new_trans_item_and_trans_item_sizes($item, $this->Transaction->get_field('id'), $discount_item);
                            $total += (doubleval($item['qty']) * doubleval($item['price'])) * (1 - (doubleval($this->Transaction_item->get_field('discount')) / 100));
                        }
                        $total = $total + doubleval($this->Transaction->get_field('delivery_charge')) - doubleval($this->Transaction->get_field('discount'));
                        $this->load->model('Journal');
                        $this->Journal->save_trans_in_jounral($this->Transaction->get_field('auto_no'), $this->Transaction->get_field('id'), $account2, $local_currency, $fiscal_year_id, $user_id, $total);
                        $name1 = $this->Account->fetch_account_data($this->violet_auth->get_account_id());
                        $name2 = $this->Account->fetch_account_data($account2['id']);
                        $this->Journal->save_in_journal_accounts($this->Journal->get_field('id'), $account2['id'], $this->Transaction->get_field('auto_no'), $total, "-1", $name1["account_name"], "Sale");
                        $this->Journal->save_in_journal_accounts($this->Journal->get_field('id'), $this->violet_auth->get_account_id(), $this->Transaction->get_field('auto_no'), $total, "1", $name2["account_name"], "Sale");
                        $this->Transaction->update_items_qty($data['cartItems'], $fiscal_year_id);
                        //update balance debit credit for account 1
                        $balance = $this->Journal->calculate_account_balance($this->violet_auth->get_account_id(), $fiscal_year_id)["total"];
                        $credit = $this->Journal->calculate_account_credit($this->violet_auth->get_account_id(), $fiscal_year_id)["total"];
                        $debit = $this->Journal->calculate_account_debit($this->violet_auth->get_account_id(), $fiscal_year_id)["total"];
                        $this->Account->update_account_credit_debit_balance($this->violet_auth->get_account_id(), $balance, $credit, $debit);
                        //update balance debit credit for account 2
                        $balance = $this->Journal->calculate_account_balance($account2['id'], $fiscal_year_id)["total"];
                        $credit = $this->Journal->calculate_account_credit($account2['id'], $fiscal_year_id)["total"];
                        $debit = $this->Journal->calculate_account_debit($account2['id'], $fiscal_year_id)["total"];
                        $this->Account->update_account_credit_debit_balance($account2['id'], $balance, $credit, $debit);
                        //update order with trans_id
                        $this->Order->update_order_transaction_id($this->Order->get_field('id'), $this->Transaction->get_field('id'));
                    }
                    $this->session->set_flashdata('message', $this->lang->line('*Your_order_sent_successfully*'));
                    $this->cart->destroy();
                    redirect('accounts/pending_orders/1');
                }
            } else {
                $this->session->set_flashdata('message', $this->lang->line('*Your_order_rejected*'));
                redirect('checkout/index');
            }
        } else {
            $this->session->set_flashdata('message', 'Sorry, the selected qty of one or more product is not available!');
            redirect('cart/index');
        }
    }

    //varify otp before check out
    function send_otp()
    {
        if ($this->violet_auth->is_logged_in()) {
            $this->load->model('User');
            $user_account = $this->User->load_all_user_and_account_data($this->violet_auth->get_user_id());
            if ($user_account['phone'] == $this->input->post('phone')) {
                echo json_encode(
                    array(
                        "result" => true,
                        "logged_in" => true,
                        "error" => ""
                    )
                );
            } else {
                $phone = $this->input->post('phone');
                $verification_code = rand(1000, 9999);
                $this->session->set_userdata('verification_code_direct_order', $verification_code);
                $text = utf8_decode($verification_code . "%20is%20your%20verification%20code%20for%20samoutfits.com");
                $res_code = file_get_contents("https://globesms.net/smshub/api.php?username=s.outfit&password=go@2242&action=sendsms&from=SAM-OUTFITS&to=" . $phone . "&text=" . $text);
                if (trim($res_code) == 'OK: 1') {
                    echo json_encode(
                        array(
                            "result" => true,
                            "logged_in" => false,
                            "error" => ""
                        )
                    );
                } else {
                    echo json_encode(
                        array(
                            "result" => false,
                            "logged_in" => false,
                            "error" => "Sorry, Wrong Phone Number Entered!"
                        )
                    );
                }
            }
        } else {
            $phone = $this->input->post('phone');
            $verification_code = rand(1000, 9999);
            $this->session->set_userdata('verification_code_direct_order', $verification_code);
            $text = utf8_decode($verification_code . "%20is%20your%20verification%20code%20for%20samoutfits.com");
            $res_code = file_get_contents("https://globesms.net/smshub/api.php?username=s.outfit&password=go@2242&action=sendsms&from=SAM-OUTFITS&to=" . $phone . "&text=" . $text);
            if (trim($res_code) == 'OK: 1') {
                echo json_encode(
                    array(
                        "result" => true,
                        "logged_in" => false,
                        "error" => ""
                    )
                );
            } else {
                echo json_encode(
                    array(
                        "result" => false,
                        "logged_in" => false,
                        "error" => "Sorry, Wrong Phone Number Entered!"
                    )
                );
            }
        }
    }
    //verify otp before checkout end

    public function verify_opt()
    {
        $otp_code = $this->input->post('otp_code');
        $sended_code = $this->session->userdata('verification_code_direct_order');
        if ($otp_code == $sended_code) {
            echo json_encode(
                array(
                    "result" => true,
                    "error" => ""
                )
            );
        } else {
            echo json_encode(
                array(
                    "result" => false,
                    "error" => "Sorry, Wrong Verification Code Entered!"
                )
            );
        }
    }

    //check out function for direct ordering
    public function confirm_direct_order()
    {
        $this->session->unset_userdata('verification_code_direct_order');
        $data['cartItems'] = $this->cart->contents();
        $this->load->model(['Order', 'Account']);
        $count = 0;
        $this->load->model('Transaction');
        $this->load->model('User');
        //check if phone number exist start
        $phone_without_code = $this->input->post('phone');

        $firstTwoCharsOfPhone = substr($phone_without_code, 0, 2); // Get the first two characters

        if ($firstTwoCharsOfPhone === '03' && $this->input->post('phone_code') == 961) {
            $phone_without_code = '3' . substr($phone_without_code, 2); // Replace with '99' and concatenate the rest of the string
        }

        $phone_string = $this->input->post('phone_code') . $phone_without_code;
        $phone = str_replace(' ', '', $phone_string);

        $phone_code = $this->input->post('phone_code');
        $phone_number = $this->input->post('phone');
        $account_exist = $this->Account->check_if_account_exist($phone);

        //check if account exist
        if ($account_exist) {
            //if exist use this account
            $account = $account_exist;
            $acc_id = $account['id'];


            $phone2 = $this->input->post('phone2_code') . $this->input->post('phone2');
            $info = array(
                "fname" => $this->input->post('fname'),
                "lname" => $this->input->post('lname'),
                'phone' => $phone,
                'phone2' => str_replace(' ', '', $phone2),
                'email' => $this->input->post('email'),
                'country' => $this->input->post('country_val'),
                'city' => $this->input->post('city'),
                'place' => null,
                'street' => $this->input->post('street'),
                'building' => null,
                'floor' => null,
                'direction' =>  $this->input->post('directions')
            );

            $this->Account->update_user_account($acc_id, $info);

            $user_exist = $this->User->user_account_exit($acc_id);

            //check if account have user start
            if ($user_exist) {
                $user_data = array(
                    "fname" => $this->input->post('fname'),
                    "lname" => $this->input->post('lname'),
                    "birthdate" => null,
                );
                $ecom_user = $user_exist;
                $ecom_user_id = $ecom_user['id'];
                $this->User->update_ecomerce_user($ecom_user_id, $user_data);
            } else {
                $user_data = array(
                    "password" => "nopasswordCReaTE2024" . $acc_id,
                    "fname" => $this->input->post('fname'),
                    "lname" => $this->input->post('lname'),
                    "birthdate" => null,
                );
                $ecom_user_id = $this->User->create_ecomerce_user($acc_id, $user_data);
                $ecom_user = $this->User->load_all_user_data($ecom_user_id);
            }
            //check if account have user end
        } else {
            //if nut exist create new account
            $phone2 = $this->input->post('phone2_code') . $this->input->post('phone2');
            $info = array(
                "fname" => $this->input->post('fname'),
                "lname" => $this->input->post('lname'),
                'phone' => $phone,
                'phone2' => str_replace(' ', '', $phone2),
                'email' => $this->input->post('email'),
                'country' => $this->input->post('country_val'),
                'city' => $this->input->post('city'),
                'place' => null,
                'street' => $this->input->post('street'),
                'building' => null,
                'floor' => null,
                'direction' =>  $this->input->post('directions')
            );

            $acc_id = $this->Account->create_account_for_user($info);
            if ($acc_id !== '') {
                $user_data = array(
                    "password" => "nopasswordCReaTE2024" . $acc_id,
                    "fname" => $this->input->post('fname'),
                    "lname" => $this->input->post('lname'),
                    "birthdate" => null,
                );
                $ecom_user_id = $this->User->create_ecomerce_user($acc_id, $user_data);
                $ecom_user = $this->User->load_all_user_data($ecom_user_id);
            }
        }
        //check if phone number exist end

        foreach ($data['cartItems'] as $k => $item) {
            if ($item['options']['size']) {
                $size = $item['options']['size'];
            } else {
                $size = 'No';
            }
            $res = $this->Transaction->load_avialable_qty_of_item_specific_size($item['id'], $size);
            if (intval($res['av_qty']) < intval($item['qty'])) {
                $count++;
                break;
            }
        }
        if ($count == 0) {
            $post = $this->input->post(null, true);
            // var_dump($post );exit;
            $address = array(
                'country' => $post['country_val'],
                'city' => $post['city'],
                'place' => null,
                'street' => $this->input->post('street'),
                'building' => null,
                'floor' => null,
                'direction' =>  $post['directions'],
            );
            //updated 2024-03-07
            $updated = $this->Account->update_user_shipping_address_as_user($acc_id, $address);
            if ($post['discount_type'] === '0') {
                $discount = 0;
                $discount_item = $post['discount'];
            } else {
                if ($post['discount_type'] === '1') {
                    $discount = $post['discount'];
                    $discount_item = 0;
                } else {
                    $discount = 0;
                    $discount_item = 0;
                }
            }
            $address = array(
                'country' => $post['country_val'],
                'city' => $post['city'],
                'description' => $post['directions'],
            );
            //updated 2024-03-07
            $opt_success = $this->input->post('otp_success');
            // echo $opt_success; exit;
            $gest = 1;
            $saved = $this->Order->create_new_order_as_user($ecom_user_id, $post['coupon_id'], $discount, $post['note'], $address, $post['delivery_charge'], $opt_success, $gest);
            if ($saved) {
                $this->load->model('Order_item');
                $order_id = $this->Order->get_field('id');
                $iserted_order = $this->Order->load_order_data($order_id);
                $delivery_charge = $post['delivery_charge'];
                $this->load->model('Coupon');
                $coupon = $this->Coupon->get_coupon_data($iserted_order['coupon_id']);
                $done = false;
                foreach ($data['cartItems'] as $t) {
                    $done = $this->Order_item->add_new_order_item($t, $this->Order->get_field('id'), $discount_item);
                }
                // var_dump($done);exit;
                $inserted_order_items = $this->Order->load_order_items_as_order($order_id);
                if ($done) {
                    $local_currency = $this->Account->fetch_system_local_currency()['valueInt'];
                    $account2 = $this->Account->fetch_sales_account_LC($local_currency);

                    $user = $this->User->fetch_ecommerce_online_user_from_users_table();
                    $fiscal_year_id = $user['fiscal_year_id'];
                    $user_id = $user['id'];
                    //updated 2024-03-07
                    $added = $this->Transaction->create_new_sale_invoice_for_order_as_user($acc_id, $discount, $local_currency, $account2, $fiscal_year_id, $user_id, $post['note'], $post['delivery_charge']);
                    if ($added) {
                        $this->load->model('Transaction_item');
                        $total = 0;
                        foreach ($data['cartItems'] as $item) {
                            $done = $this->Transaction_item->add_new_trans_item_and_trans_item_sizes($item, $this->Transaction->get_field('id'), $discount_item);
                            $total += (doubleval($item['qty']) * doubleval($item['price'])) * (1 - (doubleval($this->Transaction_item->get_field('discount')) / 100));
                        }
                        $total = $total + doubleval($this->Transaction->get_field('delivery_charge')) - doubleval($this->Transaction->get_field('discount'));
                        $this->load->model('Journal');
                        //updated 2024-03-07
                        $this->Journal->save_trans_in_jounral_as_user($acc_id, $this->Transaction->get_field('auto_no'), $this->Transaction->get_field('id'), $account2, $local_currency, $fiscal_year_id, $user_id, $total);
                        //updated 2024-03-07
                        $name1 = $this->Account->fetch_account_data($acc_id);
                        $name2 = $this->Account->fetch_account_data($account2['id']);

                        $this->Journal->save_in_journal_accounts($this->Journal->get_field('id'), $account2['id'], $this->Transaction->get_field('auto_no'), $total, "-1", $name1["account_name"], "Sale");
                        //updated 2024-03-07
                        $this->Journal->save_in_journal_accounts($this->Journal->get_field('id'), $acc_id, $this->Transaction->get_field('auto_no'), $total, "1", $name2["account_name"], "Sale");
                        $this->Transaction->update_items_qty($data['cartItems'], $fiscal_year_id);
                        //update balance debit credit for account 1
                        //updated 2024-03-07
                        $balance = $this->Journal->calculate_account_balance($acc_id, $fiscal_year_id)["total"];
                        //updated 2024-03-07
                        $credit = $this->Journal->calculate_account_credit($acc_id, $fiscal_year_id)["total"];
                        //updated 2024-03-07
                        $debit = $this->Journal->calculate_account_debit($acc_id, $fiscal_year_id)["total"];
                        //updated 2024-03-07
                        $this->Account->update_account_credit_debit_balance($acc_id, $balance, $credit, $debit);
                        //update balance debit credit for account 2
                        $balance = $this->Journal->calculate_account_balance($account2['id'], $fiscal_year_id)["total"];
                        $credit = $this->Journal->calculate_account_credit($account2['id'], $fiscal_year_id)["total"];
                        $debit = $this->Journal->calculate_account_debit($account2['id'], $fiscal_year_id)["total"];
                        $this->Account->update_account_credit_debit_balance($account2['id'], $balance, $credit, $debit);
                        //update order with trans_id
                        $this->Order->update_order_transaction_id($this->Order->get_field('id'), $this->Transaction->get_field('id'));
                    }
                    $this->session->set_flashdata('message', $this->lang->line('*Your_order_sent_successfully*'));
                    $this->cart->destroy();

                    $fireData = array(
                        'order' => $iserted_order,
                        'delivery_charge' => $delivery_charge,
                        'order_items' => $inserted_order_items,
                        'coupon' => $coupon
                    );

                    echo json_encode(
                        array(
                            "result" => true,
                            "fireData" => $fireData,
                            "message" => "Success"
                        )
                    );
                    // redirect('accounts/pending_orders/1');
                }
            } else {
                echo json_encode(
                    array(
                        "result" => false,
                        "message" => "*Your Order Rejected*"
                    )
                );
                // $this->session->set_flashdata('message', $this->lang->line('*Your_order_rejected*'));
                // redirect('checkout/direct_order');
            }
        } else {
            //$this->session->set_flashdata('message', 'Sorry, the selected qty of one or more product is not available!');
            echo json_encode(
                array(
                    "result" => false,
                    "message" => "Sorry, the selected qty of one or more product is not available!"
                )
            );
            // redirect('cart/index');
        }
    }

    public function check_coupon()
    {
        $this->load->model('User');
        $coupon = $this->input->post('coupon');
        $res = $this->User->check_customer_coupon($coupon);
        $this->_render_json(
            $res
        );
    }

    public function check_coupon_on_phone()
    {
        $this->load->model('User');
        $coupon = $this->input->post('coupon');
        $phone = $this->input->post('phone');
        $res = $this->User->check_customer_coupon_on_phone($coupon, $phone);
        $this->_render_json(
            $res
        );
    }

    public function check_customer_coupon_usage_times()
    {
        $coupon_id = $this->input->post('coupon_id');
        $usage_times = $this->input->post('usage_times');
        $this->load->model('User');
        $count = $this->User->calculate_how_many_times_coupon_code_is_used_by_customer($coupon_id)['count'];
        if (intval($count) < intval($usage_times)) {
            echo ('1');
        } else {
            echo ('0');
        }
    }

    public function check_customer_coupon_usage_times_as_phone()
    {
        $coupon_id = $this->input->post('coupon_id');
        $phone = $this->input->post('phone');
        $usage_times = $this->input->post('usage_times');
        $this->load->model('User');
        $user_data = $this->User->load_user_data_as_phone($phone);
        $count = $this->User->calculate_how_many_times_coupon_code_is_used_by_customer_on_customer_id($user_data['id'], $coupon_id)['count'];
        if (intval($count) < intval($usage_times)) {
            echo ('1');
        } else {
            echo ('0');
        }
    }

    public function check_items_qty()
    {
        $this->load->model('Transaction');
        $item_ids = $this->input->post('item_ids');
        $qtys = $this->input->post('qtys');
        $sizes = $this->input->post('sizes');
        foreach ($item_ids as $k => $id) {
            $res = $this->Transaction->load_avialable_qty_of_item_specific_size($id, $sizes[$k]);
            if (intval($res['av_qty']) >= intval($qtys[$k])) {
                $results[$id]['check'] = 1;
                $results[$id]['av_qty'] = $res['av_qty'];
                $results[$id]['qty'] = $qtys[$k];
            } else {
                $results[$id]['check'] = 0;
                $results[$id]['av_qty'] = $res['av_qty'];
                $results[$id]['qty'] = $qtys[$k];
            }
        }
        $this->_render_json(
            $results
        );
    }

    public function confirm_address()
    {
        $post = $this->input->post(null, true);
        $data['discount'] = $post['discount'];
        $data['coupon_id'] = $post['coupon_id'];
        $data['discount_type'] = $post['discount_type'];
        $data['note'] = $post['note'];
        $this->load->model('User');
        $data['account'] = $this->User->load_all_user_and_account_data($this->violet_auth->get_user_id());
        $data['title'] = $this->lang->line('Checkout');
        $this->load->view('templates/header', [
            '_page_title' => $data['title'],
            '_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
        ]);
        $this->load->view('checkout/confirm_address', $data);
        $this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'checkout/confirm_address']]);
    }

    public function get_cart_products()
    {
        $cartItems = $this->cart->contents();
        $this->load->model('Configuration');
        $delivery_charge = $this->Configuration->fetch_delivery_charge();
        $subtotal = 0;
        $products = array();
        foreach ($cartItems as $item) {
            $subtotal += (float) $item['price'] * $item['qty'];
            $products[] = [
                'name' => $item['name'],     // Name or ID is required.
                'id' => $item['id'],
                'price' => $item['price'],
                'brand' => ' ',
                'category' => ' ',
                'variant' => ' ',
                'quantity' => $item['qty'],
                'coupon' => ''
            ];
        }
        $total = (float)$subtotal + (float)$delivery_charge['valueStr'];
        echo json_encode(
            array(
                "result" => true,
                "data" => array(
                    "total" => $total,
                    "delivery_charge" => $delivery_charge,
                    "products" => $products
                )
            )
        );
    }
}
