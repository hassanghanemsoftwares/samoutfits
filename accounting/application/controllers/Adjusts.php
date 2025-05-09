<?php
defined('BASEPATH') or die('No direct script access allowed');
/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Warehouse $Warehouse
 * @property Transaction_item $Transaction_item
 */
class Adjusts extends MY_Controller
{
	public $Transaction = NULL;
	public $Configuration = NULL;

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('adjusts');
		$this->load->model('Transaction');
	}

	public function save()
	{
		$transType = Transaction::AdjustTransType;
		$this->load->model('Configuration');
		$lc_currency = $this->Configuration->fetch_local_currency()['valueInt'];
		$post = $this->input->post(null, true);
		if ($post) {
			// var_dump($post);
			// exit;
			$auto_no = $this->Transaction->set_next_auto_number($transType);
			$saved = $this->Transaction->add_new_adjust_trans($auto_no, $lc_currency, $transType);
			if ($saved) {
				$trans_id = $this->Transaction->fetch_transaction_id_by_autono($auto_no, $transType)[0]["id"];
				$this->load->model('Warehouse');
				$warehouse_id = $this->Warehouse->fetch_warehouse_id_by_warehouse_shelf($post["warehouse"], $post["shelf"])["id"];
				$diff = intval($post["new_qty"]) - intval($post["old_qty"]);
				$qty = abs($diff);
				$mvt_type = 0;
				if ($diff > 0) {
					$mvt_type = 1;
				} elseif ($diff < 0) {
					$mvt_type = -1;
				}
				$this->load->model('Transaction_item');
				$this->Transaction_item->add_adjust_trans_items($trans_id, $post['item_id'], $warehouse_id, $mvt_type, $qty, $post['size']);
				$items[0]['item_id']=$post['item_id'];
				$this->Transaction->update_items_qty($items);
			}
		}
		redirect('warehouses/inventory');
	}

	public function edit($id){
		redirect($_SERVER['HTTP_REFERER']);
	}
}
