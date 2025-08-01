<?php

defined('BASEPATH') or die('No direct script access allowed');

class Item extends MY_Model
{

	protected $modelName = 'Item';
	protected $_table = 'items';
	protected $_listFieldName = 'description';
	protected $_fieldsNames = ['id', 'barcode', 'description', 'category', 'open_cost', 'cost', 'purchase_cost', 'open_qty', 'price', 'price_ttc', 'qty', 'profit', 'TVA', 'color', 'note', 'gender', 'publish', 'sub_category','variant1', 'stock_clearance', 'old_price', 'size_chart', 'supplier_code', 'rmb', 'link','cool_storage','flammable_handling','fragile','size_guidance'];
	protected $allowedNulls = ['supplier_code', 'rmb', 'link','variant1'];

	public function __construct()
	{
		parent::__construct();
		// $this->validate = [
		// 	'barcode' => [
		// 		'required' => TRUE,
		// 		'allowEmpty' => FALSE,
		// 		'rule' => ['maxLength', 32],
		// 		'message' => sprintf($this->lang->line('required__max_length_rule'), $this->lang->line('barcode'), 32)
		// 	],
		// 	'description' => [
		// 		'required' => TRUE,
		// 		'allowEmpty' => FALSE,
		// 		'rule' => ['maxLength', 255],
		// 		'message' => sprintf($this->lang->line('required__max_length_rule'), $this->lang->line('description'), 255)
		// 	],
		// 	'profit' => [
		// 		'rule' => 'numeric',
		// 		'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('profit'), 255)
		// 	],
		// 	'price' => [
		// 		'rule' => 'numeric',
		// 		'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('price'), 255)
		// 	],
		// ];
	}

