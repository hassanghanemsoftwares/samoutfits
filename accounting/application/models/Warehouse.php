<?php

defined('BASEPATH') or die('No direct script access allowed');

class Warehouse extends MY_Model
{

    protected $modelName = 'Warehouse';
    protected $_table = 'warehouses';
    protected $_listFieldName = 'warehouse';
    protected $_fieldsNames = ['id', 'warehouse', 'shelf'];
    protected $allowedNulls = [];
    protected $_dateFields = [];

    public function __construct()
    {
        parent::__construct();
        $this->validate = [
            'warehouse' => [
                'required' => [
                    'required' => true, 'allowEmpty' => false, 'rule' => ['maxLength', 255],
                    'message' => sprintf($this->lang->line('required_rule'), 'Name', 255)
                ],
            ],
            'shelf' => [
                'required' => [
                    'required' => true, 'allowEmpty' => false, 'rule' => ['maxLength', 255],
                    'message' => sprintf($this->lang->line('required_rule'), 'Name', 255)
                ],
            ],
        ];
    }

    public function paginate_warehouses()
    {
        $query = ['select' => "warehouses.*", 'order_by' => [['id', 'ASC']]];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_warehouses_data_tables()
    {
        $dt = [
            'columns' => ['warehouses.warehouse', 'warehouses.shelf', 'warehouses.id'],
            'query' => [],
            'search_in' => ['warehouses.warehouse', 'warehouses.shelf']
        ];
        return parent::load_datatables_pagedata($dt);
    }

    public function load_warehouses_list()
    {
        $this->db->select('warehouse');
        $this->db->from('warehouses');
        $this->db->group_by('warehouse');
        $warehouses = $this->db->get()->result_array();
        $query = [];
        foreach ($warehouses as $w) {
            array_push($query, $w["warehouse"]);
        }
        return $query;
    }

    public function fetch_all_warehouse_shelfs($warehouse)
    {
        $this->db->select('shelf');
        $this->db->from('warehouses');
        $this->db->where('warehouses.warehouse', $warehouse);
        $shelfs = $this->db->get()->result_array();
        $query = [];
        foreach ($shelfs as $s) {
            array_push($query, $s["shelf"]);
        }
        return $query;
    }

    public function get_warehouse_id_by_warehouse_and_shelf($warehouse, $shelf)
    {
        $this->db->select('id');
        $this->db->from('warehouses');
        $this->db->where('warehouses.warehouse', $warehouse);
        $this->db->where('warehouses.shelf', $shelf);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function fetch_warehouse_and_shelf($warehouse_id)
    {
        $this->db->select('warehouse, shelf');
        $this->db->from('warehouses');
        $this->db->where('warehouses.id', $warehouse_id);
        $this->db->group_by('warehouse');
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_warehouse_ids_of_item($item_id)
    {
        $this->db->select('warehouse_id');
        $this->db->from('transaction_items');
        $this->db->where('transaction_items.item_id', $item_id);
        $this->db->where('transaction_items.warehouse_id !=', '0');
        $this->db->group_by('warehouse_id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function is_warhouse_id_active_in_trans_items($id)
    {
        $this->db->select('warehouse_id');
        $this->db->from('transaction_items');
        $this->db->where('transaction_items.warehouse_id', $id);
        $this->db->group_by('warehouse_id');
        $query = $this->db->get()->result_array();
        if ($query === []) {
            return false;
        } else {
            return true;
        }
    }

    public function  fetch_all_warehouse_shelfs_of_item($warehouse, $item_id)
    {
        $query = [
            'select' => [
                ["warehouses.shelf"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
            ],
            'where' => [
                ["transaction_items.item_id", $item_id],
                ["warehouses.warehouse", $warehouse]
            ],
            'group_by' => ["warehouses.shelf"]
        ];
        return $this->load_all($query);
    }

    public function warehouses_count()
    {
        $this->db->select('count(*) as count');
        $this->db->from('warehouses');
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function is_warehouse_shelf_exists($warehouse, $shelf)
    {
        $this->db->select('count(*) as count');
        $this->db->from('warehouses');
        $this->db->where('warehouse', $warehouse);
        $this->db->where('shelf', $shelf);
        $query = $this->db->get()->row_array();
        if ($query["count"] === "0") {
            return false;
        } else {
            return true;
        }
    }

    public function fetch_warehouse_id_by_item_id($item_id)
    {
        $this->db->select('warehouse_id');
        $this->db->from('transaction_items');
        $this->db->where('transaction_items.item_id', $item_id);
        $this->db->where('transaction_items.warehouse_id !=', 0);
        $this->db->group_by('warehouse_id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function load_item_all_warehouses_and_shelfs($warehouse_id, $item_id)
    {
        $query = [
            'select' => [
                ["warehouses.warehouse, warehouses.shelf, SUM(transaction_items.qty * transaction_items.mvt_type) as qty"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner']
            ],
            'where' => [
                ["transaction_items.warehouse_id", $warehouse_id],
                ["transaction_items.item_id", $item_id],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
            ],
        ];
        return $this->load($query);
    }

    public function check_if_item_exists_in_any_warehouse($item_id)
    {
        $this->db->select('count(*) as count');
        $this->db->from('transaction_items');
        $this->db->where('transaction_items.item_id', $item_id);
        $this->db->where('transaction_items.warehouse_id !=', 0);
        $this->db->group_by('warehouse_id');
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function fetch_all__items_by_ware($ware_id)
    {
        $this->db->select('*');
        $this->db->from('transaction_items');
        $this->db->where('transaction_items.warehouse_id', $ware_id);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function fetch_items_by_warehouse_only($warehouse_name)
    {
        $this->db->select('items.description, items.barcode, SUM(transaction_items.qty * transaction_items.mvt_type) as qty,warehouses.shelf');
        $this->db->from('transaction_items');
        $this->db->join('warehouses', 'warehouses.id = transaction_items.warehouse_id');
        $this->db->join('items', 'items.id = transaction_items.item_id');
        $this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
        $this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
        $this->db->where('warehouses.warehouse', $warehouse_name);
        $this->db->group_by('warehouses.shelf,items.id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function fetch_items_by_warehouse_and_shelf($warehouse_name, $shelf_name)
    {
        $this->db->select('items.description, items.barcode, SUM(transaction_items.qty * transaction_items.mvt_type) as qty, MIN(warehouses.shelf) as shelf');
        $this->db->from('transaction_items');
        $this->db->join('warehouses', 'warehouses.id = transaction_items.warehouse_id');
        $this->db->join('items', 'items.id = transaction_items.item_id');
        $this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
        $this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
        $this->db->where('warehouses.warehouse', $warehouse_name);
        $this->db->where('warehouses.shelf', $shelf_name);
        $this->db->group_by('items.id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function fetch_items_by_warehouse_only_group_by($warehouse_name)
    {
        $this->db->select('MIN(items.description) AS description, MIN(items.barcode) AS barcode, SUM(transaction_items.qty * transaction_items.mvt_type) as qty');
        $this->db->from('transaction_items');
        $this->db->join('warehouses', 'warehouses.id = transaction_items.warehouse_id');
        $this->db->join('items', 'items.id = transaction_items.item_id');
        $this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
        $this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
        $this->db->where('warehouses.warehouse', $warehouse_name);
        $this->db->group_by('items.id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function fetch_items__by_warehouse_and_shelf_group_by($warehouse_name, $shelf_name)
    {
        $this->db->select('MIN(items.description) AS description, MIN(items.barcode) AS barcode, SUM(transaction_items.qty * transaction_items.mvt_type) as qty');
        $this->db->from('transaction_items');
        $this->db->join('warehouses', 'warehouses.id = transaction_items.warehouse_id');
        $this->db->join('items', 'items.id = transaction_items.item_id');
        $this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
        $this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
        $this->db->where('warehouses.warehouse', $warehouse_name);
        $this->db->where('warehouses.shelf', $shelf_name);
        $this->db->group_by('items.id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function fetch_warehouse_shelf($warehouse_id)
    {
        $query = $this->db->select("warehouse, shelf")
            ->select("CONCAT_WS(' - ', warehouse, shelf) AS w_s")
            ->from($this->_table)
            ->where('id', $warehouse_id)
            ->get();
        if (false !== $query && $query->num_rows() > 0) {
            return $query->row_array();
        }
        return [];
    }

    public function fetch_all_warehouse_shelf()
    {
        $query = $this->db->select("id")
            ->select("CONCAT_WS(' - ', warehouse, shelf) AS w_s")
            ->from($this->_table)
            ->get();
        if (false !== $query && $query->num_rows() > 0) {
            return $query->result_array();
        }
        return [];
    }

    public function load_warehouses_list_for_OP($item_id)
    {
        $this->db->select('warehouses.id');
        $this->db->from('warehouses');
        $this->db->join('transaction_items', 'transaction_items.warehouse_id = warehouses.id');
        $this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
        $this->db->where('transaction_items.item_id =', $item_id);
        $this->db->where('transactions.trans_type =', "OI");
        $this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
        $warehouses = $this->db->get()->result_array();
        $query = [];
        foreach ($warehouses as $w) {
            array_push($query, $w["id"]);
        }
        return $query;
    }

    public function load_warehouses_ids_list()
    {
        $this->db->select('id');
        $this->db->from('warehouses');
        $warehouses = $this->db->get()->result_array();
        $query = [];
        foreach ($warehouses as $w) {
            array_push($query, $w["id"]);
        }
        return $query;
    }

    public function fetch_item_warehouse_shelfs_for_OP($warehouse, $item_id)
    {

        $this->db->select('warehouses.shelf');
        $this->db->from('warehouses');
        $this->db->join('transaction_items', 'transaction_items.warehouse_id = warehouses.id');
        $this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
        $this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
        $this->db->where('transaction_items.item_id =', $item_id);
        $this->db->where('transactions.trans_type =', "OI");
        $this->db->where('warehouses.warehouse =', $warehouse);
        // $this->db->group_by('warehouse');
        $warehouses = $this->db->get()->result_array();
        $query = [];
        foreach ($warehouses as $w) {
            array_push($query, $w["shelf"]);
        }
        return $query;
    }

    public function fetch_item_id_by_warehouse_shelf($warehouse_name, $shelf_name)
    {
        $this->db->select('warehouses.id');
        $this->db->from('warehouses');
        $this->db->where('warehouses.warehouse', $warehouse_name);
        $this->db->where('warehouses.shelf', $shelf_name);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function paginate_inventory()
    {
        $query = [
            'select' => [
                "items.barcode, items.description, items.category, transaction_item_sizes.size,
                    warehouses.warehouse, warehouses.shelf,
                    SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, MIN(items.price_ttc) as price_ttc, items.id as item_id"

            ],
            'join' => [
                ['transaction_items', 'warehouses.id = transaction_items.warehouse_id', 'inner'],
                ['items', 'items.id = transaction_items.item_id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner']
            ],
            'where' => [
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
            ],
            'group_by' => ['warehouses.warehouse, warehouses.shelf, items.id, items.barcode, items.description, items.category, transaction_item_sizes.size'],
            'having' => [
                ['SUM(transaction_item_sizes.qty * transaction_items.mvt_type) !=', 0],
            ],
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_inventory_data_tables()
    {
        $dt = [
            'columns' => [
                'items.barcode', 'items.description', 'items.category', 'transaction_item_sizes.size',
                'warehouses.warehouse', 'warehouses.shelf',
                ['SUM(transaction_item_sizes.qty * transaction_items.mvt_type)', 'total_qty'], ['MIN(items.price_ttc)', 'price_ttc'], ['items.id', 'item_id']
            ],
            'query' => [
                'join' => [
                    ['transaction_items', 'warehouses.id = transaction_items.warehouse_id', 'inner'],
                    ['items', 'items.id = transaction_items.item_id', 'inner'],
                    ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                    ['transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner']
                ],
                'where' => [
                    ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
                ],
                'group_by' => ['warehouses.warehouse, warehouses.shelf, items.id, items.barcode, items.description, items.category, transaction_item_sizes.size'],
                'having' => [
                    ["SUM(transaction_item_sizes.qty * transaction_items.mvt_type) !=", 0],
                ],
            ],
            'search_in' => ['items.barcode', 'items.description', 'warehouses.warehouse', 'warehouses.shelf', 'transaction_item_sizes.size']
        ];
        $filter_category = $this->input->get(['category'], true);
		if ($filter_category) {
			if ($filter_category['category']) {
				$dt['query']['where'][] = ['items.category', $filter_category['category']];
			}
		}
        return parent::load_datatables_pagedata($dt);
    }

    public function fetch_qty_of_item_size_in_specific_warehouse_shelf($item_id, $warehouse, $shelf, $size)
    {
        $query = [
            'select' => [
                "SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as qty,"
            ],
            'join' => [
                ['transaction_items', 'warehouses.id = transaction_items.warehouse_id', 'inner'],
                ['items', 'items.id = transaction_items.item_id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner']
            ],
            'where' => [
                ['transaction_items.item_id', $item_id],
                ['warehouses.warehouse', $warehouse],
                ['warehouses.shelf', $shelf],
                ['transaction_item_sizes.size', $size],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
            ],
            'group_by' => ['warehouses.warehouse, warehouses.shelf, items.barcode, transaction_item_sizes.size'],
        ];
        return $this->load($query);
    }

    public function load_item_sizes_and_qty_by_warehouse_id($warehouse_id, $item_id)
    {
        $query = [
            'select' => [
                ["transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as qty, warehouses.warehouse, warehouses.shelf"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner']
            ],
            'where' => [
                ["transaction_items.warehouse_id", $warehouse_id],
                ["transaction_items.item_id", $item_id],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
            ],
            'group_by' => ['transaction_item_sizes.size'],
            'having' => [
                ['SUM(transaction_item_sizes.qty * transaction_items.mvt_type) >', 0],
            ],
        ];
        return $this->load_all($query);
    }

    public function fetch_item_max_qty_by_warehouse_id_and_size($warehouse_id, $item_id, $size)
    {
        $query = [
            'select' => [
                ["transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as qty"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner']
            ],
            'where' => [
                ["transaction_items.warehouse_id", $warehouse_id],
                ["transaction_items.item_id", $item_id],
                ["transaction_item_sizes.size", $size],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
            ],
            'group_by' => ['transaction_item_sizes.size'],
            'having' => [
                ['SUM(transaction_item_sizes.qty * transaction_items.mvt_type) >', 0],
            ],
        ];
        return $this->load($query);
    }

    public function load_item_inventory($item_id)
    {
        $query = [
            'select' => [
                ["transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as qty, warehouses.warehouse, warehouses.shelf"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner']
            ],
            'where' => [
                ["transaction_items.item_id", $item_id],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
            ],
            'group_by' => ['warehouse, shelf, transaction_item_sizes.size'],
            'having' => [
                ['SUM(transaction_item_sizes.qty * transaction_items.mvt_type) >', 0],
            ],
        ];
        return $this->load_all($query);
    }

    public function fetch_item_sizes_in_specific_warehouse_shelf($item_id, $warehouse, $shelf)
    {
        $query = [
            'select' => [
                ["transaction_item_sizes.size"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner']
            ],
            'where' => [
                ["transaction_items.item_id", $item_id],
                ['warehouses.warehouse', $warehouse],
                ['warehouses.shelf', $shelf],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
            ],
            'group_by' => ['warehouse, shelf, transaction_item_sizes.size'],
            'having' => [
                ['SUM(transaction_item_sizes.qty * transaction_items.mvt_type) >', 0],
            ],
        ];
        return $this->load_all($query);
    }

    public function calculate_item_max_qty_by_warehouse_id_and_size_for_validation_in_edit_sale($trans_id, $item_id, $warehouse, $shelf, $size)
    {
        $query = [
            'select' => [
                "SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as qty,"

            ],
            'join' => [
                ['transaction_items', 'warehouses.id = transaction_items.warehouse_id', 'inner'],
                ['items', 'items.id = transaction_items.item_id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner']
            ],
            'where' => [
                ['transaction_items.item_id', $item_id],
                ["transactions.id !=", $trans_id],
                ['warehouses.warehouse', $warehouse],
                ['warehouses.shelf', $shelf],
                ['transaction_item_sizes.size', $size],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
            ],
            'group_by' => ['warehouses.warehouse, warehouses.shelf, items.barcode, transaction_item_sizes.size'],
        ];
        return $this->load($query);
    }

    public function fetch_item_sizes_in_specific_warehouse_shelf_in_op($item_id, $warehouse, $shelf)
    {
        $query = [
            'select' => [
                ["transaction_item_sizes.size, SUM(transaction_item_sizes.qty) as tot_qty"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner'],
                ['transactions AS pu', 'pu.relation_id = transactions.id', 'left']
            ],
            'where' => [
                ['transactions.trans_type', 'op'],
                ['pu.relation_id is NULL'],
                ["transaction_items.item_id", $item_id],
                ['warehouses.warehouse', $warehouse],
                ['warehouses.shelf', $shelf],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
            ],
            'group_by' => ['warehouse, shelf, transaction_item_sizes.size'],
        ];
        return $this->load_all($query);
    }

    public function fetch_warehouse_id_by_warehouse_shelf($warehouse_name, $shelf_name)
    {
        $this->db->select('warehouses.id');
        $this->db->from('warehouses');
        $this->db->where('warehouses.warehouse', $warehouse_name);
        $this->db->where('warehouses.shelf', $shelf_name);
        $query = $this->db->get()->row_array();
        return $query;
    }

    public function get_warehouse_ids_of_item_in_order_purchase($item_id)
    {
        $this->db->select('warehouse_id');
        $this->db->from('transaction_items');
        $this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
        $this->db->join('transactions AS pu', 'pu.relation_id = transactions.id', 'left');
        $this->db->where('transactions.trans_type', 'op');
        $this->db->where("pu.relation_id is NULL");
        $this->db->where('transaction_items.item_id', $item_id);
        $this->db->where('transaction_items.warehouse_id !=', '0');
        $this->db->where("transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id());
        $this->db->group_by('warehouse_id');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function fetch_item_size_qty_in_specific_warehouse_shelf_in_op($item_id, $size, $warehouse, $shelf)
    {
        $query = [
            'select' => [
                ["transaction_item_sizes.size, SUM(transaction_item_sizes.qty) as tot_qty"]
            ],
            'join' => [
                ['transaction_items', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
                ['transactions', 'transaction_items.transaction_id = transactions.id', 'inner'],
                ['transaction_item_sizes', 'transaction_item_sizes.transaction_item_id = transaction_items.id', 'inner'],
                ['transactions AS pu', 'pu.relation_id = transactions.id', 'left']
            ],
            'where' => [
                ['transactions.trans_type', 'op'],
                ['pu.relation_id is NULL'],
                ["transaction_items.item_id", $item_id],
                ["transaction_item_sizes.size", $size],
                ['warehouses.warehouse', $warehouse],
                ['warehouses.shelf', $shelf],
                ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
            ],
            'group_by' => ['warehouse, shelf, transaction_item_sizes.size'],
        ];
        return $this->load($query);
    }
}
