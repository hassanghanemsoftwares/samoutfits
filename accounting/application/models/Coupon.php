<?php

defined('BASEPATH') or die('No direct script access allowed');

class Coupon extends MY_Model
{

    protected $modelName = 'Coupon';
    protected $_table = 'coupons';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'coupon', 'customer_id', 'amount', 'expiry_date', 'limited', 'usage_times', 'discount_type', 'deactivate'];
    protected $allowedNulls = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function paginate_coupons()
    {
        $today = 
        $query = [
            'select' => "coupons.* , IF(coupons.limited = 1, 'Limited', 'Unlimited') AS limitation, IF(coupons.deactivate = 1, 'No  - Deactivated', IF(coupons.expiry_date < CURDATE(), 'No - Expired', IF(coupons.usage_times = 0, 'Yes', IF(coupons.usage_times <= COUNT(orders.id), 'No - Used', 'Yes')))) as active,
            CONCAT_WS(' ', first_name, last_name) AS customer_name, IF(discount_type=0, CONCAT_WS('', amount, '%'), CONCAT_WS('', amount, '$')) as final_amount",
            'join' => [
                ['ecommerce_users', 'ecommerce_users.id = coupons.customer_id', 'inner'],
                ['orders', 'orders.coupon_id = coupons.id', 'left']
            ],
            'group_by' => ['coupons.id'],
            'order_by' => [['coupons.id', 'DESC']]
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_coupons_data_tables()
    {
        $dt = [
            'columns' => [
                'coupons.coupon', ["CONCAT_WS(' ', first_name, last_name)", 'customer_name'], 'coupons.expiry_date', ['IF(coupons.limited = 1, "Limited", "Unlimited")', 'limitation'],
                'coupons.usage_times', ["IF(discount_type=0, CONCAT_WS('', amount, '%'), CONCAT_WS('', amount, '$'))", 'final_amount'], ["IF(coupons.deactivate = 1, 'No - Deactivated', IF(coupons.expiry_date < CURDATE(), 'No - Expired', IF(coupons.usage_times = 0, 'Yes', IF(coupons.usage_times <= COUNT(orders.id), 'No - Used', 'Yes'))))", 'active'], 'coupons.id'
            ], 'query' => [
                'join' => [
                    ['ecommerce_users', 'ecommerce_users.id = coupons.customer_id', 'inner'],
                    ['orders', 'orders.coupon_id = coupons.id', 'left']
                ],
                'group_by' => ['coupons.id'],
                'order_by' => [['coupons.id', 'DESC']]
            ],
            'search_in' => ['coupon', 'expiry_date']
        ];
        $this->remove_indexes_if_search_not_date($dt['search_in'], [1]);
        return parent::load_datatables_pagedata($dt);
    }

    public function check_if_coupon_code_exists($coupon)
    {
        $query = [
            'select' => "COUNT(*) as count",
            'where' => [
                ['BINARY(coupon) =', $coupon],
            ],
        ];
        return $this->load($query);
    }

    public function update_coupon_deactivate($coupon_id, $deactivate)
    {
        $data = array(
            'deactivate' => $deactivate
        );
        $this->db->where('coupons.id', $coupon_id);
        return $this->db->update('coupons', $data);
    }
}