	public function paginate_items()
	{
		$query = [
			'select' => "items.*, IF(items.publish = 1, 'Yes', 'No') as published",
			'order_by' => [['description', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_items_data_tables()
	{
		$dt = [
			'columns' => [
				'items.barcode', 'items.description', 'items.category', 'items.cost', 'items.purchase_cost', 'items.profit', 'items.price', 'items.price_ttc', 'items.qty', ['IF(items.publish = 1, "Yes", "No")', 'published'], 'items.id'
			],
			'query' => [],
			'search_in' => ['items.barcode', 'items.description', 'items.category', 'items.cost', 'items.open_cost', 'items.open_qty', 'items.price', 'items.qty', 'items.profit']
		];
		$filter_category = $this->input->get(['category'], true);
		if ($filter_category) {
			if ($filter_category['category']) {
				$dt['query']['where'][] = ['items.category', $filter_category['category']];
			}
		}
		$filter_sub_category = $this->input->get(['sub_category'], true);
		if ($filter_sub_category) {
			if ($filter_sub_category['sub_category']) {
				$dt['query']['where'][] = ['items.sub_category', $filter_sub_category['sub_category']];
			}
		}
		$filter_color = $this->input->get(['color'], true);
		if ($filter_color) {
			if ($filter_color['color']) {
				$dt['query']['where'][] = ['items.color', $filter_color['color']];
			}
		}

		$filter_gender = $this->input->get(['gender'], true);
		if ($filter_gender) {
			if ($filter_gender['gender']) {
				$dt['query']['where'][] = ['items.gender', $filter_gender['gender']];
			}
		}
		$filter_published = $this->input->get(['published'], true);
		if ($filter_published) {
			if ($filter_published['published'] == '1') {
				$dt['query']['where'][] = ['items.publish', 1];
			} elseif ($filter_published['published'] == '0') {
				$dt['query']['where'][] = ['items.publish', 0];
			}
		}
		$filter_stock_clearance = $this->input->get(['stock_clearance'], true);
		if ($filter_stock_clearance) {
			if ($filter_stock_clearance['stock_clearance'] == '1') {
				$dt['query']['where'][] = ['items.stock_clearance', 1];
			} elseif ($filter_stock_clearance['stock_clearance'] == '0') {
				$dt['query']['where'][] = ["(items.stock_clearance != 1 OR items.stock_clearance is NULL)"];
			}
		}
		$filters = $this->input->get(['multi_barcodes'], true);
		if (!empty($filters['multi_barcodes'])) {
			// $auto_nbs = explode(',', $filters['multi_barcodes']);
			$dt['query']['where_in'][] = ['items.barcode', $filters['multi_barcodes']];
		}
		return parent::load_datatables_pagedata($dt);
	}

	public function search_suggestions($q = false)
	{
		(false === $q) and ($q = $this->input->post('term', true));
		$query = $this->db->select("{$this->_table}.*")
			->select("CONCAT_WS(' - ', barcode, description) AS suggestion")
			->from($this->_table)
			->like('barcode', $q, 'after')
			->or_like('category', $q, 'both')
			->or_like("CONCAT(barcode, ' - ', description)", $q, 'both')
			->or_like('description', $q, 'both')
			->get();
		if (false !== $query && $query->num_rows() > 0) {
			return $query->result_array();
		}
		return [];
	}

	public function fetch_item($id)
	{
		$query = [
			'select' => "items.*",
			'where' => [["items.id", $id]]
		];
		return $this->load_all($query);
	}

	public function fetch_item_cost($id)
	{
		$query = [
			'select' => "items.cost",
			'where' => [["items.id", $id]]
		];
		return $this->load_all($query);
	}

	public function generate_autonumber()
	{
		$query = $this->db->select_max('barcode', 'newbarcode')
			->where('items.barcode >=', 9900000)
			->where('items.barcode <', 9999999)
			->get($this->_table);

		if ($query->row()->newbarcode == null) {
			$no = 9900000;
			return  $no;
		} else {
			$no =	$query->row()->newbarcode;
			return 1 + $no;
		}
	}

	public function get_barcode_by_id($id)
	{
		$query = $this->db->get_where($this->_table, array('id' => $id));
		return $query->row_array();
	}

	public function get_item_details($id)
	{
		$query = $this->db->select('*')
			->from('transaction_items as t1')
			->join('transactions as t2', 't1.transaction_id = t2.id', 'LEFT')
			->where('t1.item_id', $id)
			->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id())
			->get();
		return $query->row_array();
	}

	public function fetch_all_item_details($id)
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
		$this->db->where('items.id', $id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function fetch_qty_by_item_id($id)
	{
		$query = [
			'select' => "items.qty ",
			'where' => [["items.id", $id]]
		];
		return $this->load($query);
	}

	public function update_item_qty_by_item_id($id, $new_qty)
	{
		$data = [
			'qty' => $new_qty
		];
		$this->db->where('id', $id);
		return $this->db->update('items', $data);
	}

	public function fetch_item_last_purchase($id)
	{
		$this->db->select('transaction_items.net_cost, transaction_items.id as trans_item_id, transactions.id as trans_id, items.id as item_id, items.open_cost');
		$this->db->from('items');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
		$this->db->select_max('transactions.created_on');
		$this->db->where('items.id', $id);
		$this->db->where('transactions.trans_type', "PU");
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function update_item_cost_by_item_id($id, $cost)
	{
		$data = [
			'cost' => $cost
		];
		$this->db->where('id', $id);
		return $this->db->update('items', $data);
	}

	public function calculate_purchase_total_of_item($item_id, $trans_id)
	{
		$row = $this->db->get_where(
			'transaction_items',
			array(
				'transaction_items.item_id' => $item_id,
				'transaction_items.transaction_id' => $trans_id
			)
		)->result_array();

		$tot_item = floatval($row['0']['qty']) * (floatval($row['0']['price']) * (1 - (floatval($row['0']['discount']) / 100)) + floatval($row['0']['cost']));
		return $tot_item;
	}

	public function paginate_items_activity($item_id)
	{
		$query = [
			'select' => [
				["items.description, transactions.trans_type, transactions.trans_date, transactions.auto_no"],
				["account1.account_name, currencies.currency_code, currencies.currency_rate, w.warehouse, w.shelf, ti.qty, ti.price"],
				["ROUND(( ti.qty * (IF( transactions.trans_type = 'PU', ti.cost, 0) + ((ti.price * (1 - ti.discount/100))))),2) AS total_of_item"],
				["transactions.id AS trans_id"]
			],
			'join' => [
				['transaction_items as ti', 'ti.item_id = items.id', 'inner'],
				['transactions', 'transactions.id = ti.transaction_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['warehouses as w', 'w.id = ti.warehouse_id', 'inner']
			],
			'where' =>  [
				["ti.item_id", $item_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			],
			'order_by' => [['auto_no', 'ASC']]
		];
		return $this->paginate($query, ['uri_segment' => 4, 'urlPrefix' => '']);
	}

	public function load_items_activity_data_tables($item_id)
	{
		$dt = [
			'columns' => [
				"account1.account_name", "transactions.trans_type", "transactions.trans_date",
				"transactions.auto_no", "currencies.currency_code", "currencies.currency_rate", "w.warehouse", "w.shelf", "ti.qty", "ti.price",
				["ROUND(( ti.qty * (IF( transactions.trans_type = 'PU', ti.cost, 0) + ((ti.price * (1 - ti.discount/100))))),2)", "total_of_item"],
				["transactions.id", "trans_id"]

			], 'query' => [
				'join' => [
					['transaction_items as ti', 'ti.item_id = items.id'],
					['transactions', 'transactions.id = ti.transaction_id'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['warehouses as w', 'w.id = ti.warehouse_id', 'inner']
				],
				'where' =>  [
					["items.id", $item_id],
					["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
				]
			],
			'search_in' => ['trans_date', 'account_name', 'trans_type', 'currency_code', 'warehouse']
		];
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}

	public function update_open_qty($qty_cost_array)
	{
		foreach ($qty_cost_array as $a) {
			$data = [
				'open_qty' => $a["qty"]
			];
			$this->db->where('items.id', $a["item_id"]);
			$update = $this->db->update('items', $data);
		}
		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function update_cost_and_price_in_opening_items($purchased_items, $profit_qty_cost_array, $currency_rate)
	{
		foreach ($purchased_items as $p) {
			foreach ($profit_qty_cost_array as $a) {
				if ($p["item_id"] === $a["item_id"]) {
					if ($p["count"] < 1) {
						if (floatval($a["profit"]) > 0) {
							$data = [
								'price' => (floatval($a["cost"]) * (1 + (floatval($a["profit"]) / 100))),
								'cost' => ($a["cost"] * $currency_rate)
							];
						} else {
							$data = [
								'cost' => ($a["cost"] * $currency_rate)
							];
						}
						$this->db->where('items.id', $a["item_id"]);
						$update = $this->db->update('items', $data);
					} else {
						$update = true;
					}
				}
			}
		}
		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function fetch_profit_for_each_item_in_trans($items)
	{
		$query = [];
		foreach ($items as $i) {
			$this->db->select('profit');
			$this->db->from('items');
			$this->db->where('items.id', $i["item_id"]);
			$result = $this->db->get()->row_array();
			array_push($query, ["item_id" => $i["item_id"], "qty" => $i["qty"], "cost" => $i["cost"], "profit" => $result["profit"]]);
		}
		return $query;
	}

	public function find_missing_products($trans_items)
	{
		$missing_prod = [];
		foreach ($trans_items as $t) {
			$qty = $this->get_qty_of_item($t["item_id"]);
			if ($qty["qty"] === "0") {
				array_push($missing_prod, $t);
			} elseif ($qty["qty"] < $t["qty"]) {
				$t["qty"] = $t["qty"] - $qty["qty"];
				array_push($missing_prod, $t);
			}
		}
		return $missing_prod;
	}

	public function get_qty_of_item($item_id)
	{
		$this->db->select('qty');
		$this->db->from('items');
		$this->db->where('items.id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function paginate_missing_products()
	{
		$query = [
			'select' => [
				["items.barcode, items.description, ti.qty, ti.id, ti.checkbox"]
			],
			'join' => [
				['transaction_items AS ti', 'ti.item_id= items.id', 'inner'],
				['transactions', 'ti.transaction_id = transactions.id', 'inner']
			],
			'where' => [
				["transactions.trans_type", "MP"],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			],
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function paginate_missing_products_not_checked()
	{
		$query = [
			'select' => [
				["items.barcode, items.description, ti.qty, ti.id, ti.checkbox"]
			],
			'join' => [
				['transaction_items AS ti', 'ti.item_id= items.id', 'inner'],
				['transactions', 'ti.transaction_id = transactions.id', 'inner']
			],
			'where' => [
				["transactions.trans_type", "MP"],
				["ti.checkbox =", NUll],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			],
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function fetch_open_qty_of_item($item_id)
	{
		$this->db->select('open_qty');
		$this->db->from('items');
		$this->db->where('items.id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_item_data($item_id)
	{
		$query = $this->db->select("{$this->_table}.*")
			->from($this->_table)
			->where('id', $item_id)
			->get();
		if (false !== $query && $query->num_rows() > 0) {
			return $query->result_array();
		} else {
			return [];
		}
	}

	public function fetch_open_qty_by_item_id($id)
	{
		$query = [
			'select' => "items.open_qty ",
			'where' => [["items.id", $id]]
		];
		return $this->load($query);
	}

	public function update_qty_in_op($trans_items)
	{
		foreach ($trans_items as $t) {
			$qty = $this->fetch_qty_by_item_id($t["item_id"])["qty"];
			$new_qty = $qty + $t["qty"];
			if ($new_qty > 0) {
				$data = [
					'qty' => $new_qty
				];
				$this->db->where('items.id', $t["item_id"]);
				$update = $this->db->update('items', $data);
			}
		}
		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function check_barcode($barcode)
	{
		$this->db->select('count(*) as count');
		$this->db->from('items');
		$this->db->where('items.barcode', $barcode);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function paginate_missing_products_checked()
	{
		$query = [
			'select' => [
				["items.barcode, items.description, ti.qty, ti.id, ti.checkbox"]
			],
			'join' => [
				['transaction_items AS ti', 'ti.item_id= items.id', 'inner'],
				['transactions', 'ti.transaction_id = transactions.id', 'inner']
			],
			'where' => [
				["transactions.trans_type", "MP"],
				["ti.checkbox !=", NUll],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			],
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function update_open_cost_and_open_qty_on_OP_delete($item_id)
	{

		$data = [
			'open_qty' => 0,
			'open_cost' => 0
		];
		$this->db->where('items.id', $item_id);
		$update = $this->db->update('items', $data);
		if ($update) {
			return true;
		} else {
			return false;
		}
	}

	public function fetch_open_cost_of_item($item_id)
	{
		$this->db->select('open_cost');
		$this->db->from('items');
		$this->db->where('items.id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function update_item_purchase_cost_by_item_id($id, $purchase_cost)
	{
		$data = [
			'purchase_cost' => $purchase_cost
		];
		$this->db->where('id', $id);
		return $this->db->update('items', $data);
	}

	public function update_qty_on_delete_op($trans_items)
	{
		foreach ($trans_items as $t) {
			$qty = $this->fetch_qty_by_item_id($t["item_id"])["qty"];
			$new_qty = $qty - $t["qty"];
			if ($new_qty > 0) {
				$data = [
					'qty' => $new_qty
				];
				$this->db->where('items.id', $t["item_id"]);
				$this->db->update('items', $data);
			}
		}
	}

	public function load_all_items_ids()
	{
		$this->db->select('id');
		$this->db->from('items');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function insert_item_images($images, $item_id)
	{
		foreach ($images as $image) {
			$data = [
				'image_name' => $image,
				'item_id' => $item_id
			];
			$this->db->insert('product_images', $data);
		}
	}

	public function delete_item_images($item_id)
	{
		$this->db->from('product_images');
		$this->db->where('item_id', $item_id);
		$this->db->delete();
	}

	public function load_item_images($item_id)
	{
		$this->db->select('image_name, order_nb, id');
		$this->db->from('product_images');
		$this->db->where('item_id', $item_id);
		$this->db->order_by('order_nb', 'ASC');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function delete_item_image_by_item_id($image_name, $item_id)
	{
		$this->db->from('product_images');
		$this->db->where('item_id', $item_id);
		$this->db->where('image_name', $image_name);
		$this->db->delete();
	}

	public function fetch_TVA_of_item($item_id)
	{
		$this->db->select('TVA');
		$this->db->from('items');
		$this->db->where('items.id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_price_of_item($item_id)
	{
		$this->db->select('price');
		$this->db->from('items');
		$this->db->where('items.id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function update_item_price_and_price_ttc($id, $price, $price_ttc)
	{
		$data = [
			'price' => $price,
			'price_ttc' => $price_ttc
		];
		$this->db->where('id', $id);
		return $this->db->update('items', $data);
	}

	public function update_item_cost_price_and_price_ttc($id, $cost, $price, $price_ttc)
	{
		$data = [
			'cost' => $cost,
			'price' => $price,
			'price_ttc' => $price_ttc
		];
		$this->db->where('id', $id);
		return $this->db->update('items', $data);
	}

	public function fetch_cost_of_item($item_id)
	{
		$this->db->select('cost');
		$this->db->from('items');
		$this->db->where('items.id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function update_item_cost($id, $cost)
	{
		$data = [
			'cost' => $cost
		];
		$this->db->where('id', $id);
		return $this->db->update('items', $data);
	}

	public function load_product_data($item_id)
	{
		$this->db->select('items.*');
		$this->db->from('items');
		$this->db->where('items.id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function calculate_stock_total_cost()
	{
		$this->db->select('SUM(items.qty * items.cost) AS stock_cost');
		$this->db->from('items');
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_all_items_data_tables()
	{
		$dt = [
			'columns' => [
				'items.barcode', 'items.description', 'items.category', 'items.price', 'items.price_ttc', 'items.qty', 'items.id'
			],
			'query' => [],
			'search_in' => ['items.barcode', 'items.description', 'items.category']
		];
		$filter_category = $this->input->get(['category'], true);
		// var_dump($filter_category );exit;
		if ($filter_category) {
			if ($filter_category['category']) {
				$dt['query']['where'][] = ['items.category', $filter_category['category']];
			}
		}
		$filter_sub_category = $this->input->get(['sub_category'], true);
		// var_dump($filter_sub_category);exit;
		if ($filter_sub_category) {
			if ($filter_sub_category['sub_category']) {
				$dt['query']['where'][] = ['items.sub_category', $filter_sub_category['sub_category']];
			}
		}
		$filter_color = $this->input->get(['color'], true);
		if ($filter_color) {
			if ($filter_color['color']) {
				$dt['query']['where'][] = ['items.color', $filter_color['color']];
			}
		}

		$filter_gender = $this->input->get(['gender'], true);
		if ($filter_gender) {
			if ($filter_gender['gender']) {
				$dt['query']['where'][] = ['items.gender', $filter_gender['gender']];
			}
		}
		$filter_published = $this->input->get(['published'], true);
		if ($filter_published) {
			if ($filter_published['published'] == '1') {
				$dt['query']['where'][] = ['items.publish', 1];
			} elseif ($filter_published['published'] == '0') {
				$dt['query']['where'][] = ['items.publish', 0];
			}
		}
		$filter_stock_clearance = $this->input->get(['stock_clearance'], true);
		if ($filter_stock_clearance) {
			if ($filter_stock_clearance['stock_clearance'] == '1') {
				$dt['query']['where'][] = ['items.stock_clearance', 1];
			} elseif ($filter_stock_clearance['stock_clearance'] == '0') {
				$dt['query']['where'][] = ["(items.stock_clearance != 1 OR items.stock_clearance is NULL)"];
			}
		}
		$filters = $this->input->get(['multi_barcodes'], true);
		if (!empty($filters['multi_barcodes'])) {
			$dt['query']['where_in'][] = ['items.barcode', $filters['multi_barcodes']];
		}
		return parent::load_datatables_pagedata($dt);
	}

	public function update_product_publish($item_id, $publish)
	{
		return $this->db->update('items', array('publish' => $publish), array('id' => $item_id));
	}

	public function update_product_image_order_nb($image_id, $order_nb)
	{
		return $this->db->update('product_images', array('order_nb' => $order_nb), array('id' => $image_id));
	}

	public function load_image_by_item_id_and_order_nb($item_id, $order_nb)
	{
		$this->db->select('product_images.*');
		$this->db->from('product_images');
		$this->db->where('product_images.item_id', $item_id);
		$this->db->where('product_images.order_nb', $order_nb);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_all_item_images($item_id)
	{
		$this->db->select('product_images.*');
		$this->db->from('product_images');
		$this->db->where('product_images.item_id', $item_id);
		$this->db->order_by('order_nb', 'ASC');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function update_product_stock_clearance($item_id, $stock_clearance)
	{
		return $this->db->update('items', array('stock_clearance' => $stock_clearance), array('id' => $item_id));
	}
	public function update_product_cool_storage($item_id, $cool_storage)
	{
		return $this->db->update('items', array('cool_storage' => $cool_storage), array('id' => $item_id));
	}
	public function update_product_flammable_handling($item_id, $flammable_handling)
	{
		return $this->db->update('items', array('flammable_handling' => $flammable_handling), array('id' => $item_id));
	}
	public function update_product_fragile($item_id, $fragile)
	{
		return $this->db->update('items', array('fragile' => $fragile), array('id' => $item_id));
	}
	public function update_product_size_guidance($item_id, $size_guidance)
	{
		return $this->db->update('items', array('size_guidance' => $size_guidance), array('id' => $item_id));
	}
	public function update_product_category($item_id, $category)
	{
		return $this->db->update('items', array('category' => $category), array('id' => $item_id));
	}

	public function update_product_sub_category($item_id, $sub_category)
	{
		return $this->db->update('items', array('sub_category' => $sub_category), array('id' => $item_id));
	}
	public function update_product_variant1($item_id, $variant1)
	{
		return $this->db->update('items', array('variant1' => $variant1), array('id' => $item_id));
	}

	public function update_product_color($item_id, $color)
	{
		return $this->db->update('items', array('color' => $color), array('id' => $item_id));
	}

	public function update_product_gender($item_id, $gender)
	{
		return $this->db->update('items', array('gender' => $gender), array('id' => $item_id));
	}

	public function update_product_old_price($item_id, $old_price)
	{
		return $this->db->update('items', array('old_price' => $old_price), array('id' => $item_id));
	}

	public function load_item_image($item_id)
	{
		$this->db->select('product_images.*');
		$this->db->from('product_images');
		$this->db->where('product_images.item_id', $item_id);
		$this->db->order_by('order_nb', 'ASC');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function search_pre_orders_suggestions($q = false)
	{
		(false === $q) and ($q = $this->input->post('term', true));
		$query = $this->db->select("{$this->_table}.*")
			->select("CONCAT_WS(' - ', barcode, items.description) AS suggestion")
			->from($this->_table)
			->join('transaction_items', 'transaction_items.item_id = items.id', 'inner')
			->join('transactions', 'transaction_items.transaction_id = transactions.id', 'inner')
			->join('transactions AS pu', 'pu.relation_id = transactions.id', 'left')
			// ->where("transactions.trans_type = OP and transactions.status != 1 and (barcode like '$q'% or category like %'$q'% or CONCAT(barcode, ' - ', items.description) like %'$q'% or items.description like %'$q'%)")
			->group_start()
			->where('transactions.trans_type', 'OP')
			->where('pu.relation_id is NULL')
			// ->where('transactions.status != 1 or transactions.status is NULL')
			->group_start()
			->like('barcode', $q, 'after')
			->or_like('category', $q, 'both')
			->or_like("CONCAT(barcode, ' - ', items.description)", $q, 'both')
			->or_like('items.description', $q, 'both')
			->group_end()
			->group_end()
			->group_by('items.id')
			->get();
		if (false !== $query && $query->num_rows() > 0) {
			return $query->result_array();
		}
		return [];
	}

	public function search_suggestions_by_category($q = false, $category)
	{
		(false === $q) and ($q = $this->input->post('term', true));
		$query = $this->db->select("{$this->_table}.*")
			->select("CONCAT_WS(' - ', barcode, description) AS suggestion")
			->from($this->_table)
			->group_start()
			->where('category', $category)
			->group_end()
			->group_start()
			->like('barcode', $q, 'after')
			// ->or_like('category', $q, 'both')
			->or_like("CONCAT(barcode, ' - ', description)", $q, 'both')
			->or_like('description', $q, 'both')
			->group_end()
			->get();
		if (false !== $query && $query->num_rows() > 0) {
			return $query->result_array();
		}
		return [];
	}
		public function search_suggestions_new($q = false)
	{
		(false === $q) and ($q = $this->input->post('term', true));
		$query = $this->db->select("{$this->_table}.*")
			->select("CONCAT_WS(' - ', barcode, description) AS suggestion")
			->from($this->_table)
			// ->group_start()
			// ->where('category', $category)
			// ->group_end()
			->group_start()
			->like('barcode', $q, 'after')
			// ->or_like('category', $q, 'both')
			->or_like("CONCAT(barcode, ' - ', description)", $q, 'both')
			->or_like('description', $q, 'both')
			->group_end()
			->get();
		if (false !== $query && $query->num_rows() > 0) {
			return $query->result_array();
		}
		return [];
	}
	public function delete_item_size_chart_by_item_id($image_name, $item_id)
	{
		$data = [
			'size_chart' => NULL
		];
		$this->db->where('id', $item_id);
		$this->db->where('size_chart', $image_name);
		return $this->db->update('items', $data);
	}
	public function upload_item_size_chart_by_item_id($image_name, $item_id)
	{
		$data = [
			'size_chart' =>  $image_name
		];
		$this->db->where('id', $item_id);
		return $this->db->update('items', $data);
	}
	
	public function get_all_items_for_pixels(){
		$query=$this->db->select('items.*,SUM(transaction_items.qty * transaction_items.mvt_type) as availabile_qty,product_images.image_name as first_image')
		                ->from('items')
						->join('transaction_items','transaction_items.item_id=items.id','left')
						->join('(SELECT * FROM product_images WHERE product_images.order_nb=1 OR product_images.order_nb IS NULL GROUP BY product_images.item_id) AS product_images','product_images.item_id=items.id','left')
						->where('items.publish',1)
						->group_by('items.id')
						->get();
		if($query->num_rows()==0){
			return array();
		}
		return $query->result();
	}
}
