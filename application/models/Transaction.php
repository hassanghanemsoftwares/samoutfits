<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Transaction_item $Transaction_item
 * @property Item $Item
 */
class Transaction extends MY_Model
{
	const SaleTransType = 'SA';
	const ReturnSaleTransType = 'RS';
	const ExchangeTransType = 'EX';

	protected $modelName = 'Transaction';
	protected $_table = 'transactions';
	protected $_listFieldName = 'auto_no';
	protected $_fieldsNames = ['id', 'fiscal_year_id', 'trans_type', 'auto_no', 'trans_date', 'value_date', 'account_id', 'account2_id', 'currency_id', 'currency_rate', 'discount', 'user_id', 'driver_id', 'employee_id', 'status', 'delivered', 'pickup', 'description', 'relation_id', 'delivery_charge', 'status2', 'source', 'delivery_note', 'payment_method', 'hide', 'payment_method_gateway', 'payment_method_gateway_status'];
	protected $_dateFields = ['trans_date', 'value_date'];
	protected $allowedNulls = ['value_date', 'discount', 'payment_method_gateway', 'payment_method_gateway_status'];

	public function __construct()
	{
		parent::__construct();
	}

	public function get_transaction_types_list()
	{
		return [
			self::SaleTransType => 'Sale',
			self::ReturnSaleTransType => 'Return Sale',
			self::ExchangeTransType => 'Exchange',
		];
	}

	public function create_new_sale_invoice_for_order($discount, $local_currency, $account2, $fiscal_year_id, $user_id, $description, $delivery_charge)
	{
		// $disc = 0;
		// if($coupon_id){			
		// 	$coupon= $this->User->load_coupon_data($coupon_id);
		// 	if($coupon){
		// 		if($coupon['discount_type'] === 1){
		// 			$disc = $coupon['amount'];
		// 		}
		// 	}
		// }		
		$data = array(
			'auto_no' => $this->set_next_auto_number('SA'),
			'account_id' => $this->violet_auth->get_account_id(),
			'account2_id' => $account2['id'],
			'trans_date' => date('d-m-Y'),
			'trans_type' => 'SA',
			'value_date' => '',
			'currency_id' => $local_currency,
			'currency_rate' => 1,
			'status2' => "Received & Pending Approval",
			'source' => "Website",
			'delivery_charge' => $delivery_charge,
			'discount' => $discount,
			'fiscal_year_id' => $fiscal_year_id,
			'user_id' => $user_id,
			'delivery_note' => $description,
			'hide' => 1
		);
		$this->Transaction->set_fields($data);
		$saved = $this->Transaction->insert();
		return  $saved;
	}


	//created 2024-03-07
	public function create_new_sale_invoice_for_order_as_user($acc_id, $discount, $local_currency, $account2, $fiscal_year_id, $user_id, $description, $delivery_charge, $payment_method_gateway, $payment_method_gateway_status)
	{
		// $disc = 0;
		// if($coupon_id){			
		// 	$coupon= $this->User->load_coupon_data($coupon_id);
		// 	if($coupon){
		// 		if($coupon['discount_type'] === 1){
		// 			$disc = $coupon['amount'];
		// 		}
		// 	}
		// }		
		$data = array(
			'auto_no' => $this->set_next_auto_number('SA'),
			'account_id' => $acc_id,
			'account2_id' => $account2['id'],
			'trans_date' => date('d-m-Y'),
			'trans_type' => 'SA',
			'value_date' => '',
			'currency_id' => $local_currency,
			'currency_rate' => 1,
			'status2' => "Received & Pending Approval",
			'source' => "Website",
			'delivery_charge' => $delivery_charge,
			'discount' => $discount,
			'fiscal_year_id' => $fiscal_year_id,
			'user_id' => $user_id,
			'delivery_note' => $description,
			'hide' => 1,
			'payment_method_gateway' => $payment_method_gateway,
			'payment_method_gateway_status' => $payment_method_gateway_status,


		);
		$this->Transaction->set_fields($data);
		$saved = $this->Transaction->insert();
		return  $saved;
	}


	public function set_next_auto_number($transType)
	{
		if ($transType == 'SA') {
			$query = $this->db->select_max('auto_no', 'nextAutoNo')
				->where_in('trans_type', ["SA", "EX"])
				->get('transactions');
		} else {
			$query = $this->db->select_max('auto_no', 'nextAutoNo')
				->where("trans_type", $transType)
				->get('transactions');
		}
		$no = ($query->num_rows() > 0 ? _gnv($query->row()->nextAutoNo) : 0);
		return 1 + $no;
	}

