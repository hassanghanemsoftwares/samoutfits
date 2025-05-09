<?php

defined('BASEPATH') or die('No direct script access allowed');

class Order_item extends MY_Model
{
    protected $modelName = 'Order_item';
    protected $_table = 'order_items';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'order_id', 'item_id', 'size', 'qty', 'price', 'discount'];
    protected $_dateFields = [];
    protected $allowedNulls = ['discount'];

    public function __construct()
    {
        parent::__construct();
    }

    public function add_new_order_item($order_item, $order_id, $discount){
        $this->Order_item->reset_fields();
        if($order_item['options']['size']){
            $size = $order_item['options']['size'];
        }else{
            $size = 'no';
        }
        $data = array(
            'order_id' => $order_id,
            'item_id' => $order_item['id'],
            'size' => $size,
            'qty' => $order_item['qty'],
            'price' => $order_item['price'],
            'discount' => $discount,
        );
        $this->Order_item->set_fields($data);
        $saved = $this->Order_item->insert();
        return  $saved;
    }

}
