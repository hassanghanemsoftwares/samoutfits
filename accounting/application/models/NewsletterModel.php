<?php

defined('BASEPATH') or die('No direct script access allowed');

class NewsletterModel extends MY_Model
{

    protected $modelName = 'NewsletterModel';
    protected $_table = 'newsletter_subscribers';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'email', 'created_at'];
    protected $allowedNulls = [];

    public function __construct()
    {
        parent::__construct();
    }
    public function paginate_newsletter_subscribers()
    {
        $query = [
            'select' => "newsletter_subscribers.*",
            'order_by' => ['created_at', 'DESC']
        ];

        return parent::paginate($query, ['urlPrefix' => '']);
    }
    public function load_newsletter_subscribers_data_tables()
    {
        $dt = [
            'columns' => [
                'newsletter_subscribers.email',
                'newsletter_subscribers.created_at',
            ],

            'query' => [
                // No joins needed for a simple table
            ],
            'search_in' => [
                'newsletter_subscribers.email',
                'newsletter_subscribers.created_at'
            ]
        ];
        $this->remove_indexes_if_search_not_date($dt['search_in'], [0]);

        return parent::load_datatables_pagedata($dt);
    }
}