	public function fetch_fiscal_year_id_for_SA()
	{
		$this->db->select('fiscal_years.id');
		$this->db->from('fiscal_years');
		$this->db->join('transactions', 'transactions.fiscal_year_id = fiscal_years.id', 'inner');
		$this->db->group_by('fiscal_years.id');
		$this->db->order_by('fiscal_years.id', 'DESC');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function fetch_primary_warehouse_data()
	{
		$this->db->select('*');
		$this->db->from('warehouses');
		$this->db->where('warehouse', 'Primary Warehouse');
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function  update_items_qty($trans_items, $fiscal_year_id)
	{
		foreach ($trans_items as $t) {
			$query = [
				'select' => [
					"SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty,"
				],
				'join' => [
					['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner'],
					['items', 'items.id = transaction_items.item_id', 'inner']
				],
				'where' => [
					["transactions.fiscal_year_id", $fiscal_year_id],
					["transaction_items.item_id", $t["id"]],
				],
				'group_by' => ['items.id']
			];
			$result = $this->load($query);
			if ($result["total_qty"] === NULL) {
				$result["total_qty"] = 0;
			}
			$data = [
				'qty' => $result["total_qty"]
			];
			$this->db->where('id', $t["id"]);
			$this->db->update('items', $data);
		}
	}

	public function load_avialable_qty_of_item_specific_size($item_id, $size)
	{
		$query = [
			'select' => [
				"SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as av_qty,"
			],
			'join' => [
				['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner'],
			],
			'where' => [
				["transaction_items.item_id", $item_id],
				["transaction_item_sizes.size", $size]
			],
		];
		return $this->load($query);
	}

	public function load_category_sizes($category)
	{
		$query = [
			'select' => [
				"transaction_item_sizes.size"
			],
			'join' => [
				['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner'],
				['items', 'items.id = transaction_items.item_id', 'inner'],
			],
			'where' => [
				["items.category", $category],
			],
			'group_by' => ['transaction_item_sizes.size'],
			'order_by' => ['transaction_item_sizes.size', 'ASC']
		];
		return $this->load_all($query);
	}

	public function load_category_available_sizes($category)
	{
		$this->db->select('items.id, items.color, items.gender, transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, ');
		$this->db->from('items');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id', 'inner');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner');
		$this->db->where('warehouses.warehouse', "Primary Warehouse");
		$this->db->where('items.publish', 1);
		$this->db->group_by(['items.id', 'transaction_item_sizes.size']);
		if ($category === "Shoes" || $category === "shoes") {
			$this->db->where_in('items.category', ["Men Shoes", "Women Shoes", "Unisex Shoes", "Shoes"]);
		} else {
			if ($category === "Wallets") {
				$this->db->where('items.category', "Bags & Wallets");
			} else {
				$this->db->where('items.category', $category);
			}
		}
		$query = $this->db->get()->result_array();
		return $query;
	}


	public function load_available_filters($category, $sub_cat)
	{
		$this->db->select('items.id, items.color, items.gender, transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, items.price');
		$this->db->from('items');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id', 'inner');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner');
		$this->db->where('warehouses.warehouse', "Primary Warehouse");
		$this->db->where('items.publish', 1);
		$this->db->group_by(['items.id', 'transaction_item_sizes.size']);
		if ($category === "Shoes" || $category === "shoes") {
			$this->db->where_in('items.category', ["Men Shoes", "Women Shoes", "Unisex Shoes", "Shoes"]);
		} else {
			if ($category === "Wallets") {
				$this->db->where('items.category', "Bags & Wallets");
			} else {
				$this->db->where('items.category', $category);
			}
		}
		if ($sub_cat && $sub_cat !== 'All') {
			$sub_f = str_replace('%and', '&', $sub_cat);
			if (is_array($sub_f)) {
				if (in_array('Deodorant_&_Roll', $sub_f)) {
					$this->db->where_in('items.sub_category', ['Deodorant & Roll-on']);
				} else {
					$this->db->where_in('items.sub_category', str_replace('_', ' ', $sub_f));
				}
			} else {
				$sub_f = str_replace('All-', '', $sub_f);
				$this->db->where_in('items.sub_category', str_replace('_', ' ', $sub_f));
			}
		}
		$this->db->having('total_qty >', 0);
		$query = $this->db->get()->result_array();
		// var_dump($query);exit;
		return $query;
	}

	public function load_stock_clearance_available_filters()
	{
		$this->db->select('items.id, items.color, items.gender, transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, items.price');
		$this->db->from('items');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id', 'inner');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner');
		$this->db->where('warehouses.warehouse', "Primary Warehouse");
		$this->db->where('items.publish', 1);
		$this->db->where('items.stock_clearance', 1);
		$this->db->group_by(['items.id', 'transaction_item_sizes.size']);
		$this->db->having('total_qty >', 0);
		$query = $this->db->get()->result_array();
		// var_dump($query);exit;
		return $query;
	}


	public function update_sale_invoice_payment_status($transaction_id, $status)
	{
		$data = array(
			'payment_method_gateway_status' => $status
		);
		$this->db->where('transactions.id', $transaction_id);
		return $this->db->update('transactions', $data);
	}
}
