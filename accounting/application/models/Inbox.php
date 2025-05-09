<?php

defined('BASEPATH') or die('No direct script access allowed');

class Inbox extends MY_Model
{

    protected $modelName = 'Inbox';
    protected $_table = 'inbox';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'from_user_id', 'to_user_id', 'subject', 'message', 'date'];
    protected $allowedNulls = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function paginate_inbox()
    {
        $query = [
            'select' => "inbox.* , CONCAT_WS(' ', from.first_name, from.last_name) as customer",
            'join' => [
                ['ecommerce_users as from', 'from.id = inbox.from_user_id', 'inner'],
            ],
            'where' => [
                ['inbox.to_user_id', 1],
                ['inbox.from_user_id !=', 1]
            ],
            'order_by' => ['inbox.date', 'DESC']
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_inbox_data_tables()
    {
        $dt = [
            'columns' => [
                ["CONCAT_WS(' ', from.first_name, from.last_name)", 'customer'], 'inbox.subject', 
                'inbox.message', 'inbox.date', 'inbox.id'
            ], 'query' => [
                'join' => [
                    ['ecommerce_users as from', 'from.id = inbox.from_user_id', 'inner']
                ],
                'where' => [
                    ['inbox.to_user_id', 1],
                    ['inbox.from_user_id !=', 1]
                ],
                'order_by' => ['inbox.date', 'DESC']
            ],
            'search_in' => ['message', 'sunject']
        ];
        $this->remove_indexes_if_search_not_date($dt['search_in'], [1]);
        return parent::load_datatables_pagedata($dt);
    }

    public function paginate_sent_messages()
    {
        $query = [
            'select' => "inbox.* , CONCAT_WS(' ', to.first_name, to.last_name) as customer",
            'join' => [
                ['ecommerce_users as to', 'to.id = inbox.to_user_id', 'inner'],
            ],
            'where' => [
                ['inbox.from_user_id', 1]
            ],
            'order_by' => ['inbox.date', 'DESC']
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_sent_messages_data_tables()
    {
        $dt = [
            'columns' => [
                ["CONCAT_WS(' ', to.first_name, to.last_name)", 'customer'], 'inbox.subject', 
                'inbox.message', 'inbox.date', 'inbox.id'
            ], 'query' => [
                'join' => [
                    ['ecommerce_users as to', 'to.id = inbox.to_user_id', 'inner']
                ],
                'where' => [
                    ['inbox.from_user_id', 1]
                ],
                'order_by' => ['inbox.date', 'DESC']
            ],
            'search_in' => ['message', 'sunject']
        ];
        $this->remove_indexes_if_search_not_date($dt['search_in'], [1]);
        return parent::load_datatables_pagedata($dt);
    }

    public function load_message_data($msg_id){
        $this->db->select('*');
        $this->db->from('inbox');
        $this->db->where('id', $msg_id);
        $query = $this->db->get()->row_array();
		return $query;
    }
}
