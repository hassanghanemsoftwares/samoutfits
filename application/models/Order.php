<?php

defined('BASEPATH') or die('No direct script access allowed');

class Order extends MY_Model
{
    protected $modelName = 'Order';
    protected $_table = 'orders';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'auto_no', 'customer_id', 'order_date', 'value_date', 'currency_id', 'currency_rate', 'description', 'status', 'coupon_id', 'discount', 'address', 'delivery_charge', 'otp', 'gest', 'payment_method', 'payment_status'];
    protected $_dateFields = ['order_date', 'value_date'];
    protected $allowedNulls = ['value_date', 'description', 'status', 'coupon_id', 'discount'];

    public function __construct()
    {
        parent::__construct();
    }

    public function create_new_order($coupon_id, $discount, $description, $address, $delivery_charge)
    {
        $full_address = '';
        foreach ($address as $k => $a) {
            if ($a) {
                if ($k !== 'description') {
                    $full_address .= $a . "-";
                } else {
                    $full_address .= $a;
                }
            } else {
                if ($k !== 'description') {
                    $full_address .= "x-";
                } else {
                    $full_address .= "x";
                }
            }
        }
        $this->load->model('Account');
        $local_currency = $this->Account->fetch_system_local_currency()['valueInt'];
        $data = array(
            'auto_no' => $this->set_next_auto_number('OO'),
            'customer_id' => $this->violet_auth->get_user_id(),
            'order_date' => date('Y-m-d'),
            'value_date' => '',
            'currency_id' => $local_currency,
            'currency_rate' => 1,
            'description' => $description,
            'status' => "Received & Pending Approval",
            'coupon_id' => $coupon_id,
            'discount' => $discount,
            'delivery_charge' => $delivery_charge,
            'address' => $full_address
        );
        $this->Order->set_fields($data);
        $saved = $this->Order->insert();
        return  $saved;
    }

    public function create_new_order_as_user($user_id, $coupon_id, $discount, $description, $address, $delivery_charge, $opt_success, $gest, $payment_method, $payment_status)
    {
        $full_address = '';
        foreach ($address as $k => $a) {
            if ($a) {
                if ($k !== 'description') {
                    $full_address .= $a . "-";
                } else {
                    $full_address .= $a;
                }
            } else {
                if ($k !== 'description') {
                    $full_address .= "x-";
                } else {
                    $full_address .= "x";
                }
            }
        }
        $this->load->model('Account');
        $local_currency = $this->Account->fetch_system_local_currency()['valueInt'];
        $data = array(
            'auto_no' => $this->set_next_auto_number('OO'),
            'customer_id' => $user_id,
            'order_date' => date('Y-m-d'),
            'value_date' => '',
            'currency_id' => $local_currency,
            'currency_rate' => 1,
            'description' => $description,
            'status' => "Received & Pending Approval",
            'coupon_id' => $coupon_id,
            'discount' => $discount,
            'delivery_charge' => $delivery_charge,
            'address' => $full_address,
            'otp' => $opt_success,
            'gest' => $gest,
            'payment_method' => $payment_method,
            'payment_status' => $payment_status

        );
        $this->Order->set_fields($data);
        $saved = $this->Order->insert();
        return  $saved;
    }

    public function set_next_auto_number($transType)
    {
        $query = $this->db->select_max('auto_no', 'nextAutoNo')
            // ->where("fiscal_year_id", $this->violet_auth->get_fiscal_year_id())
            ->get('orders');
        $no = ($query->num_rows() > 0 ? _gnv($query->row()->nextAutoNo) : 0);
        return 1 + $no;
    }

    public function load_all_customer_orders()
    {
        $query = [
            'select' => "*, DATE_FORMAT(orders.order_date, '%d %M %Y') as date",
            'where' => [['orders.customer_id', $this->violet_auth->get_user_id()]],
            'order_by' => [['orders.auto_no', 'DESC']]
        ];
        return $this->load_all($query);
    }

    public function load_order_items($order_id)
    {
        $query = [
            'select' => "order_items.*, items.description, items.category, items.barcode",
            'join' => [
                ['order_items', 'orders.id = order_items.order_id', 'inner'],
                ['items', 'items.id = order_items.item_id', 'inner']
            ],
            'where' => [
                ['orders.customer_id', $this->violet_auth->get_user_id()],
                ['orders.id', $order_id]
            ],
            'order_by' => [['orders.auto_no', 'DESC']]
        ];
        return $this->load_all($query);
    }

    //edited 2024-03-22
    public function load_order_items_as_order($order_id)
    {
        $query = [
            'select' => "order_items.*, items.description, items.category, items.barcode",
            'join' => [
                ['order_items', 'orders.id = order_items.order_id', 'inner'],
                ['items', 'items.id = order_items.item_id', 'inner']
            ],
            'where' => [
                ['orders.id', $order_id]
            ],
            'order_by' => [['orders.auto_no', 'DESC']]
        ];
        return $this->load_all($query);
    }

    public function load_all_customer_pending_orders($limit = false, $offset = false)
    {
        $query = [
            'select' => "orders.*, DATE_FORMAT(orders.order_date, '%d %M %Y') as date, coupons.amount, coupons.discount_type, coupons.coupon",
            'join' => ['coupons', 'orders.coupon_id = coupons.id', 'left'],
            'where' => [
                ['orders.customer_id', $this->violet_auth->get_user_id()],
                ['orders.status !=', "Successfully Delivered"],
                ['orders.status !=', "Failed To Deliver"],
                ['orders.status !=', "Cancelled By Administrator"],
            ],
            'order_by' => [['orders.auto_no', 'DESC']]
        ];
        if ($limit !== false && $offset !== false) {
            $query['limit'] = [$limit, $offset];
        }
        return $this->load_all($query);
    }

    public function load_all_customer_archived_orders($limit = false, $offset = false)
    {
        $query = [
            'select' => "orders.*, DATE_FORMAT(orders.order_date, '%d %M %Y') as date, coupons.amount, coupons.discount_type, coupons.coupon",
            'join' => ['coupons', 'orders.coupon_id = coupons.id', 'left'],
            'where' => [
                ['orders.customer_id', $this->violet_auth->get_user_id()],
            ],
            'where_in' => [['orders.status', ["Successfully Delivered", "Failed To Deliver", "Cancelled By Administrator"]]],
            'order_by' => [['orders.auto_no', 'DESC']]
        ];
        if ($limit !== false && $offset !== false) {
            $query['limit'] = [$limit, $offset];
        }
        return $this->load_all($query);
    }

    public function update_order_transaction_id($order_id, $trans_id)
    {
        $data = array(
            'transaction_id' => $trans_id
        );
        $this->db->where('orders.id', $order_id);
        return $this->db->update('orders', $data);
    }

    public function calculate_user_points()
    {
        $query = [
            'select' => "SUM(order_items.qty * order_items.price * (1 - (order_items.discount/100))) - orders.discount as total,",
            'join' => [
                ['order_items', 'orders.id = order_items.order_id', 'inner'],
            ],
            'where' => [
                ['orders.customer_id', $this->violet_auth->get_user_id()],
            ],
        ];
        return $this->load($query);
    }

    public function load_order_data($id)
    {
        $query = [
            'select' => "*, DATE_FORMAT(orders.order_date, '%d %M %Y') as date",
            'where' => [['orders.id', $id]]
        ];
        return $this->load($query);
    }

    public function update_order_payment_status($order_id, $status)
    {
        $data = array(
            'payment_status' => $status
        );
        $this->db->where('orders.id', $order_id);
        return $this->db->update('orders', $data);
    }
    public function get_order_data($order_id)
    {
      $this->db->select('
        orders.*, 
        SUM(order_items.qty * order_items.price * (1 - (order_items.discount / 100))) AS subtotal,
        (SUM(order_items.qty * order_items.price * (1 - (order_items.discount / 100))) - orders.discount + orders.delivery_charge) AS total
    ');
        $this->db->from('orders');
        $this->db->join('order_items', 'order_items.order_id = orders.id', 'inner');
        $this->db->where('orders.id', $order_id);
        $this->db->group_by('orders.id');
        return $this->db->get()->row_array();
    }

    public function get_order_customer_data($order_id)
    {
        $this->db->select(' accounts.*');
        $this->db->from('orders');
        $this->db->join('transactions', 'transactions.id = orders.transaction_id', 'left');
        $this->db->join('accounts', 'accounts.id = transactions.account_id', 'left');
        $this->db->where('orders.id', $order_id);

        $query = $this->db->get()->row_array();
        return $query;
    }

    public function load_order_items_with_images_as_order($order_id)
    {
        $this->db->select('
        order_items.*,
        items.barcode,  items.description,
        (order_items.qty * order_items.price) AS subtotal,
        (
            SELECT image_name
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
}
