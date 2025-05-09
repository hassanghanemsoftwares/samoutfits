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
		$this->validate = [
			'transaction_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('transaction'))
			],
			'item_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('item'))
			],
			'qty' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('qty'))
			],
			'mvt_type' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('mvt_type'))
			],
			'cost' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('cost'))
			],
			'price' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('price'))
			],
			'discount' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('discount'))
			],
			'net_cost' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('net_cost'))
			]
		];
	}

	public function paginate_transactions_items()
	{
		$this->load->model(['Transaction', 'Item']);
		$TransactionsFld = $this->Transaction->get('_listFieldName');
		$ItemsFld = $this->Item->get('_listFieldName');
		$query = [
			'select' => "transactions_items.*, transactions.{$TransactionsFld} as Transaction, items.{$ItemsFld} as Item",
			'join' => [
				['transactions', 'transactions.id = transactions_items.transaction_id', 'inner'],
				['items', 'items.id = transactions_items.item_id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			],
			'order_by' => [['item_id', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_transactions_items_data_tables()
	{
		$this->load->model(['Transaction', 'Item']);
		$TransactionsFld = $this->Transaction->get('_listFieldName');
		$ItemsFld = $this->Item->get('_listFieldName');
		$init_override = [
			'columns' => [
				'transactions_items.qty', 'transactions_items.mvt_type', 'transactions_items.cost', 'transactions_items.price', 'transactions_items.discount', 'transactions_items.id',
				['transactions.' . $TransactionsFld, 'Transaction'],
				['items.' . $ItemsFld, 'Item']
			],
			'customQuery' => ['join' => [
				['transactions', 'transactions.id = transactions_items.transaction_id', 'inner'],
				['items', 'items.id = transactions_items.item_id', 'inner']
			]],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			],
			'search_in' => ['transactions_items.qty', 'transactions_items.mvt_type', 'transactions_items.cost', 'transactions_items.price', 'transactions_items.discount', 'transactions.' . $TransactionsFld, 'items.' . $ItemsFld]
		];
		$init_override['customQuery']['select'] = $this->columns_arra_to_str($init_override['columns']);
		return parent::load_data_tables_results($init_override);
	}

	public function fetch_qty_from_items_and_transaction_items($id)
	{
		$query = [
			'select' => "transaction_items.mvt_type, items.qty",
			'join' => [
				['items', 'items.id = transaction_items.item_id', 'inner'],
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transaction_items.id", $id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function fetch_trans_item_id($transaction_id)
	{
		$query = [
			'select' => "transaction_items.id",
			'join' => [
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transaction_items.transaction_id", $transaction_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function load_all_trans_items($trans_id)
	{
		$query = [
			'select' => "transaction_items.*, items.description ,items.category, items.barcode, warehouses.warehouse, warehouses.shelf, transaction_item_sizes.size, transaction_item_sizes.qty as size_qty",
			'join' => [
				['items', 'items.id = transaction_items.item_id', 'inner'],
				['warehouses', 'warehouses.id = transaction_items.warehouse_id', 'inner'],
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'left']
			],
			'where' => [
				["transaction_items.transaction_id", $trans_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function load_all_trans_items_without_sizes($trans_id)
	{
		$query = [
			'select' => "transaction_items.*, items.description ,items.category, items.barcode, warehouses.warehouse, warehouses.shelf",
			'join' => [
				['items', 'items.id = transaction_items.item_id', 'inner'],
				['warehouses', 'warehouses.id = transaction_items.warehouse_id', 'inner'],
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transaction_items.transaction_id", $trans_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function load_all_trans_items_without_warehouses($trans_id)
	{
		$query = [
			'select' => "transaction_items.*, items.description ,items.category, items.barcode, transaction_item_sizes.size, transaction_item_sizes.qty as size_qty",
			'join' => [
				['items', 'items.id = transaction_items.item_id', 'inner'],
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'left']
			],
			'where' => [
				["transaction_items.transaction_id", $trans_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function fetch_trans_items_id_for_edit($trans_id)
	{
		$query = [
			'select' => "transaction_items.id",
			'join' => [
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transaction_items.transaction_id", $trans_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function load_all_trans_items_grouped_by_item_id($trans_id)
	{
		$query = [
			'select' => "MIN(transaction_items.item_id) as item_id, MIN(items.description) as description, MIN(items.barcode) as barcode, SUM(transaction_items.qty) as qty",
			'join' => [
				['items', 'items.id = transaction_items.item_id', 'inner'],
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transaction_items.transaction_id", $trans_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			],
			'group_by' => ["item_id"]
		];
		return $this->load_all($query);
	}

	public function fetch_trans_data_by_trans_item_id($trans_item_id)
	{
		$this->db->select('transactions.*');
		$this->db->from('transactions');
		$this->db->join('transaction_items', 'transactions.id = transaction_items.transaction_id');
		$this->db->where('transaction_items.id', $trans_item_id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_trans_item_id_by_item_and_id_trans_id($item_id, $trans_id)
	{
		$this->db->select('Max(transaction_items.id) as id');
		$this->db->from('transaction_items');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->where('transaction_items.transaction_id', $trans_id);
		$this->db->where('transaction_items.item_id', $item_id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_trans_item_data($id)
	{
		$this->db->select('transaction_items.*, transactions.currency_rate, transactions.currency_id, transactions.trans_type');
		$this->db->from('transaction_items');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->where('transaction_items.id', $id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_all_trans_items_ids($trans_id)
	{
		$query = [
			'select' => "transaction_items.id",
			'join' => [
				['items', 'items.id = transaction_items.item_id', 'inner'],
				['warehouses', 'warehouses.id = transaction_items.warehouse_id', 'inner'],
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transaction_items.transaction_id", $trans_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function load_all_trans_items_ids_without_warehouse($trans_id)
	{
		$query = [
			'select' => "transaction_items.id",
			'join' => [
				['items', 'items.id = transaction_items.item_id', 'inner'],
				['transactions', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transaction_items.transaction_id", $trans_id],
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load_all($query);
	}

	public function save_transaction_item_sizes($trans_item_size)
	{
		$data = array(
			'transaction_item_id' => $trans_item_size["id"],
			'size' => $trans_item_size["size"],
			'qty' => $trans_item_size["qty"]
		);
		$this->db->insert('transaction_item_sizes', $data);
	}

	public function load_trans_item_sizes_by_trans_item_id($id)
	{
		$this->db->select('transaction_item_sizes.*');
		$this->db->from('transaction_item_sizes');
		$this->db->join('transaction_items', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->where('transaction_item_sizes.transaction_item_id', $id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function fetch_item_sizes_in_specific_warehouse_shelf($item_id, $warehouse, $shelf)
	{
		$this->db->select('transaction_item_sizes.size');
		$this->db->from('transaction_item_sizes');
		$this->db->join('transaction_items', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->join('warehouses', 'warehouses.id = transaction_items.warehouse_id', 'inner');
		$this->db->where('transaction_items.item_id', $item_id);
		$this->db->where('warehouses.warehouse', $warehouse);
		$this->db->where('warehouses.shelf', $shelf);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$this->db->having('SUM(transaction_item_sizes.qty * transaction_items.mvt_type) >', 0);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function fetch_item_sizes_by_warehouse_id($item_id, $warehouse_id)
	{
		$this->db->select('transaction_item_sizes.size');
		$this->db->from('transaction_item_sizes');
		$this->db->join('transaction_items', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->join('warehouses', 'warehouses.id = transaction_items.warehouse_id', 'inner');
		$this->db->where('transaction_items.item_id', $item_id);
		$this->db->where('warehouses.id', $warehouse_id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function fetch_trans_item_selected_size($trans_item_id)
	{
		$this->db->select('transaction_item_sizes.size');
		$this->db->from('transaction_item_sizes');
		$this->db->join('transaction_items', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->join('warehouses', 'warehouses.id = transaction_items.warehouse_id', 'inner');
		$this->db->where('transaction_items.id', $trans_item_id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_trans_item_selected_size_without_warehouse($trans_item_id)
	{
		$this->db->select('transaction_item_sizes.size');
		$this->db->from('transaction_item_sizes');
		$this->db->join('transaction_items', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->where('transaction_items.id', $trans_item_id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function add_adjust_trans_items($trans_id, $item_id, $warehouse_id, $mvt_type, $qty, $size)
	{
		$this->load->model('Transaction_item');
		$this->Transaction_item->set_field('transaction_id', $trans_id);
		$this->Transaction_item->set_field('item_id', $item_id);
		$this->Transaction_item->set_field('warehouse_id', $warehouse_id);
		$this->Transaction_item->set_field('mvt_type', $mvt_type);
		$this->Transaction_item->set_field('qty', $qty);
		$this->Transaction_item->set_field('cost', 0);
		$this->Transaction_item->set_field('net_cost', 0);
		$this->Transaction_item->set_field('price', 0);
		$this->Transaction_item->set_field('discount', 0);
		$saved = $this->Transaction_item->insert();
		if ($saved) {
			$data = array(
				'transaction_item_id' => $this->Transaction_item->get_field("id"),
				'size' => $size,
				'qty' => $qty
			);
			$this->db->insert('transaction_item_sizes', $data);
		}
	}
}
