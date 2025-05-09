<?php

defined('BASEPATH') or die('No direct script access allowed');

class Account extends MY_Model
{
    protected $modelName = 'Account';
    protected $_table = 'accounts';
    protected $_listFieldName = 'account_number';
    protected $_fieldsNames = ['id', 'currency_id', 'account_number', 'account_name', 'account_type', 'opening_date', 'phone', 'phone2', 'email', 'country', 'city', 'place', 'street', 'building', 'floor', 'debit', 'credit', 'balance', 'open_balance', 'description'];
    protected $_dateFields = ['opening_date'];
    protected $allowedNulls = ['currency_id', 'account_type', 'phone', 'email', 'address', 'debit', 'credit', 'balance', 'open_balance', 'building', 'floor'];

    public function __construct()
    {
        parent::__construct();
    }

    public function generate_account_number()
    {
        $query = $this->db->select_max('account_number', 'nextAutoNo')
            ->where('account_type', 'Customer')
            ->get('accounts');
        if ($query->row()->nextAutoNo == null) {
            $no = 41100000;
            return  $no;
        } else {
            $no = $query->row()->nextAutoNo;
            return 1 + $no;
        }
        exit;
    }

    public function create_account_for_user($info)
    {
        $local_currency = $this->fetch_system_local_currency()['valueInt'];
        $acc_nb = $this->Account->generate_account_number();
        $data = array(
            'currency_id' => $local_currency,
            'account_number' => $acc_nb,
            'account_name' => $info['fname'].' '.$info['lname'],
            'account_type' => 'Customer',
            'opening_date' => date('d-m-Y'),
            'phone' => $info['phone'],
            'phone2' => $info['phone2'],
            'email' => $info['email'],
            'country' => $info['country'],
            'city' => $info['city'],
            'place' => $info['place'],
            'street' => $info['street'],
            'building' => $info['building'],
            'floor' => $info['floor'],
            'description' => $info['direction'], 
        );
        $this->Account->set_fields($data);
        $this->Account->set_field('open_balance', "0");
        $this->Account->set_field('balance', "0");
        $this->Account->set_field('credit', "0");
        $this->Account->set_field('debit', "0");
        $saved = $this->Account->insert();
        if($saved){
            return $this->Account->get_field('id');
        }else{
            return '';
        }
    }

    public function update_user_account($account_id, $info){
        $data = array(
            'account_name' => $info['fname'].' '.$info['lname'],
            'phone' => $info['phone'],
            'phone2' => $info['phone2'],
            'email' => $info['email'],
            'country' => $info['country'],
            'city' => $info['city'],
            'place' => $info['place'],
            'street' => $info['street'],
            'building' => $info['building'],
            'floor' => $info['floor'],
            'description' => $info['direction'], 
        );
        $this->db->where('id', $account_id);
		$query = $this->db->update('accounts', $data);
		return $query;
    }

    public function fetch_system_local_currency()
    {
        $this->db->select('valueInt');
        $this->db->from('configurations');
        $this->db->where('name', 'SystemCurrency');
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function check_if_phone_nb_exists($phone){
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('phone', $phone);
        $query = $this->db->get()->row_array();
        return $query;
    }

    //check if account exit as phone number it return false if not exist and account if exist
    public function check_if_account_exist($phone){
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('phone', $phone);
        $query=$this->db->get();
        if($query->num_rows()==0){
            return false;
        }
        $result = $query->row_array();
        return $result;
    }
    //check if account exit end

    public function hide_customer_inbox_msg($msg_id){
        $data['hide'] = 1;
        $this->db->where('id', $msg_id);
		$query = $this->db->update('inbox', $data);
		return $query;
    }

    public function update_user_shipping_address($address){
        $data = array(
            'country' => $address['country'],
            'city' => $address['city'],
            'place' => $address['place'],
            'street' => $address['street'],
            'building' => $address['building'],
            'floor' => $address['floor'],
            'description' => $address['direction'], 
        );
        $this->db->where('id', $this->violet_auth->get_account_id());
		$query = $this->db->update('accounts', $data);
		return $query;
    }

    //update user shipping address as user id start
    public function update_user_shipping_address_as_user($acc_id,$address){
        $data = array(
            'country' => $address['country'],
            'city' => $address['city'],
            'place' => $address['place'],
            'street' => $address['street'],
            'building' => $address['building'],
            'floor' => $address['floor'],
            'description' => $address['direction'], 
        );
        $this->db->where('id', $acc_id);
		$query = $this->db->update('accounts', $data);
		return $query;
    }
    //update user shipping address as user id end

    public function fetch_sales_account_LC($local_currency){
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('currency_id', $local_currency);
        $this->db->where('account_type', 'Sales');
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function fetch_account_data($account_id){
        $this->db->select('*');
        $this->db->from('accounts');
        $this->db->where('id', $account_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function update_account_credit_debit_balance($account_id, $balance, $credit, $debit)
	{
		if ($balance === NULL) {
			$balance = 0;
		}
		if ($credit === NULL) {
			$credit = 0;
		}
		if ($debit === NULL) {
			$debit = 0;
		}
		$data = array(
			'credit' => $credit,
			'debit' => $debit,
			'balance' => $balance
		);
		$this->db->where('id', $account_id);
		return $this->db->update('accounts', $data);
	}

    public function fetch_customer_account_data($user_id){
        $this->db->select('accounts.*, ecommerce_users.first_name,  ecommerce_users.last_name');
        $this->db->from('accounts');
        $this->db->join('ecommerce_users', 'ecommerce_users.account_id = accounts.id', 'inner');
        $this->db->where('ecommerce_users.id', $user_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    
    
    public function fetch_account_phone($phone)
    {
        $this->db->select('ecommerce_users.id');
        $this->db->from('accounts');
        $this->db->join('ecommerce_users', 'ecommerce_users.account_id = accounts.id', 'inner');
        $this->db->where('accounts.phone', $phone);
        $query = $this->db->get()->row_array();

        return $query;
    }
    public function fetch_account_phone_without_this($id, $phone)
    {
        $this->db->select('ecommerce_users.id');
        $this->db->from('accounts');
        $this->db->join('ecommerce_users', 'ecommerce_users.account_id = accounts.id', 'inner');
        $this->db->where("accounts.id !=", $id);
        $this->db->where('accounts.phone', $phone);
        $query = $this->db->get()->row_array();

        return $query;
    }
}
