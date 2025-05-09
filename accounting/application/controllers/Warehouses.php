<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Warehouse $Warehouse
 */
class Warehouses extends MY_Controller
{
	public $Configuration = null;
	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('warehouses');
		$this->load->model('Warehouse');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Warehouse->load_warehouses_data_tables());
		} else {
			// $this->pageTitle = $this->lang->line('warehouses');
			$data['records'] = $this->Warehouse->paginate_warehouses();
			$data['title'] = $this->lang->line('warehouses');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('warehouses/index', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.fixedHeader.min', 'warehouse/index'
				]
			]);
		}
	}

	public function add()
	{
		$this->save(0, $this->lang->line('add_warehouse'));
	}

	public function edit($id = '0')
	{
		$this->save($id, $this->lang->line('edit_warehouse'));
	}

	private function save($id = '0', $page_title)
	{
		$fetched = ($id > 0 ? $this->Warehouse->fetch(_gnv($id)) : false);
		$post = $this->input->post(null, true);
		if (!empty($post)) {
			if (!$fetched) {
				$exists = $this->Warehouse->is_warehouse_shelf_exists($post["warehouse"], $post["shelf"]);
				if (!$exists) {
					$this->Warehouse->set_fields($post);
				} else {
					$this->session->set_flashdata('message', $this->lang->line('Warning_warehouse_shelf_exists') );
					redirect('warehouses/add');
				}
			} else {
				$this->Warehouse->set_fields($post);
			}
			$saved = $fetched ? $this->Warehouse->update() : $this->Warehouse->insert();
			if ($saved) {
				redirect('warehouses/index');
			} elseif ($this->Warehouse->is_valid()) {
				redirect('warehouses/index');
			}
		}
		$data["title"] = $page_title;
		$data["warehouses_list"] =$this->Warehouse->load_warehouses_list();
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $page_title
		]);
		$this->load->view('warehouses/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'warehouses/form'
			]
		]);
	}

	public function delete($id)
	{
		$count = $this->Warehouse->warehouses_count();
		$active = $this->Warehouse->is_warhouse_id_active_in_trans_items($id);
		if ($active) {
			$this->session->set_flashdata('message', $this->lang->line('active_warehouse_cant_be_deleted') );
			redirect('warehouses/index');
		} else {
			if ($count["count"] > 1) {
				if ($this->Warehouse->delete($id)) {
					redirect('warehouses/index');
				} else {
					redirect('warehouses/index');
				}
			} else {
				$this->session->set_flashdata('message', $this->lang->line('last_warehouse_cant_be_deleted'));
				redirect('warehouses/index');
			}
		}
	}

	public function get_warehouses_for_item()
	{
		$item_id = $this->input->post('whatselected');
		$warehouse_ids = $this->Warehouse->get_warehouse_ids_of_item($item_id);
		$w = [];
		foreach ($warehouse_ids as $w_id) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($w_id["warehouse_id"]);
			array_push($w, $res["warehouse"]);
		}
		$this->_render_json(
			$w
		);
	}

	public function get_shelfs_for_item()
	{
		$item_id = $this->input->post('item_id');
		$warehouse_selected = $this->input->post('whatselected');
		$warehouse_ids = $this->Warehouse->get_warehouse_ids_of_item($item_id);
		$s = [];
		foreach ($warehouse_ids as $w_id) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($w_id["warehouse_id"]);
			if ($warehouse_selected === $res["warehouse"]) {
				array_push($s, $res["shelf"]);
			}
		}
		$this->_render_json(
			$s
		);
	}

	public function check_if_item_found_in_a_warehouse()
	{
		$item_id = $this->input->post('whatselected');
		$count = $this->Warehouse->check_if_item_exists_in_any_warehouse($item_id);
		echo ($count["count"]);
	}

	public function reports()
	{
		$data['title'] = $this->lang->line('warehouse_report');
		$post = $this->input->post(null, true);
		if (!empty($post)) {
			$this->load->model('Warehouse');
			if ($post['shelf_text'] === "0") {
				$data["group_by_visibility"] = 0;
				$data['items'] = $this->Warehouse->fetch_items_by_warehouse_only($post['warehouse_text']);
			} else {
				$data["group_by_visibility"] = 1;
				$data['items'] = $this->Warehouse->fetch_items_by_warehouse_and_shelf($post['warehouse_text'], $post['shelf_text']);
			}
			$data['group_by'] = 0;
			$data['shelf_name'] =  $post['shelf_text'];
			$data['warehouse_name'] =  $post['warehouse_text'];

			$this->load->view('templates/header', [
				'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
				'_page_title' => $data['title']
			]);
			$this->load->view('warehouses/reports_view', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
					'warehouse/warehouse_reports'
				]
			]);
		} else {
			$this->load->view('templates/header', [
				'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
				'_page_title' => $data['title']
			]);
			$this->load->model('Warehouse');
			$data['warehouses'] = $this->Warehouse->load_warehouses_list();
			$this->load->view('warehouses/reports', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
					'warehouse/warehouse_reports'
				]
			]);
		}
	}

	public function reports_groupby($w, $s)
	{
		$data['title'] = $this->lang->line('warehouse_report');
		if ($s == 0)
			$data['items'] = $this->Warehouse->fetch_items_by_warehouse_only_group_by($w);
		else
			$data['items'] = $this->Warehouse->fetch_items_by_warehouse_and_shelf($w, $s);

		$data['shelf_name'] =  $s;
		$data['warehouse_name'] =  $w;
		$data['group_by'] = 1;
		$data["group_by_visibility"] = 0;
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['title'] 
		]);
		$this->load->view('warehouses/reports_view', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'warehouse/warehouse_reports'
			]
		]);
	}

	public function get_max_qty()
	{
		$warehouse_id = $this->input->post('whatselected');
		$item_id = $this->input->post('item_id');
		$qty = $this->Warehouse->load_item_all_warehouses_and_shelfs($warehouse_id, $item_id)["qty"];
		echo $qty;
	}

	public function find_item_warehouse_shelf()
	{
		$item_id = $this->input->post('whatselected');
		$warehouses_ids = $this->Warehouse->fetch_warehouse_id_by_item_id($item_id);
		$warehouses_shelfs = [];
		foreach ($warehouses_ids as $w_id) {
			$result = $this->Warehouse->fetch_warehouse_shelf($w_id["warehouse_id"]);
			$warehouses_shelfs[$w_id["warehouse_id"]] = $result["w_s"];
		}
		$this->_render_json(
			$warehouses_shelfs
		);
	}

	public function inventory()
	{ 
		if ($this->input->is_ajax_request()) {		
			$this->_render_json($this->Warehouse->load_inventory_data_tables());
		} else {
			$this->load->model('Configuration');
			$categories = $this->Configuration->fetch_categories()["valueStr"];
			$categories = explode(",", $categories);
			$data['categories'][0] = '';
			foreach ($categories as $c) {
				$data['categories'][$c] = $c;
			}
			$data['records'] = $this->Warehouse->paginate_inventory();
			$w_s = $this->Warehouse->load_all();
			$data['w_s_list'][''] = '';
			foreach($w_s as $ws){
				$data['w_s_list'][$ws['id']] = $ws['warehouse'].' - '.$ws['shelf'];
			}
			$data['title'] = $this->lang->line('inventory');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('warehouses/inventory', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.fixedHeader.min', 'warehouse/inventory'
				]
			]);
		}
	}

	public function get_item_sizes_by_warehouse_id()
	{
		$warehouse_id = $this->input->post('whatselected');
		$item_id = $this->input->post('item_id');
		$sizes = $this->Warehouse->load_item_sizes_and_qty_by_warehouse_id($warehouse_id, $item_id);
		$this->_render_json(
			$sizes
		);
	}

	public function get_item_max_qty_by_warehouse_id_and_size()
	{
		$warehouse_id = $this->input->post('whatselected');
		$item_id = $this->input->post('item_id');
		$size = $this->input->post('size');
		$max_qty = $this->Warehouse->fetch_item_max_qty_by_warehouse_id_and_size($warehouse_id, $item_id, $size)["qty"];
		echo $max_qty;
	}

	public function get_warehouses_for_item_from_op()
	{
		$item_id = $this->input->post('whatselected');
		$warehouse_ids = $this->Warehouse->get_warehouse_ids_of_item_in_order_purchase($item_id);
		$w = [];
		foreach ($warehouse_ids as $w_id) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($w_id["warehouse_id"]);
			array_push($w, $res["warehouse"]);
		}
		$this->_render_json(
			$w
		);
	}

	public function get_shelfs_for_item_from_op()
	{
		$item_id = $this->input->post('item_id');
		$warehouse_selected = $this->input->post('whatselected');
		$warehouse_ids = $this->Warehouse->get_warehouse_ids_of_item_in_order_purchase($item_id);
		$s = [];
		foreach ($warehouse_ids as $w_id) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($w_id["warehouse_id"]);
			if ($warehouse_selected === $res["warehouse"]) {
				array_push($s, $res["shelf"]);
			}
		}
		$this->_render_json(
			$s
		);
	}

	public function get_all_warehouses()
	{
		$this->_render_json(
			$this->Warehouse->load_warehouses_list()
		);
	}
}
