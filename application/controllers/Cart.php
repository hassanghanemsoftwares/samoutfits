<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property Item $Item
 */
class Cart extends CI_Controller
{

    function  __construct()
    {
        parent::__construct();
        // Load cart library
        $this->load->library('cart');
        $this->load->model('Item');
    }

    function index()
    {
        $data = array();
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
        $data['subtot'] = 0;
        foreach ($data['cartItems'] as $i) {
            $data['subtot'] += $i['subtotal'];
        }
        $this->load->model('Configuration');
        $delivery_charge = $this->Configuration->fetch_delivery_charge();
        if($delivery_charge['valueStr']){
            $data['delivery_charge'] = $delivery_charge['valueStr'];
        } else {
            $data['delivery_charge'] = 0;
        }      
        // var_dump($data['cartItems']);
        // exit;
        $data['title'] =  $this->lang->line('cart');
        $this->load->view('templates/header', [
            '_page_title' => $data['title'],
            '_moreCss' => []
        ]);
        $this->load->view('cart/index', $data);
        $this->load->view('templates/footer', ['_moreJs' => ['cart/index']]);
    }

    function update_item_qty()
    {
        $update = 0;
        // Get cart item info
        $rowid = $this->input->post('rowid');
        $qty = $this->input->post('qty');
        // Update item in the cart
        if (!empty($rowid) && !empty($qty)) {
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        // Return response
        echo $update ? 'ok' : 'error';
    }

    function remove_item()
    {
        $rowid = $this->input->post('rowid');
        // Remove item from cart
        $remove = $this->cart->remove($rowid);
        echo $remove;
    }

    function add_to_cart()
    {
        $item_id = $this->input->post('item_id');
        $qty = $this->input->post('qty');
        if($qty<=0){
            $qty=1;
        }
        $size = $this->input->post('size');
        $product = $this->Item->load_item_data($item_id);
        $images = $this->Item->load_item_images($item_id);
        if ($images === []) {
            $image = "no_image.jpg";
        } else {
            $image = $images[0]['image_name'];
        }
        // Add product to the cart
        $data = array(
            'id'    => $item_id,
            'qty'    => $qty,
            'price'    => $product['price'],
            'name'    => $product['description'],
            'options' => ['image' => $image, 'size' => $size, 'barcode' => $product['barcode']]
        );
        $saved = $this->cart->insert($data);
        $response['res'] = $saved ? 'ok' : 'error';
        $response['count_cart'] = count($this->cart->contents());
        $this->output->set_content_type('application/json')
				->set_output(
						json_encode($response)
		);
    }
}
