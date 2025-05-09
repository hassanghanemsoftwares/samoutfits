<?php

defined('BASEPATH') or die('No direct script access allowed');

class Transaction_item extends MY_Model
{

	protected $modelName = 'Transaction_item';
	protected $_table = 'transaction_items';
	protected $_listFieldName = 'item_id';
	protected $_fieldsNames = ['id', 'transaction_id', 'item_id', 'warehouse_id', 'qty', 'mvt_type', 'cost', 'price', 'discount', 'net_cost', 'profit', 'checkbox'];
	protected $allowedNulls = [];

	public function __construct()
	{
		parent::__construct();
	}

    public function add_new_trans_item_and_trans_item_sizes($item, $trans_id, $discount){
		$product = $this->Item->load_item_data($item['id']);
		$warehouse_id= $this->Transaction->fetch_primary_warehouse_data();
        if($item['options']['size']){
            $size = $item['options']['size'];
        }else{
            $size = 'no';
        }
        $this->Transaction_item->reset_fields();
		$data = array(
            'transaction_id' => $trans_id,
            'item_id' => $item['id'],
			'warehouse_id' => $warehouse_id['id'],
            'qty' => $item['qty'],
            'price' => $item['price'],
            'discount' => $discount,
			'mvt_type' => '-1',
			'cost' => $product['cost'],
			'net_cost' => 0
        );
		$this->Transaction_item->set_fields($data);
        $saved = $this->Transaction_item->insert();
        if($saved){
           $done = $this->save_transaction_item_sizes($this->Transaction_item->get_field('id'), $size, $item['qty']);
            return $done;
        }
        return  false;
	}

	public function save_transaction_item_sizes($trans_item_id, $size, $qty)
	{
		$data = array(
			'transaction_item_id' => $trans_item_id,
			'size' => $size,
			'qty' => $qty
		);
		return $this->db->insert('transaction_item_sizes', $data);
	}
}
