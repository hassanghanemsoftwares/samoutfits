<?php

defined('BASEPATH') or die('No direct script access allowed');

class Ecommerce_user extends MY_Model
{
    protected $modelName = 'Ecommerce_user';
    protected $_table = 'ecommerce_users';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'account_id', 'password', 'first_name', 'last_name', 'birthdate', 'profile_image'];

    public function __construct()
    {
        parent::__construct();
    }

    public function paginate_ecommerce_users()
    {
        $query = [
            'select' => "ecommerce_users.*, accounts.account_number, accounts.phone, CONCAT_WS(' ', first_name, last_name) AS eco_user_name",
            'join' => [['accounts', 'accounts.id = ecommerce_users.account_id', 'inner']],
            'order_by' => [['ecommerce_users.id', 'DESC']]
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_ecommerce_users_data_tables()
    {
        $dt = [
            'columns' => [
                ['CONCAT_WS(" ", first_name, last_name)', 'eco_user_name'],
                'account_number',
                'birthdate',
                'phone',
                'ecommerce_users.id'
            ],
            'query' => [
                'join' => [['accounts', 'accounts.id = ecommerce_users.account_id', 'inner']],
                'order_by' => [['ecommerce_users.id', 'DESC']]
            ],
            'search_in' => ['first_name, last_name, account_number, phone']
        ];
        //$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
        return parent::load_datatables_pagedata($dt);
    }

    public function load_ecommerce_user_data($id)
    {
        $this->db->select('*');
        $this->db->from('ecommerce_users');
        $this->db->where('id', $id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function reset_password($user_id)
    {
        $this->load->model('User');
        $data['password'] = $this->User->encryptPass('Sam20Outfit22');
        $this->db->where('id', $user_id);
        return $this->db->update('ecommerce_users', $data);
    }

    public function paginate_whish_users()
    {
        $query = [
            'select' => "ecommerce_users.*, accounts.account_number, accounts.phone, CONCAT_WS(' ', first_name, last_name) AS eco_user_name",
            'join' => [
                ['accounts', 'accounts.id = ecommerce_users.account_id', 'inner'],
                ['transactions', 'transactions.account_id = accounts.id', 'inner']
            ],
            'where' => [
                "transactions.payment_method_gateway = 'whish' And transactions.payment_method_gateway_status = 'Payment successful'",
            ],
              'group_by' => ['ecommerce_users.id'],
            'order_by' => [['ecommerce_users.id', 'DESC']]
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_whish_users_data_tables()
    {
        $dt = [
            'columns' => [
                ['CONCAT_WS(" ", first_name, last_name)', 'eco_user_name'],
                'account_number',
                'birthdate',
                'phone',
                'ecommerce_users.id'
            ],
            'query' => [
                'join' => [
                    ['accounts', 'accounts.id = ecommerce_users.account_id', 'inner'],
                    ['transactions', 'transactions.account_id = accounts.id', 'inner']
                ],
                'where' => [
                    "transactions.payment_method_gateway = 'whish' And transactions.payment_method_gateway_status = 'Payment successful'",
                ],
                'group_by' => ['ecommerce_users.id'],
                'order_by' => [['ecommerce_users.id', 'DESC']]
            ],
            'search_in' => ['first_name, last_name, account_number, phone']
        ];
        return parent::load_datatables_pagedata($dt);
    }
}
