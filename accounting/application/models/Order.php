<?php

defined('BASEPATH') or die('No direct script access allowed');

class Order extends MY_Model
{

    protected $modelName = 'Order';
    protected $_table = 'orders';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'auto_no', 'customer_id', 'order_date', 'value_date', 'currency_id', 'currency_rate', 'description', 'status', 'coupon_id', 'discount', 'address', 'hide', 'payment_method', 'payment_status'];
    protected $allowedNulls = ['value_date', 'description', 'status', 'coupon_id'];

    public function __construct()
    {
        parent::__construct();
    }

    public function paginate_ecommerce_orders()
    {
        $query = [
            'select' => "orders.*, transactions.auto_no as tracking_nb, CONCAT_WS(' ', first_name, last_name) AS customer_name, (SUM(order_items.qty * order_items.price * (1-(order_items.discount/100))) - orders.discount + orders.delivery_charge) as total, SUM(order_items.qty) as total_qty, order_items.discount as percent_disc",
            'join' => [
                ['ecommerce_users', 'ecommerce_users.id = orders.customer_id', 'inner'],
                ['transactions', 'transactions.id = orders.transaction_id', 'inner'],
                ['order_items', 'order_items.order_id = orders.id', 'inner']
            ],
            'where' => ['orders.hide != 1 OR orders.hide IS NULL'],
            'group_by' => ['orders.id'],
            'order_by' => ['auto_no', 'DESC']
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_ecommerce_orders_data_tables()
    {
        $dt = [
            'columns' => [
                'orders.auto_no',
                ['transactions.auto_no', 'tracking_nb'],
                ["CONCAT_WS(' ', first_name, last_name)", 'customer_name'],
                'orders.order_date',
                'orders.description',
                ['SUM(order_items.qty)', 'total_qty'],
                ['order_items.discount', 'percent_disc'],
                ['(SUM(order_items.qty * order_items.price * (1-(order_items.discount/100))) - orders.discount + orders.delivery_charge)', 'total'],
                'orders.status',
                'orders.payment_method',
                'orders.payment_status',
                'orders.id'
            ],
            'query' => [
                'join' => [
                    ['ecommerce_users', 'ecommerce_users.id = orders.customer_id', 'inner'],
                    ['transactions', 'transactions.id = orders.transaction_id', 'inner'],
                    ['order_items', 'order_items.order_id = orders.id', 'inner']
                ],
                'where' => ['orders.hide != 1 OR orders.hide IS NULL'],
                'group_by' => ['orders.id'],
            ],
            'search_in' => ['orders.auto_no', 'orders.order_date', 'orders.description', 'orders.status']
        ];
        $this->remove_indexes_if_search_not_date($dt['search_in'], [1]);
        return parent::load_datatables_pagedata($dt);
    }

    public function update_order_status($order_id, $status)
    {
        $data['status'] = $status;
        $this->db->where('id', $order_id);
        return $this->db->update('orders', $data);
    }

    public function load_order_data($order_id)
    {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->where('id', $order_id);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function load_order_data_with_total($order_id)
    {
        $this->db->select('
        orders.*, 
        SUM(order_items.qty * order_items.price * (1 - (order_items.discount / 100))) AS subtotal,
        (SUM(order_items.qty * order_items.price * (1 - (order_items.discount / 100))) - orders.discount + orders.delivery_charge) AS total
    ');
        $this->db->from('orders');
        $this->db->join('order_items', 'order_items.order_id = orders.id', 'inner');
        $this->db->where('orders.id', $order_id);
        $this->db->group_by('orders.id'); // One row per order
        return $this->db->get()->row_array();
    }




    public function load_order_items($order_id)
    {
        $this->db->select('
        order_items.*,
        items.barcode,
        (order_items.qty * order_items.price) AS subtotal,
        (
            SELECT CONCAT("assets/uploads/", image_name)
            FROM product_images
            WHERE product_images.item_id = order_items.item_id
            ORDER BY product_images.order_nb ASC
            LIMIT 1
        ) AS image_name
    ');
        $this->db->from('order_items');
        $this->db->join('items', 'items.id = order_items.item_id', 'inner');
        $this->db->where('order_items.order_id', $order_id);
        $query = $this->db->get()->result_array();
        return $query;
    }


    public function update_hide_show_order($order_id, $value)
    {
        $data['hide'] = $value;
        $this->db->where('id', $order_id);
        return $this->db->update('orders', $data);
    }

    public function paginate_ecommerce_orders_history()
    {
        $query = [
            'select' => "orders.*, transactions.auto_no as tracking_nb, CONCAT_WS(' ', first_name, last_name) AS customer_name, (SUM(order_items.qty * order_items.price * (1-(order_items.discount/100))) - orders.discount) as total, SUM(order_items.qty) as total_qty",
            'join' => [
                ['ecommerce_users', 'ecommerce_users.id = orders.customer_id', 'inner'],
                ['transactions', 'transactions.id = orders.transaction_id', 'inner'],
                ['order_items', 'order_items.order_id = orders.id', 'inner']
            ],
            'where' => ['orders.hide = 1'],
            'group_by' => ['orders.id'],
            'order_by' => ['auto_no', 'DESC']
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_ecommerce_orders_history_data_tables()
    {
        $dt = [
            'columns' => [
                'orders.auto_no',
                ['transactions.auto_no', 'tracking_nb'],
                ["CONCAT_WS(' ', first_name, last_name)", 'customer_name'],
                'orders.order_date',
                'orders.description',
                ['SUM(order_items.qty)', 'total_qty'],
                ['(SUM(order_items.qty * order_items.price * (1-(order_items.discount/100))) - orders.discount)', 'total'],
                'orders.status',
                'orders.id'
            ],
            'query' => [
                'join' => [
                    ['ecommerce_users', 'ecommerce_users.id = orders.customer_id', 'inner'],
                    ['transactions', 'transactions.id = orders.transaction_id', 'inner'],
                    ['order_items', 'order_items.order_id = orders.id', 'inner']
                ],
                'where' => ['orders.hide = 1'],
                'group_by' => ['orders.id'],
            ],
            'search_in' => ['orders.auto_no', 'orders.order_date', 'orders.description', 'orders.status']
        ];
        $this->remove_indexes_if_search_not_date($dt['search_in'], [1]);
        return parent::load_datatables_pagedata($dt);
    }

    public function load_order_id_by_trans_id($trans_id)
    {
        $this->db->select('orders.id');
        $this->db->from('orders');
        $this->db->where('orders.transaction_id', $trans_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function load_order_data_by_trans_id($trans_id)
    {
        $this->db->select('orders.*');
        $this->db->from('orders');
        $this->db->where('orders.transaction_id', $trans_id);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function load_all_unhided_orders()
    {
        $this->db->select('orders.*');
        $this->db->from('orders');
        $this->db->where('(orders.transaction_id is not NULL) and (orders.hide != 1 or orders.hide is NULL)');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
