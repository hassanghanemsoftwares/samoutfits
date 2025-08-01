<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Transaction_item $Transaction_item
 * @property Item $Item
 */
class Transaction extends MY_Model
{

	const PurchaseTransType = 'PU';
	const SaleTransType = 'SA';
	const ReturnPurchaseTransType = 'RP';
	const ReturnSaleTransType = 'RS';
	const QuatationTransType = 'QU';
	const OpeningItemTransType = 'OI';
	const DeliveryNoteTransType = 'DN';
	const OrderTransType = 'OS';
	const MissingProductsTransType = 'MP';
	const TransfersTransType = 'TR';
	const OrderPurchaseTransType = 'OP';
	const ExchangeTransType = 'EX';
	const AdjustTransType = 'AD';

	protected $modelName = 'Transaction';
	protected $_table = 'transactions';
	protected $_listFieldName = 'auto_no';
	protected $_fieldsNames = ['id', 'fiscal_year_id', 'trans_type', 'auto_no', 'trans_date', 'value_date', 'account_id', 'account2_id', 'currency_id', 'currency_rate', 'discount', 'user_id', 'driver_id', 'employee_id', 'status', 'delivered', 'pickup', 'description', 'relation_id', 'delivery_charge', 'status2', 'source', 'delivery_note', 'payment_method', 'payment_method_gateway', 'payment_method_gateway_status',  'op_nb', 'hide', 'exchange', 'try_on'];
	protected $_dateFields = ['trans_date', 'value_date'];
	protected $allowedNulls = ['value_date', 'discount', 'exchange', 'try_on', 'payment_method_gateway', 'payment_method_gateway_status'];

	public function __construct()
	{
		parent::__construct();
		$this->validate = [
			'fiscal_year_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('fiscal_year'))
			],
			'trans_type' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => ['maxLength', 2],
				'message' => sprintf($this->lang->line('required__max_length_rule'), $this->lang->line('trans_type'), 2)
			],
			'auto_no' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('auto_no'))
			],
			'trans_date' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => ['date', 'dmy'],
				'message' => sprintf($this->lang->line('required_date_rule'), $this->lang->line('trans_date'))
			],
			'value_date' => [
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'rule' => ['date', 'dmy'],
				'message' => sprintf($this->lang->line('date_rule'), $this->lang->line('value_date'))
			],
			'account_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('account'))
			],
			'account2_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('account2'))
			],
			'currency_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('currency'))
			],
			'currency_rate' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('currency_rate'))
			],
			'discount' => [
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('is_numeric_rule'), $this->lang->line('discount'))
			],
			'user_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('user'))
			]
		];
	}

	public function get_transaction_types_list()
	{
		return [
			self::PurchaseTransType => 'Purchase',
			self::ReturnPurchaseTransType => 'Return Purchase',
			self::SaleTransType => 'Sale',
			self::ReturnSaleTransType => 'Return Sale',
			self::QuatationTransType => 'Quatation',
			self::OpeningItemTransType => 'Opening Items',
			self::DeliveryNoteTransType => 'Delivery Note',
			self::OrderTransType => 'Order',
			self::MissingProductsTransType => 'Missing Products',
			self::TransfersTransType => 'Transfers',
			self::OrderPurchaseTransType => 'Order Purchase',
			self::ExchangeTransType => 'Exchange Purchase',
			self::AdjustTransType => 'Adjust'
		];
	}
	public function paginate_order_purchases()
	{
		return $this->paginate_transactions(self::OrderPurchaseTransType, true);
	}
	public function paginate_orders()
	{
		return $this->paginate_transactions(self::OrderTransType, false);
	}
	public function paginate_delivery_notes()
	{
		return $this->paginate_transactions(self::DeliveryNoteTransType, false);
	}
	public function paginate_quotations()
	{
		return $this->paginate_transactions(self::QuatationTransType, false);
	}
	public function paginate_purchases()
	{
		return $this->paginate_transactions(self::PurchaseTransType, true);
	}
	public function paginate_sales()
	{
		return $this->paginate_transactions(self::SaleTransType, false);
	}
	public function paginate_return_purchases()
	{
		return $this->paginate_transactions(self::ReturnPurchaseTransType, false);
	}
	public function paginate_return_sales()
	{
		return $this->paginate_transactions(self::ReturnSaleTransType, false);
	}
	private function paginate_transactions($transType, $use_cost)
	{
		if ($use_cost === true) {
			$total = 'ROUND(SUM(( ti.qty * ((ti.price * (1 - ti.discount/100)) + ti.cost))),2)';
		} else {
			$total = 'ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))) + transactions.delivery_charge,2)';
		}
		$query = [
			'select' => [
				["transactions.auto_no, transactions.trans_date, transactions.value_date"],
				["account1.account_name AS account1, account2.account_name AS account2"],
				["currencies.currency_code, transactions.currency_rate, transactions.discount, $total AS total"],
				["transactions.status"],
				["transactions.id,transactions.payment_method_gateway, COALESCE(transactions.payment_method_gateway_status, '-') as payment_method_gateway_status"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.trans_type", $transType],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['transactions.id'],
		];
		if ($transType == self::OrderPurchaseTransType) {
			$query['order_by'] =  [['status', 'ASC']];
		} else {
			$query['order_by'] =  [['id', 'DESC']];
		}
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_transactions_data_tables($transType, $use_cost)
	{
		if ($use_cost === true) {
			$total = 'ROUND(SUM(( ti.qty * ((ti.price * (1 - ti.discount/100))+ti.cost))) ,2)';
		} else {
			$total = 'ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))) + transactions.delivery_charge,2)';
		}
		$dt = [
			'columns' => [
				'transactions.auto_no',
				'transactions.trans_date',
				'transactions.value_date',
				['account1.account_name', 'account1'],
				['account2.account_name', 'account2'],
				'currencies.currency_code',
				'transactions.currency_rate',
				'transactions.discount',
				[$total, 'total'],
				'transactions.payment_method_gateway',
				['COALESCE(transactions.payment_method_gateway_status, "-")', 'payment_method_gateway_status'],

				'transactions.status',
				'transactions.id'


			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left']
				],
				'where' => [
					["{$this->_table}.trans_type", $transType],
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'group_by' => ['transactions.id'],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['transactions.auto_no', 'transactions.currency_rate', 'transactions.discount', 'transactions.account_id', 'transactions.account2_id', 'account1.account_name', 'account2.account_name']
		];
		return parent::load_datatables_pagedata($dt);
	}

	public function save_transaction_items($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', $this->Item->fetch_item_cost($item["item_id"])["0"]["cost"]);
			$this->Transaction_item->set_field('net_cost', "0");
			$this->Transaction_item->insert();
		}
	}

	public function save_purchases_items($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('net_cost', $item["price"] + $item["cost"]);
			$this->Transaction_item->insert();
		}
	}

	public function update_cost_and_price($items, $currency_rate, $currency_code)
	{
		$this->load->model('Item');
		foreach ($items as $item) {
			$i = $this->Item->fetch_item($item["item_id"])["0"];
			$cost = ($item["price"] + $item["cost"]) * $currency_rate;
			$pcost = $item["price"] + $item["cost"];
			if ($cost != "0") {
				$this->Item->reset_fields();
				$this->Item->set_fields($i);
				$this->Item->set_field('cost', $cost);
				$this->Item->set_field('purchase_cost', $pcost . $currency_code);
				if ($i["profit"] > 0) {
					$this->Item->set_field('price', $cost * (1 + ($i["profit"] / 100)));
					$this->Item->set_field('price_ttc', ($cost * (1 + ($i["profit"] / 100))) * (1 + ($i["TVA"] / 100)));
				}
			}
			$this->Item->update();
		}
	}

	public function set_next_auto_number($transType)
	{
		$query = $this->db->select_max('auto_no', 'nextAutoNo')
			->where('trans_type', $transType)
			->where("fiscal_year_id", $this->violet_auth->get_fiscal_year_id())
			->get($this->_table);
		$no = ($query->num_rows() > 0 ? _gnv($query->row()->nextAutoNo) : 0);
		return 1 + $no;
	}

	public function fetch_transaction_id_by_autono($auto_no, $transType)
	{
		$query = [
			'select' => "transactions.id",
			'where' => [
				["transactions.auto_no", $auto_no],
				["{$this->_table}.trans_type", $transType],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load_all($query);
	}

	public function fetch_transaction_id_by_autono_for_bulk_receipts($auto_no)
	{
		$query = [
			'select' => "transactions.id",
			'where' => [
				["transactions.auto_no", $auto_no],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'where_in' => [
				["{$this->_table}.trans_type", ["SA", "EX"]]
			],
		];
		return $this->load_all($query);
	}


	public function save_transaction_in_journals($trans, $trans_id, $total, $journal_type)
	{
		$this->load->model('Journal');
		$this->Journal->set_field('auto_no', $trans['auto_no']);
		$this->Journal->set_field('transaction_id', $trans_id);
		$this->Journal->set_field('account_id', $trans['account_id']);
		$this->Journal->set_field('account2_id', $trans['account2_id']);
		$this->Journal->set_field('journal_date', $trans['trans_date']);
		$this->Journal->set_field('value_date', $trans['value_date']);
		$this->Journal->set_field('currency_id', $trans['currency_id']);
		$this->Journal->set_field('currency_rate', $trans['currency_rate']);
		$this->Journal->set_field('description', $journal_type . " NO " . $trans['auto_no']);
		$this->Journal->set_field('amount', $total);
		$this->Journal->set_field('journal_type', $journal_type);
		$this->Journal->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$this->Journal->set_field('user_id', $this->violet_auth->get_user_id());
		$this->Journal->insert();
	}

	public function save_in_journal_accounts($journal_id, $account_id, $auto_no, $total, $mvt_Type, $name, $trans_type)
	{
		$this->load->model('Journal_account');
		$this->Journal_account->reset_fields();
		$this->Journal_account->set_field('journal_id', $journal_id);
		$this->Journal_account->set_field('account_id', $account_id);
		$this->Journal_account->set_field('description', $trans_type . " NO " . $auto_no . " - " . $name);
		$this->Journal_account->set_field('mvt_type', $mvt_Type);
		$this->Journal_account->set_field('amount', $total);
		$this->Journal_account->insert();
	}

	public function fetch_journal_id_by_transaction_id($transaction_id, $transType)
	{
		$query = [
			'select' => [
				["journals.id"]
			],
			'join' => [
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
			],
			'where' => [
				["journals.transaction_id", $transaction_id],
				["{$this->_table}.trans_type", $transType],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],

		];
		return $this->load_all($query);
	}

	public function calculate_purchase_total($values, $total_discount)
	{
		$total = 0;
		foreach ($values as $k => $v) {
			$p = $c = $q = $d = 0;
			$p = $v["price"];
			$c = $v["cost"];
			$q = $v["qty"];
			$d = $v["discount"];
			$tot_item = (floatval($p) * (1 - (floatval($d) / 100)) + floatval($c)) * floatval($q);
			$total = floatval($total) + floatval($tot_item);
		}

		return floatval($total) - floatval($total_discount);
	}

	public function calculate_transaction_total($values, $total_discount)
	{
		$total = 0;
		foreach ($values as $v) {
			$p = $v["price"];
			$q = $v["qty"];
			$d = $v["discount"];
			$tot_item = floatval($p) * floatval($q) * (1 - (floatval($d) / 100));
			$total = floatval($total) + floatval($tot_item);
		}
		return floatval($total) - floatval($total_discount);
	}

	public function update_qty($items, $mvt_Type)
	{
		$this->load->model('Item');
		foreach ($items as $item) {
			$item_qty = $this->Item->fetch_qty_by_item_id($item["item_id"]);
			// $item_open_qty = $this->Item->fetch_open_qty_by_item_id($item["item_id"]);
			$new_qty = floatval($item_qty["qty"]) + ($mvt_Type * floatval($item["qty"]));
			$this->Item->update_item_qty_by_item_id($item["item_id"], $new_qty);
		}
	}

	public function update_qty_on_edit($items, $mvt_Type)
	{
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$trans_items = $this->Transaction_item->load_all_trans_items($this->Transaction->get_field('id'));
		foreach ($trans_items as $old) {
			foreach ($items as $new) {
				if ($old["item_id"] === $new["item_id"]) {
					if ($old["qty"] !== $new["qty"]) {
						$item_qty = $this->Item->fetch_qty_by_item_id($new["item_id"]);
						$edited_qty = floatval($item_qty["qty"]) - ($mvt_Type * floatval($old["qty"])) + ($mvt_Type * floatval($new["qty"]));
						$this->Item->update_item_qty_by_item_id($new["item_id"], $edited_qty);
					}
				}
			}
		}
	}

	public function update_qty_on_delete($id, $mvt_Type)
	{
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$trans_items = $this->Transaction_item->load_all_trans_items_without_sizes($id);
		foreach ($trans_items as $t) {
			$item_qty = $this->Item->fetch_qty_by_item_id($t["item_id"]);
			$new_qty = floatval($item_qty["qty"]) - ($mvt_Type * floatval($t["qty"]));
			$this->Item->update_item_qty_by_item_id($t["item_id"], $new_qty);
		}
	}

	public function fetch_trans_date($id)
	{
		$query = [
			'select' => "transactions.trans_date",
			'where' => [
				["transactions.id", $id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}

	public function update_cost_on_delete($item_id, $net_cost)
	{
		$this->load->model('Item');
		$this->Item->set_fields($this->Item->fetch_item($item_id));
		$this->Item->set_field('cost', $net_cost);
		$this->Item->update();
	}

	public function fetch_last_purchase_or_transfer()
	{
		// $this->db->select('transactions.*');
		$this->db->select_max('transactions.trans_date');
		$this->db->select_max('transactions.id');
		$this->db->from('transactions');
		$this->db->where('transactions.trans_type', "PU");
		$this->db->or_where('transactions.trans_type', "TR");
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}


	public function fetch_array_cost_of_each_item_of_last_transaction($trans_items)
	{
		$array_cost_of_itemid = array();
		$last_pu = $this->fetch_last_purchase_or_transfer();
		foreach ($trans_items as $t => $val) {
			$this->db->select('transaction_items.net_cost , items.id as item_id, items.open_cost, items.profit, items.TVA, transaction_items.id, transactions.currency_rate, transactions.currency_id');
			$this->db->from('transaction_items');
			$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
			$this->db->join('items', 'items.id = transaction_items.item_id');
			$this->db->where('transactions.trans_date', $last_pu["trans_date"]);
			$this->db->where('transactions.id', $last_pu["id"]);
			$this->db->where('transactions.trans_type', "PU");
			$this->db->where('transaction_items.item_id', $val["item_id"]);
			$this->db->where('items.id', $val["item_id"]);
			$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$query = $this->db->get()->result_array();
			if ($query == false)
				$arr1 = array($val["item_id"] => 0);
			else
				$arr1 = array($val["item_id"] => $query[0]);
			$array_cost_of_itemid += $arr1;
		}
		return $array_cost_of_itemid;
	}

	public function load_trans_data_by_trans_id($trans_id)
	{
		$query = [
			'select' => "transactions.*",
			'where' => [
				["transactions.id", $trans_id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}

	public function fetch_warehouse_id_by_trans_id($trans_id)
	{
		$query = [
			'select' => "transactions.warehouse_id",
			'where' => [
				["transactions.id", $trans_id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}

	public function save_opening_items_trans_items($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', 0);
			$this->Transaction_item->set_field('price', 0);
			$this->Transaction_item->set_field('discount', 0);
			$this->Transaction_item->set_field('net_cost', 0);
			$this->Transaction_item->insert();
		}
	}

	public function paginate_opening_items($transType)
	{
		$query = [
			'select' => [
				["transactions.auto_no, transactions.trans_date"],
				["MIN(i.description) AS description, MIN(i.barcode) AS barcode"],
				["SUM(ti.qty) AS total_qty"],
				["transactions.id"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['items AS i', 'i.id = ti.item_id', 'inner']
			],
			'where' => [
				["{$this->_table}.trans_type", $transType],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['transactions.id'],
			'order_by' => [['auto_no', 'ASC']]
		];


		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_opening_items_data_tables($transType)
	{
		$dt = [
			'columns' => [
				'transactions.auto_no',
				'transactions.trans_date',
				['MIN(i.description)', 'description'],
				['MIN(i.barcode)', 'barcode'],
				['SUM(ti.qty)', 'total_qty'],
				'transactions.id',
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['items AS i', 'i.id = ti.item_id', 'inner']
				],
				'where' => [
					["{$this->_table}.trans_type", $transType],
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'group_by' => ['transactions.id'],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['transactions.auto_no']
		];
		return parent::load_datatables_pagedata($dt);
	}

	public function get_array_of_qty_and_cost_of_each_item_in_trans($transItems)
	{
		$item_ids = [];
		foreach ($transItems as $t) {
			array_push($item_ids, $t["item_id"]);
		}
		$qty_cost_array = [];
		foreach (array_unique($item_ids) as $i) {
			$qty = $this->Item->fetch_open_qty_of_item($i)["open_qty"];
			foreach ($transItems as $t) {
				if ($i === $t["item_id"]) {
					$qty += $t["qty"];
				}
			}
			array_push($qty_cost_array, ["item_id" => $i, "qty" => $qty]);
		}
		return $qty_cost_array;
	}

	public function check_if_items_purchased($transItems)
	{
		$item_ids = [];
		foreach ($transItems as $t) {
			array_push($item_ids, $t["item_id"]);
		}
		$query = [];
		foreach (array_unique($item_ids) as $i) {
			$this->db->select('count(*) as count');
			$this->db->from('transactions');
			$this->db->join('transaction_items', 'transaction_items.transaction_id = transactions.id');
			$this->db->where('transaction_items.item_id', $i);
			$this->db->where('transactions.trans_type', "PU");
			$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$result = $this->db->get()->row_array();
			array_push($query, ["item_id" => $i, "count" => $result["count"]]);
		}
		return $query;
	}

	public function save_transaction_items_without_warehouse_id($items, $mvtType)
	{
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', 0);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', $this->Item->fetch_item_cost($item["item_id"])["0"]["cost"]);
			$this->Transaction_item->set_field('net_cost', "0");
			$this->Transaction_item->insert();
		}
	}

	public function fetch_MP_id()
	{
		$this->db->select('transactions.id');
		$this->db->from('transactions');
		$this->db->where('transactions.trans_type', "MP");
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_missing_products_data_tables() {}

	public function update_and_save_transaction_items_for_MP($missing_products, $MP_trans_items, $mvtType, $transaction_id)
	{
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		foreach ($missing_products as $mp) {
			$count = 0;
			foreach ($MP_trans_items as $mti) {
				if ($mp["item_id"] === $mti["item_id"]) {
					$count++;
					$qty = $mp["qty"] + $mti["qty"];
					$data = array(
						'qty' => $qty
					);
					$this->db->where('id', $mti["id"]);
					$this->db->update('transaction_items', $data);
					break;
				}
			}
			if ($count === 0) {
				$this->Transaction_item->reset_fields();
				$this->Transaction_item->set_fields($mp);
				$this->Transaction_item->set_field('transaction_id', $transaction_id);
				$this->Transaction_item->set_field('warehouse_id', 0);
				$this->Transaction_item->set_field('mvt_type', $mvtType);
				$this->Transaction_item->set_field('cost', $this->Item->fetch_item_cost($mp["item_id"])["0"]["cost"]);
				$this->Transaction_item->set_field('net_cost', "0");
				$this->Transaction_item->insert();
			}
		}
	}

	public function update_checkbox_in_transaction_items($id)
	{
		$data = array(
			'checkbox' => true
		);
		$this->db->where('id', $id);
		$this->db->update('transaction_items', $data);
	}

	public function save_transaction_items_and_sizes_for_product_transfer($warehouse_id, $item_id, $qty, $size, $cost, $mvtType)
	{
		$this->load->model('Transaction_item');
		$transaction_id = _gnv($this->get_field('id'));
		$this->Transaction_item->reset_fields();
		$this->Transaction_item->set_field('item_id', $item_id);
		$this->Transaction_item->set_field('transaction_id', $transaction_id);
		$this->Transaction_item->set_field('qty', $qty);
		$this->Transaction_item->set_field('warehouse_id', $warehouse_id);
		$this->Transaction_item->set_field('mvt_type', $mvtType);
		$this->Transaction_item->set_field('cost', $cost);
		$this->Transaction_item->set_field('price', "0");
		$this->Transaction_item->set_field('discount', "0");
		$this->Transaction_item->set_field('net_cost', $cost);
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

	public function paginate_transfers()
	{
		$query = [
			'select' => [
				["transactions.auto_no, transactions.trans_date, transactions.id"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner']
			],
			'where' => [
				["{$this->_table}.trans_type", "TR"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'order_by' => [['auto_no', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_transfers_data_tables()
	{
		$dt = [
			'columns' => [
				'transactions.auto_no',
				'transactions.trans_date',
				'transactions.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner']
				],
				'where' => [
					["{$this->_table}.trans_type", "TR"],
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['transactions.auto_no']
		];
		return parent::load_datatables_pagedata($dt);
	}

	public function get_array_of_qty_and_cost_of_each_item_in_trans_on_edit_op($transItems)
	{
		$item_ids = [];
		foreach ($transItems as $t) {
			array_push($item_ids, $t["item_id"]);
		}
		$qty_cost_array = [];
		foreach (array_unique($item_ids) as $i) {
			// $qty= $this->Item->fetch_open_qty_of_item($i)["open_qty"];
			$qty = 0;
			$cost = 0;
			foreach ($transItems as $t) {
				if ($i === $t["item_id"]) {
					$qty = $t["qty"];
				}
			}
			array_push($qty_cost_array, ["item_id" => $i, "qty" => $qty]);
		}
		return $qty_cost_array;
	}

	public function get_array_of_old_open_qty_each_item_in_trans_on_edit_op($transItems)
	{
		$item_ids = [];
		foreach ($transItems as $t) {
			array_push($item_ids, $t["item_id"]);
		}
		$old_qty_array = [];
		foreach (array_unique($item_ids) as $i) {
			$qty = $this->Item->fetch_open_qty_of_item($i)["open_qty"];
			array_push($old_qty_array, ["item_id" => $i, "qty" => $qty]);
		}
		return $old_qty_array;
	}

	public function fetch_OP_trans_id_for_item($id)
	{
		$this->db->select('transactions.id');
		$this->db->from('transactions');
		$this->db->join('transaction_items', 'transactions.id = transaction_items.transaction_id');
		$this->db->where('transactions.trans_type', "OI");
		$this->db->where('transaction_items.item_id', $id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_trans_type_by_trans_id($trans_id)
	{
		$this->db->select('transactions.trans_type');
		$this->db->from('transactions');
		$this->db->where('transactions.id', $trans_id);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$result = $this->db->get()->row_array()["trans_type"];
		$trans = "";
		if ($result == "PU") {
			$trans = "purchases";
		}
		if ($result == "SA") {
			$trans = "sales";
		}
		if ($result == "RP") {
			$trans = "return_purchases";
		}
		if ($result == "RS") {
			$trans = "return_sales";
		}
		if ($result == "OS") {
			$trans = "orders";
		}
		if ($result == "OP") {
			$trans = "order_purchases";
		}
		if ($result == "QU") {
			$trans = "quotations";
		}
		if ($result == "OI") {
			$trans = "opening_items";
		}
		if ($result == "MP") {
			$trans = "missing_products";
		}
		if ($result == "TR") {
			$trans = "transfers";
		}
		return $trans;
	}

	public function update_cost_and_price_in_tr($item_id, $cost)
	{
		$this->load->model('Item');
		$i = $this->Item->fetch_item($item_id)["0"];
		if ($i["profit"] > 0) {
			$data = array(
				'cost' => $cost,
				'price' => $cost * (1 + ($i["profit"] / 100)),
				'price_ttc' => ($cost * (1 + ($i["profit"] / 100))) * (1 + ($i["TVA"] / 100))
			);
		} else {
			$data = array(
				'cost' => $cost
			);
		}
		$this->db->where('id', $item_id);
		$this->db->update('items', $data);
	}

	public function update_status($trans_id)
	{
		$data = array(
			'status' => 1
		);
		$this->db->where('id', $trans_id);
		// $this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$this->db->update('transactions', $data);
	}

	public function fetch_last_trans_date_of_purchase_or_transfer_of_item($item_id)
	{
		$fiscal_year = $this->violet_auth->get_fiscal_year_id();
		// $this->db->select('MAX(trans_date) as trans_date');
		$this->db->select('trans_date');
		$this->db->from('transaction_items');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->where(
			"transaction_items.item_id = $item_id
			and transaction_items.net_cost != 0 
			and (transactions.trans_type = 'PU' or transactions.trans_type = 'TR')		
			and transactions.fiscal_year_id = $fiscal_year"
		);
		$this->db->order_by('trans_date', 'DESC');
		$query = $this->db->get()->result_array();
		if ($query) {
			return $query[0];
		} else {
			return null;
		}
	}

	public function fetch_last_purchase_or_transfer_of_item_using_trans_date($item_id, $trans_date)
	{
		$fiscal_year = $this->violet_auth->get_fiscal_year_id();
		$this->db->select('MAX(transaction_items.id) as transaction_item_id');
		$this->db->from('transaction_items');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id');
		$this->db->where(
			"transaction_items.item_id = $item_id
			and transaction_items.net_cost != 0 
			and transactions.trans_date = '$trans_date'		
			and transactions.fiscal_year_id = $fiscal_year
			and (transactions.trans_type = 'PU' or transactions.trans_type = 'TR')"
		);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function update_cost_and_price_of_item($item, $currency_rate, $currency_code)
	{
		$this->load->model('Item');
		// var_dump($item);
		// exit;
		$i = $this->Item->fetch_item($item["item_id"])["0"];
		$pcost = ($item["price"] * (1 - ($item["discount"] / 100))) + $item["cost"];
		$cost =  $pcost / $currency_rate;
		if ($cost != "0") {
			$this->Item->reset_fields();
			$this->Item->set_fields($i);
			if ($item["trans_type"] === "PU") {
				$this->Item->set_field('cost', $cost);
				$this->Item->set_field('purchase_cost', $pcost);
			} else {
				$this->Item->set_field('cost', $item["cost"] / $currency_rate);
			}
			if ($i["profit"] > 0) {
				$this->Item->set_field('price', $cost * (1 + ($i["profit"] / 100)));
				$this->Item->set_field('price_ttc', ($cost * (1 + ($i["profit"] / 100))) * (1 + ($i["TVA"] / 100)));
			}
		}
		$this->Item->update();
	}

	public function update_item_cost_and_price_after_del($val)
	{
		$this->load->model('Currency');
		if ($val['id'] === NULL) {
			$for_update = array(
				'cost' => $val['open_cost'],
				'purchase_cost' => 0
			);
		} else {
			$currency_code = $this->Currency->fetch_currency_code($val['currency_id'])["currency_code"];
			if ($val['profit'] > 0) {
				if ($val['trans_type'] === "PU") {
					$for_update = array(
						'cost' => $val['net_cost'] * $val['currency_rate'],
						'purchase_cost' => $val['net_cost'] . $currency_code,
						'price' => $val['net_cost'] * $val['currency_rate'] * (1 + ($val['profit'] / 100)),
						'price_ttc' => ($val['net_cost'] * $val['currency_rate'] * (1 + ($val['profit'] / 100))) * (1 + ($val['TVA'] / 100))
					);
				} else {
					$for_update = array(
						'cost' => $val['net_cost'] * $val['currency_rate'],
						'price' => $val['net_cost'] * $val['currency_rate'] * (1 + ($val['profit'] / 100)),
						'price_ttc' => ($val['net_cost'] * $val['currency_rate'] * (1 + ($val['profit'] / 100))) * (1 + ($val['TVA'] / 100))
					);
				}
			} else {
				if ($val['trans_type'] === "PU") {
					$for_update = array(
						'cost' => $val['net_cost'] * $val['currency_rate'],
						'purchase_cost' => $val['net_cost'] . $currency_code
					);
				} else {
					$for_update = array(
						'cost' => $val['net_cost'] * $val['currency_rate']
					);
				}
			}
		}
		$this->db->where('id', $val['item_id']);
		$this->db->update('items', $for_update);
	}

	public function paginate_driver_delivery_notes($driver_id)
	{
		$total = 'ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))),2)';
		$query = [
			'select' => [
				["transactions.auto_no, transactions.relation_id, transactions.trans_date, transactions.value_date"],
				["account1.account_name AS account1, account2.account_name AS account2, account1.account_number AS account_number1"],
				["currencies.currency_code, transactions.currency_rate, transactions.discount, $total AS total"],
				["transactions.delivered"],
				["transactions.id"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
			],
			'where' => [
				["{$this->_table}.driver_id", $driver_id],
				["{$this->_table}.trans_type", "SA"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['transactions.id'],
			'order_by' => [['auto_no', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_driver_delivery_notes_data_tables($driver_id)
	{
		$dt = [
			'columns' => [
				'transactions.auto_no',
				'transactions.relation_id',
				'transactions.trans_date',
				'transactions.value_date',
				['account1.account_name', 'account1'],
				['account1.account_number', 'account_number1'],
				['account2.account_name', 'account2'],
				'transactions.delivered',
				'transactions.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
				],
				'where' => [
					["{$this->_table}.driver_id", $driver_id],
					["{$this->_table}.trans_type", "SA"],
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'group_by' => ['transactions.id'],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['transactions.auto_no', 'transactions.currency_rate', 'transactions.discount', 'transactions.account_id', 'transactions.account2_id', 'account1.account_name', 'account2.account_name']
		];
		return parent::load_datatables_pagedata($dt);
	}

	public function update_delivered_field($trans_id)
	{
		$data = array(
			'delivered' => 1
		);
		$this->db->where('id', $trans_id);
		$this->db->update('transactions', $data);
	}

	public function fetch_trans_autono($id)
	{
		$query = [
			'select' => "transactions.auto_no",
			'where' => [
				["transactions.id", $id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}

	public function fetch_last_trans_date_of_purchase_of_item($item_id)
	{
		$fiscal_year = $this->violet_auth->get_fiscal_year_id();
		$this->db->select('trans_date');
		$this->db->from('transaction_items');
		$this->db->join('transactions', 'transactions.id = transaction_items.transaction_id', 'inner');
		$this->db->where(
			"transaction_items.item_id = $item_id
			and transaction_items.net_cost != 0 
			and transactions.trans_type = 'PU'		
			and transactions.fiscal_year_id = $fiscal_year"
		);
		$this->db->order_by('trans_date', 'DESC');
		$query = $this->db->get()->result_array();
		if ($query) {
			return $query[0];
		} else {
			return null;
		}
	}

	public function paginate_employee_page($employee_id)
	{
		$total = 'ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))),2)';
		$query = [
			'select' => [
				["transactions.auto_no"],
				["account1.account_name AS account1, account1.account_number AS account_number1"],
				["transactions.trans_date, transactions.value_date"],
				["transactions.status2, users.user_name as driver, transactions.cash_date, transactions.return_date, transactions.id"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
				['users', 'users.id = transactions.driver_id', 'left'],
			],
			'where' => [
				["{$this->_table}.employee_id", $employee_id],
				["{$this->_table}.trans_type", "SA"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['transactions.id'],
			'order_by' => [['auto_no', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_employee_page_data_tables($employee_id)
	{
		$dt = [
			'columns' => [
				'transactions.auto_no',
				['account1.account_name', 'account1'],
				['account1.account_number', 'account_number1'],
				'transactions.trans_date',
				'transactions.value_date',
				'transactions.status2',
				['users.user_name', 'driver'],
				'transactions.cash_date',
				'transactions.return_date',
				'transactions.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
					['users', 'users.id = transactions.driver_id', 'left'],
				],
				'where' => [
					["{$this->_table}.employee_id", $employee_id],
					["{$this->_table}.trans_type", "SA"],
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'group_by' => ['transactions.id'],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['transactions.auto_no', 'account1.account_name']
		];
		return parent::load_datatables_pagedata($dt);
	}

	public function update_pickup_field($trans_id)
	{
		$data = array(
			'pickup' => 1
		);
		$this->db->where('id', $trans_id);
		$this->db->update('transactions', $data);
	}

	public function paginate_sales_data($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$query = [
			'select' => [
				["account1.account_number AS account_nb1, transactions.trans_date, transactions.trans_type, transactions.auto_no"],
				["account1.account_name AS account1"],
				["$subtotal AS subtotal, transactions.delivery_charge, journals.amount AS total, $qty as trans_qty"],
				["transactions.status2"],
				["DATE_FORMAT(transactions.value_date,'%d-%m-%Y') as value_date, user2.user_name as driver, user1.user_name as user, transactions.status, transactions.id,transactions.payment_method_gateway, COALESCE(transactions.payment_method_gateway_status, '-') as payment_method_gateway_status"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
				['users as user1', 'user1.id = transactions.user_id', 'left'],
				['users as user2', 'user2.id = transactions.driver_id', 'left'],

			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["({$this->_table}.hide != 1 OR {$this->_table}.hide is NULL)"],
				["{$this->_table}.status2 !=", "Cancelled By Administration"],
				["{$this->_table}.status2 !=", "Successfully Delivered"],
				["{$this->_table}.status2 !=", "Failed To Deliver"],
				["{$this->_table}.status2 !=", "Cancelled By Customer"],
				["{$this->_table}.status2 !=", "Pending By Administration"],
			],
			'where_in' => [
				["{$this->_table}.trans_type", [$transType, "EX"]],
			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'DESC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_sales_data_tables($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$dt = [
			'columns' => [
				['account1.account_number', 'account_nb1'],
				'transactions.trans_date',
				'transactions.trans_type',
				'transactions.status',
				'transactions.auto_no',
				['account1.account_name', 'account1'],
				'transactions.payment_method_gateway',
				['COALESCE(transactions.payment_method_gateway_status, "-")', 'payment_method_gateway_status'],


				[$subtotal, 'subtotal'],
				'transactions.delivery_charge',
				['journals.amount', 'total'],
				[$qty, 'trans_qty'],
				'transactions.status2',
				['DATE_FORMAT(transactions.value_date,"%d-%m-%Y")', 'value_date'],
				['user2.user_name', 'driver'],
				['user1.user_name', 'user'],
				'transactions.id',
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['journals', 'journals.transaction_id = transactions.id', 'inner'],
					['users as user1', 'user1.id = transactions.user_id', 'left'],
					['users as user2', 'user2.id = transactions.driver_id', 'left'],
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
					["({$this->_table}.hide != 1 OR {$this->_table}.hide is NULL)"],
					["{$this->_table}.status2 !=", "Cancelled By Administration"],
					["{$this->_table}.status2 !=", "Successfully Delivered"],
					["{$this->_table}.status2 !=", "Failed To Deliver"],
					["{$this->_table}.status2 !=", "Cancelled By Customer"],
					["{$this->_table}.status2 !=", "Pending By Administration"],
				],
				'where_in' => [
					["{$this->_table}.trans_type", [$transType, "EX"]],
				],
				'group_by' => ['journals.id'],
				'order_by' => [['auto_no', 'DESC']]
			],
			'search_in' => ['transactions.transaction_date', 'transactions.auto_no', 'transactions.currency_rate', 'transactions.discount', 'transactions.account_id', 'transactions.account2_id', 'account1.account_name', 'account2.account_name', 'transactions.payment_method_gateway']
		];
		$filter_type = $this->input->get(['trans_type'], true);
		$filter_tdate = $this->input->get(['trans_date'], true);
		$filter_dispatch_date = $this->input->get(['dispatch_date'], true);
		$filter_status = $this->input->get(['status'], true);
		if ($filter_type) {
			if ($filter_type['trans_type']) {
				$dt['query']['where'][] = ['transactions.trans_type', $filter_type['trans_type']];
				unset($dt['query']['where_in']);
			}
		}
		if ($filter_tdate) {
			if ($filter_tdate['trans_date']) {
				$dt['query']['where'][] = ['transactions.trans_date', date('Y-m-d', strtotime($filter_tdate['trans_date']))];
			}
		}
		if ($filter_dispatch_date) {
			if ($filter_dispatch_date['dispatch_date']) {
				$dt['query']['where'][] = ['transactions.value_date', date('Y-m-d', strtotime($filter_dispatch_date['dispatch_date']))];
			}
		}
		if ($filter_status) {
			if ($filter_status['status']) {
				$dt['query']['where'][] = ['transactions.status2', $filter_status['status']];
			}
		}
		$filters = $this->input->get(['multi_auto_nos'], true);
		// var_dump($filters);exit;
		if (!empty($filters['multi_auto_nos'])) {
			$auto_nbs = explode(',', $filters['multi_auto_nos']);
			$dt['query']['where_in'][] = ['transactions.auto_no', $auto_nbs];
		}
		// echo($dt);exit;
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}

	public function bulk_update_for_status($trans_ids, $status)
	{
		$query = null;
		foreach ($trans_ids as $id) {
			var_dump($id);
			$data = array(
				'status2' => $status
			);
			$this->db->where('id', $id);
			$query = $this->db->update('transactions', $data);
		}
		return $query;
	}

	public function bulk_update_for_driver($trans_ids, $driver)
	{
		foreach ($trans_ids as $id) {
			$data = array(
				'driver_id' => $driver
			);
			$this->db->where('id', $id);
			$query = $this->db->update('transactions', $data);
		}
		return $query;
	}

	public function bulk_update_for_value_date($trans_ids, $value_date)
	{
		foreach ($trans_ids as $id) {
			$data = array(
				'value_date' => date('Y-m-d', strtotime($value_date))
			);
			$this->db->where('id', $id);
			$query = $this->db->update('transactions', $data);
		}
		return $query;
	}

	public function bulk_update_for_cash_date($trans_ids, $cash_date)
	{
		foreach ($trans_ids as $id) {
			$data = array(
				'cash_date' => date('Y-m-d', strtotime($cash_date))
			);
			$this->db->where('id', $id);
			$query = $this->db->update('transactions', $data);
		}
		return $query;
	}

	public function bulk_update_for_return_date($trans_ids, $return_date)
	{
		foreach ($trans_ids as $id) {
			$data = array(
				'return_date' => date('Y-m-d', strtotime($return_date))
			);
			$this->db->where('id', $id);
			$query = $this->db->update('transactions', $data);
		}
		return $query;
	}

	public function paginate_wakilni_data_report()
	{
		$dir = "CONCAT_WS(' - ', accounts.place, accounts.street, accounts.description)";
		$query = [
			'select' => [
				["accounts.account_name, accounts.email, accounts.phone, 
				accounts.city, accounts.floor, accounts.building"],
				["IF(accounts.phone2 IS NULL or accounts.phone2 = '' or accounts.phone2 = '0', $dir, CONCAT_WS(' /mobile2: ', $dir, accounts.phone2)) AS direction"],
				["journals.amount AS total, currencies.currency_code, IF(transactions.payment_method = 'BOTH', 'lbp','lbp') as method, 'Regular' as package_type, '1' as package_qty"],
				["transactions.auto_no, transactions.delivery_note, CASE WHEN transactions.try_on = 1 then 'Yes' else 'No' END AS try_on, CASE WHEN transactions.exchange = 1 then 'Yes' else 'No' END AS exchange"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts', 'accounts.id = transactions.account_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
			],
			'where_in' => [
				["{$this->_table}.trans_type", ["SA", "EX"]],
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_wakilni_data_report_data_tables()
	{
		$dir = "CONCAT_WS(' - ', accounts.place, accounts.street, accounts.description)";
		$dt = [
			'columns' => [
				'accounts.account_name',
				'accounts.email',
				'accounts.phone',
				'accounts.city',
				'accounts.floor',
				' accounts.building',
				["IF(accounts.phone2 IS NULL or accounts.phone2 = '' or accounts.phone2 = '0', $dir, CONCAT_WS(' /mobile2: ', $dir, accounts.phone2))", 'direction'],
				['journals.amount', 'total'],
				'currencies.currency_code',
				["IF(transactions.payment_method = 'BOTH', 'lbp','lbp')", "method"],
				["'Regular'", "package_type"],
				["1", "package_qty"],
				'transactions.auto_no',
				'transactions.delivery_note',
				["CASE WHEN transactions.try_on = 1 then 'Yes' else 'No' END", "try_on"],
				["CASE WHEN transactions.exchange = 1 then 'Yes' else 'No' END", "exchange"]
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts', 'accounts.id = transactions.account_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['journals', 'journals.transaction_id = transactions.id', 'inner'],
				],
				'where_in' => [
					["{$this->_table}.trans_type", ["SA", "EX"]],
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'group_by' => ['journals.id'],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['transactions.auto_no']
		];
		$filters = $this->input->get(['date'], true);
		if (!empty($filters['date'])) {
			$value_date = date("Y-m-d", strtotime($filters['date']));
			$dt['query']['where'][] = ['transactions.value_date', $value_date];
		}
		return parent::load_datatables_pagedata($dt);
	}

	public function paginate_daily_pickup_report()
	{
		// $total = 'ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))) + transactions.delivery_charge - transactions.discount,2)';
		$query = [
			'select' => [
				["transactions.auto_no, accounts.account_name, transactions.value_date, 
				journals.amount AS total, currencies.currency_code, accounts.city, accounts.phone,
				transactions.delivery_note"],
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts', 'accounts.id = transactions.account_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
			],
			'where_in' => [
				["{$this->_table}.trans_type", ["SA", "EX"]],
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_daily_pickup_report_data_tables()
	{
		// $total = 'ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))) + transactions.delivery_charge - transactions.discount ,2)';
		$dt = [
			'columns' => [
				'transactions.auto_no',
				'accounts.account_name',
				'transactions.value_date',
				['journals.amount', 'total'],
				'currencies.currency_code',
				'accounts.city',
				'accounts.phone',
				'transactions.delivery_note'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts', 'accounts.id = transactions.account_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'left'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['journals', 'journals.transaction_id = transactions.id', 'inner'],
				],
				'where_in' => [
					["{$this->_table}.trans_type", ["SA", "EX"]],
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'group_by' => ['journals.id'],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['transactions.auto_no']
		];
		$filters = $this->input->get(['date'], true);
		if (!empty($filters['date'])) {
			$value_date = date("Y-m-d", strtotime($filters['date']));
			$dt['query']['where'][] = ['transactions.value_date', $value_date];
		}
		return parent::load_datatables_pagedata($dt);
	}

	public function fetch_transaction_data($id)
	{
		$query = [
			'select' => "transactions.*",
			'where' => [
				["transactions.id", $id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}

	public function calculate_sale_transaction_total($values, $total_discount, $delivery_charge)
	{
		$total = 0;
		foreach ($values as $v) {
			$p = $v["price"];
			$q = $v["qty"];
			$d = $v["discount"];
			$tot_item = floatval($p) * floatval($q) * (1 - (floatval($d) / 100));
			$total = floatval($total) + floatval($tot_item);
		}
		return floatval($total) - floatval($total_discount) + floatval($delivery_charge);
	}

	public function  update_items_qty($trans_items)
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
					["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
					["transaction_items.item_id", $t["item_id"]],
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
			$this->db->where('id', $t["item_id"]);
			$this->db->update('items', $data);
		}
	}

	public function update_invoice_cash_date($trans_ids, $cash_date)
	{
		foreach ($trans_ids as $id) {
			$data = array(
				'cash_date' => $cash_date
			);
			$this->db->where('id', $id);
			$query = $this->db->update('transactions', $data);
		}
	}

	public function update_invoice_status2($trans_ids, $status2)
	{
		foreach ($trans_ids as $id) {
			$data = array(
				'status2' => $status2
			);
			$this->db->where('id', $id);
			$query = $this->db->update('transactions', $data);
		}
	}

	public function fetch_invoice_total_profit($auto_no)
	{
		$query = [
			'select' => [
				"SUM(
					transaction_items.qty * 
					(transaction_items.price - transaction_items.cost - (transaction_items.discount / 100.0 * transaction_items.price))
				) as total_profit"

				// "SUM(transaction_items.qty * transaction_items.profit) as total_profit,"
			],
			'join' => [
				['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.auto_no", $auto_no],
				["transactions.trans_type", "SA"]
			],
		];
		return $this->load($query);
	}

	public function calculate_invoice_sub_totoal($id)
	{
		$query = [
			'select' => [
				"ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))) - transactions.discount,2) as subtot"
			],
			'join' => [
				['transaction_items as ti', 'transactions.id = ti.transaction_id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.id", $id]
			],
		];
		return $this->load($query);
	}

	public function set_next_auto_number_for_sale_and_exchange()
	{
		$query = $this->db->select_max('auto_no', 'nextAutoNo')
			->where_in('trans_type', ["SA", "EX"])
			->where("fiscal_year_id", $this->violet_auth->get_fiscal_year_id())
			->get($this->_table);
		$no = ($query->row()->nextAutoNo !== NULL ? _gnv($query->row()->nextAutoNo) : 25883);
		return 1 + $no;
	}

	public function calculate_number_of_invoices_by_date($date)
	{
		$query = [
			'select' => [
				"count(*) as count"
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.trans_date", $date],
				["transactions.trans_type", "SA"]
			],
		];
		return $this->load($query);
	}

	public function  calculate_number_of_invoices_by_source_and_date($source, $date)
	{
		$query = [
			'select' => [
				"count(*) as count"
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.trans_date", $date],
				["transactions.source", $source],
				["transactions.trans_type", "SA"],
			],
		];
		return $this->load($query);
	}

	public function calculate_number_of_invoices_by_status_and_date($status, $date)
	{
		$query = [
			'select' => [
				"count(*) as count"
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.trans_date", $date],
				["transactions.status2", $status],
				["transactions.trans_type", "SA"],
			],
		];
		return $this->load($query);
	}

	public function calculate_number_of_invoices_by_user_and_date($user_id, $date)
	{
		$query = [
			'select' => [
				"count(*) as count"
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.trans_date", $date],
				["transactions.user_id", $user_id],
				["transactions.trans_type", "SA"],
			],
		];
		return $this->load($query);
	}

	public function calculate_number_of_products_of_daily_invoices_by_categories($category, $date)
	{
		$query = [
			'select' => [
				"SUM(transaction_items.qty) as qty,"
			],
			'join' => [
				['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['items', 'items.id = transaction_items.item_id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.trans_date", $date],
				["transactions.trans_type", "SA"],
				["items.category", $category],
			],
			'having' => [
				['SUM(transaction_items.qty) >', 0],
			],
		];
		$result = $this->load($query);
		if (!$result) {
			$result["qty"] = 0;
		}
		return $result;
	}

	public function fetch_exchange_trans_id_by_sale_id($relation_id)
	{
		$query = [
			'select' => "transactions.id",
			'where' => [
				["transactions.relation_id", $relation_id],
				["transactions.trans_type", "EX"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}

	public function update_trans_status($trans_id, $status)
	{
		$data = array(
			'status' => $status
		);
		$this->db->where('id', $trans_id);
		$this->db->update('transactions', $data);
	}

	public function paginate_sales_archive_data($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$query = [
			'select' => [
				["account1.account_number AS account_nb1, DATE_FORMAT(transactions.trans_date,'%d-%m-%Y') as trans_date, 
				DATE_FORMAT(transactions.cash_date,'%d-%m-%Y') as cash_date, DATE_FORMAT(transactions.return_date,'%d-%m-%Y') as return_date, transactions.trans_type, transactions.auto_no"],
				["account1.account_name AS account1"],
				["$subtotal AS subtotal, transactions.delivery_charge, journals.amount AS total, $qty as trans_qty"],
				["transactions.status2"],
				["DATE_FORMAT(transactions.value_date,'%d-%m-%Y') as value_date, user2.user_name as driver, user1.user_name as user, transactions.status, transactions.id,transactions.payment_method_gateway, COALESCE(transactions.payment_method_gateway_status, '-') as payment_method_gateway_status"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
				['users as user1', 'user1.id = transactions.user_id', 'left'],
				['users as user2', 'user2.id = transactions.driver_id', 'left']
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'where_in' => [
				["{$this->_table}.trans_type", [$transType, "EX"]],
				["{$this->_table}.status2", ["Cancelled By Administration", "Successfully Delivered", "Failed To Deliver", "Cancelled By Customer"]],
			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'DESC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_sales_archive_data_tables($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$dt = [
			'columns' => [
				['account1.account_number', 'account_nb1'],
				['DATE_FORMAT(transactions.trans_date,"%d-%m-%Y")', 'trans_date'],
				['DATE_FORMAT(transactions.cash_date,"%d-%m-%Y")', 'cash_date'],
				['DATE_FORMAT(transactions.return_date,"%d-%m-%Y")', 'return_date'],
				'transactions.trans_type',
				'transactions.status',
				'transactions.auto_no',
				['account1.account_name', 'account1'],
				'transactions.payment_method_gateway',
				['COALESCE(transactions.payment_method_gateway_status, "-")', 'payment_method_gateway_status'],


				[$subtotal, 'subtotal'],
				'transactions.delivery_charge',
				['journals.amount', 'total'],
				[$qty, 'trans_qty'],
				'transactions.status2',
				['DATE_FORMAT(transactions.value_date,"%d-%m-%Y")', 'value_date'],
				['user2.user_name', 'driver'],
				['user1.user_name', 'user'],
				'transactions.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['journals', 'journals.transaction_id = transactions.id', 'inner'],
					['users as user1', 'user1.id = transactions.user_id', 'left'],
					['users as user2', 'user2.id = transactions.driver_id', 'left']
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'where_in' => [
					["{$this->_table}.trans_type", [$transType, "EX"]],
					["{$this->_table}.status2", ["Cancelled By Administration", "Successfully Delivered", "Failed To Deliver", "Cancelled By Customer"]],
				],
				'group_by' => ['journals.id'],
				'order_by' => [['auto_no', 'DESC']]
			],
			'search_in' => ['transactions.auto_no', 'transactions.currency_rate', 'transactions.discount', 'transactions.account_id', 'transactions.account2_id', 'account1.account_name', 'account2.account_name']
		];
		$filter_type = $this->input->get(['trans_type'], true);
		$filter_tdate = $this->input->get(['trans_date'], true);
		$filter_dispatch_date = $this->input->get(['dispatch_date'], true);
		$filter_status = $this->input->get(['status'], true);
		if ($filter_type) {
			if ($filter_type['trans_type']) {
				$dt['query']['where'][] = ['transactions.trans_type', $filter_type['trans_type']];
				unset($dt['query']['where_in']);
				$dt['query']['where_in'][] = ["{$this->_table}.status2", ["Cancelled By Administration", "Successfully Delivered", "Failed To Deliver"]];
			}
		}
		if ($filter_tdate) {
			if ($filter_tdate['trans_date']) {
				$dt['query']['where'][] = ['transactions.trans_date', date('Y-m-d', strtotime($filter_tdate['trans_date']))];
			}
		}
		if ($filter_dispatch_date) {
			if ($filter_dispatch_date['dispatch_date']) {
				$dt['query']['where'][] = ['transactions.value_date', date('Y-m-d', strtotime($filter_dispatch_date['dispatch_date']))];
			}
		}
		if ($filter_status) {
			if ($filter_status['status']) {
				$dt['query']['where'][] = ['transactions.status2', $filter_status['status']];
			}
		}
		$filters = $this->input->get(['multi_auto_nos'], true);
		// var_dump($filters);exit;
		if (!empty($filters['multi_auto_nos'])) {
			$auto_nbs = explode(',', $filters['multi_auto_nos']);
			$dt['query']['where_in'][] = ['transactions.auto_no', $auto_nbs];
		}
		return parent::load_datatables_pagedata($dt);
	}

	public function save_purchases_trans_items_and_sizes($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$transaction_id = _gnv($this->get_field('id'));
		$trans_sizes = [];
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('net_cost', $item["price"] + $item["cost"]);
			$saved = $this->Transaction_item->insert();
			if ($saved) {
				$count = -1;
				foreach ($item["qty_size"] as $k => $s) {
					if ($s !== "0") {
						$count++;
						$data = array(
							'transaction_item_id' => $this->Transaction_item->get_field("id"),
							'size' => $k,
							'qty' => $s
						);
						$this->db->insert('transaction_item_sizes', $data);
					}
				}
				if ($count === -1) {
					$count++;
					$data = array(
						'transaction_item_id' => $this->Transaction_item->get_field("id"),
						'size' => "No",
						'qty' => $item["item_qty"]
					);
					$this->db->insert('transaction_item_sizes', $data);
				}
			}
		}
	}

	public function save_transaction_items_and_sizes($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', $this->Item->fetch_item_cost($item["item_id"])["0"]["cost"]);
			$this->Transaction_item->set_field('net_cost', "0");
			$saved = $this->Transaction_item->insert();
			if ($saved) {
				$data = array(
					'transaction_item_id' => $this->Transaction_item->get_field("id"),
					'size' => $item["sizes"],
					'qty' => $item["qty"]
				);
				$this->db->insert('transaction_item_sizes', $data);
			}
		}
	}

	public function save_sales_transaction_items_and_sizes($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$item_cost = $this->Item->fetch_item_cost($item["item_id"])["0"]["cost"];
			$profit = doubleval($item["price"]) - doubleval($item_cost);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', $item_cost);
			$this->Transaction_item->set_field('profit', $profit);
			$this->Transaction_item->set_field('net_cost', "0");
			$saved = $this->Transaction_item->insert();
			if ($saved) {
				$data = array(
					'transaction_item_id' => $this->Transaction_item->get_field("id"),
					'size' => $item["sizes"],
					'qty' => $item["qty"]
				);
				$this->db->insert('transaction_item_sizes', $data);
			}
		}
	}

	public function save_transaction_items_and_sizes_without_warehouse_id($items, $mvtType)
	{
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', 0);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', $this->Item->fetch_item_cost($item["item_id"])["0"]["cost"]);
			$this->Transaction_item->set_field('net_cost', "0");
			$saved = $this->Transaction_item->insert();
			if ($saved) {
				$data = array(
					'transaction_item_id' => $this->Transaction_item->get_field("id"),
					'size' => $item["sizes"],
					'qty' => $item["qty"]
				);
				$this->db->insert('transaction_item_sizes', $data);
			}
		}
	}

	public function save_transaction_items_and_sizes_in_return_PU($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$this->load->model('Item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', $this->Item->fetch_item_cost($item["item_id"])["0"]["cost"]);
			$this->Transaction_item->set_field('net_cost', "0");
			$saved = $this->Transaction_item->insert();
			if ($saved) {
				$count = -1;
				foreach ($item["qty_size"] as $k => $s) {
					if ($s !== "0") {
						$count++;
						$data = array(
							'transaction_item_id' => $this->Transaction_item->get_field("id"),
							'size' => $k,
							'qty' => $s
						);
						$this->db->insert('transaction_item_sizes', $data);
					}
				}
				if ($count === -1) {
					$count++;
					$data = array(
						'transaction_item_id' => $this->Transaction_item->get_field("id"),
						'size' => "No",
						'qty' => $item["item_qty"]
					);
					$this->db->insert('transaction_item_sizes', $data);
				}
			}
		}
	}

	public function save_opening_items_trans_items_and_sizes($items, $mvtType)
	{
		$this->load->model('Warehouse');
		$this->load->model('Transaction_item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($item["warehouses"], $item["shelfs"]);
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('warehouse_id', $warehouse_id["id"]);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->set_field('cost', 0);
			$this->Transaction_item->set_field('price', 0);
			$this->Transaction_item->set_field('discount', 0);
			$this->Transaction_item->set_field('net_cost', 0);
			$saved = $this->Transaction_item->insert();
			if ($saved) {
				$count = -1;
				foreach ($item["qty_size"] as $k => $s) {
					if ($s !== "0") {
						$count++;
						$data = array(
							'transaction_item_id' => $this->Transaction_item->get_field("id"),
							'size' => $k,
							'qty' => $s
						);
						$this->db->insert('transaction_item_sizes', $data);
					}
				}
				if ($count === -1) {
					$count++;
					$data = array(
						'transaction_item_id' => $this->Transaction_item->get_field("id"),
						'size' => "No",
						'qty' => $item["item_qty"]
					);
					$this->db->insert('transaction_item_sizes', $data);
				}
			}
		}
	}

	public function calculate_invoice_subtot_exchange($id)
	{
		$query = [
			'select' => [
				"ROUND(SUM((ti.qty * ti.price * (1 - ti.discount/100))) + transactions.delivery_charge,2) as total"
			],
			'join' => [
				['transaction_items as ti', 'transactions.id = ti.transaction_id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transactions.id", $id]
			],
		];
		return $this->load($query);
	}

	public function load_stock_report_data($filters)
	{
		$query = [
			'select' => [
				"items.barcode, items.description, transactions.trans_type, transactions.auto_no, transactions.trans_date, ti.mvt_type, transaction_item_sizes.qty, transaction_item_sizes.size"
			],
			'join' => [
				['transaction_items as ti', 'transactions.id = ti.transaction_id', 'inner'],
				['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["ti.item_id", $filters["item_id"]]
			],
			'where_in' => [
				["transactions.trans_type", ['PU', 'SA', 'EX', 'RS', 'RP', 'TR', 'OI', 'AD']],
			],
			'order_by' => ['transactions.trans_date', "ASC"]
		];
		if ($filters["size"] != '') {
			$query['where'][] = ["transaction_item_sizes.size", $filters["size"]];
		}
		if ($filters["from_date"] != '') {
			$query['where'][] = ["transactions.trans_date >=", date("Y-m-d", strtotime($filters["from_date"]))];
		}
		if ($filters["to_date"] != '') {
			$query['where'][] = ["transactions.trans_date <=", date("Y-m-d", strtotime($filters["to_date"]))];
		}
		return $this->load_all($query);
	}

	public function add_new_adjust_trans($auto_no, $lc_currency, $transType)
	{
		$trans_data = array(
			'auto_no' => $auto_no,
			'account_id' => 1,
			'account2_id' => 1,
			'currency_id' => $lc_currency,
			'currency_rate' => 1,
			'trans_date' => date('Y-m-d'),
			'trans_type' => $transType,
			'fiscal_year_id' => $this->violet_auth->get_fiscal_year_id(),
			'user_id' => $this->violet_auth->get_user_id()
		);
		$query = $this->db->insert('transactions', $trans_data);
		return $query;
	}

	public function paginate_ecommerce_sales_data($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$query = [
			'select' => [
				["account1.account_number AS account_nb1, transactions.trans_date, transactions.trans_type, transactions.auto_no"],
				["account1.account_name AS account1"],
				["$subtotal AS subtotal, transactions.delivery_charge, journals.amount AS total, $qty as trans_qty"],
				["transactions.status2"],
				["DATE_FORMAT(transactions.value_date,'%d-%m-%Y') as value_date, user2.user_name as driver, user1.user_name as user, transactions.status, transactions.id,transactions.payment_method_gateway, COALESCE(transactions.payment_method_gateway_status, '-') as payment_method_gateway_status"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
				['users as user1', 'user1.id = transactions.user_id', 'left'],
				['users as user2', 'user2.id = transactions.driver_id', 'left'],
				['orders', 'transactions.id = orders.transaction_id', 'inner']
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["({$this->_table}.hide != 1 OR {$this->_table}.hide is NULL)"],
				// ["{$this->_table}.status2 !=", "Cancelled By Administration"],
				// ["{$this->_table}.status2 !=", "Successfully Delivered"],
				// ["{$this->_table}.status2 !=", "Failed To Deliver"],
				// ["{$this->_table}.status2 !=", "Cancelled By Customer"],
				// ["{$this->_table}.status2 !=", "Pending By Administration"],
			],
			'where_in' => [
				["{$this->_table}.trans_type", [$transType, "EX"]],
			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'DESC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_ecommerce_sales_data_tables($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$dt = [
			'columns' => [
				['account1.account_number', 'account_nb1'],
				'transactions.trans_date',
				'transactions.trans_type',
				'transactions.status',
				'transactions.auto_no',
				['account1.account_name', 'account1'],
				'transactions.payment_method_gateway',
				['COALESCE(transactions.payment_method_gateway_status, "-")', 'payment_method_gateway_status'],
				[$subtotal, 'subtotal'],
				'transactions.delivery_charge',
				['journals.amount', 'total'],
				[$qty, 'trans_qty'],
				'transactions.status2',
				['DATE_FORMAT(transactions.value_date,"%d-%m-%Y")', 'value_date'],
				['user2.user_name', 'driver'],
				['user1.user_name', 'user'],
				'transactions.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['journals', 'journals.transaction_id = transactions.id', 'inner'],
					['users as user1', 'user1.id = transactions.user_id', 'left'],
					['users as user2', 'user2.id = transactions.driver_id', 'left'],
					['orders', 'transactions.id = orders.transaction_id', 'inner']
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
					["({$this->_table}.hide != 1 OR {$this->_table}.hide is NULL)"],
					// ["{$this->_table}.status2 !=", "Cancelled By Administration"],
					// ["{$this->_table}.status2 !=", "Successfully Delivered"],
					// ["{$this->_table}.status2 !=", "Failed To Deliver"],
					// ["{$this->_table}.status2 !=", "Cancelled By Customer"],
					// ["{$this->_table}.status2 !=", "Pending By Administration"],
				],
				'where_in' => [
					["{$this->_table}.trans_type", [$transType, "EX"]],
				],
				'group_by' => ['journals.id'],
				'order_by' => [['auto_no', 'DESC']]
			],
			'search_in' => ['transactions.transaction_date', 'transactions.auto_no', 'transactions.currency_rate', 'transactions.discount', 'transactions.account_id', 'transactions.account2_id', 'account1.account_name', 'account2.account_name']
		];
		$filters = $this->input->get(['multi_auto_no'], true);
		if (!empty($filters['multi_auto_no'])) {
			$auto_nbs = explode(',', $filters['multi_auto_no']);
			$dt['query']['where_in'][] = ['transactions.auto_no', $auto_nbs];
		}
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}

	public function update_status2($trans_id, $status2)
	{
		$data = array(
			'status2' => $status2
		);
		$this->db->where('id', $trans_id);
		$this->db->update('transactions', $data);
	}

	public function update_dispatch_date($trans_id, $dispatch_date)
	{
		$data = array(
			'value_date' => date("Y-m-d", strtotime($dispatch_date))
		);
		$this->db->where('id', $trans_id);
		$this->db->update('transactions', $data);
	}

	public function update_driver($trans_id, $driver_id)
	{
		$data = array(
			'driver_id' => $driver_id
		);
		$this->db->where('id', $trans_id);
		$this->db->update('transactions', $data);
	}

	public function update_hide_show_invoice($trans_id, $value)
	{
		$data['hide'] = $value;
		$this->db->where('id', $trans_id);
		return $this->db->update('transactions', $data);
	}

	public function load_multi_invoices_report_data($auto_nos, $status2)
	{
		$query = [
			'select' => [
				"transactions.auto_no, transactions.trans_date, transactions.trans_type, transactions.source, transactions.status2, accounts.account_name, accounts.account_number, items.barcode, items.id as item_id, items.description, transaction_item_sizes.qty, transaction_item_sizes.size, warehouses.warehouse, warehouses.shelf,"
			],
			'join' => [
				['transaction_items as ti', 'transactions.id = ti.transaction_id', 'inner'],
				['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['accounts', 'accounts.id = transactions.account_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner'],
				['warehouses', 'ti.warehouse_id = warehouses.id', 'left']
			],
			// 'where' => [
			// ["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			// ],
			'where_in' => [
				["transactions.trans_type", ['SA', 'EX']]
			],
			'order_by' => ['transactions.auto_no', "ASC"]
		];
		if ($auto_nos[0] != '') {
			$query['where_in'][] = ["transactions.auto_no", $auto_nos];
		} elseif ($status2) {
			$query['where'][] = ['transactions.status2', $status2];
		}
		return $this->load_all($query);
	}

	public function paginate_order_purchases_inventory()
	{
		$query = [
			'select' => [
				["transactions.auto_no, transactions.trans_date, account1.account_name AS supplier"],
				["items.barcode, items.description, transaction_item_sizes.size, warehouses.warehouse, warehouses.shelf"],
				["transaction_item_sizes.qty, items.price_ttc, transactions.id"]
			],
			'join' => [
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner'],
				['warehouses', 'ti.warehouse_id = warehouses.id', 'inner'],
				['transactions AS pu', 'pu.relation_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.trans_type", 'OP'],
				["pu.relation_id is NULL"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'order_by' => [['id', 'DESC']]
		];
		// var_dump($this->load_all($query));exit;
		// return $this->load_all($query);
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_order_purchases_inventory_data_tables()
	{
		$dt = [
			'columns' => [
				'transactions.auto_no',
				'items.barcode',
				'transaction_item_sizes.size',
				'transaction_item_sizes.qty',
				'items.price_ttc',
				'items.description',
				'warehouses.warehouse',
				'warehouses.shelf',
				'transactions.trans_date',
				['account1.account_name', 'supplier'],
				'transactions.id'
			],
			'query' => [
				'join' => [
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
					['items', 'ti.item_id = items.id', 'inner'],
					['warehouses', 'ti.warehouse_id = warehouses.id', 'inner'],
					['transactions AS pu', 'pu.relation_id = transactions.id', 'left']
				],
				'where' => [
					["{$this->_table}.trans_type", 'OP'],
					["pu.relation_id is NULL"],
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'order_by' => [['id', 'DESC']]
			],
			'search_in' => ['transactions.auto_no', 'transactions.trans_date', 'items.barcode', 'items.description', 'transaction_item_sizes.size', 'warehouses.warehouse', 'warehouses.shelf',]
		];
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}

	public function check_if_op_nb_exists_by_trans_type($op_nb, $trans_type, $trans_id)
	{
		$query = [
			'select' => [
				"transactions.id"
			],
			'where' => [
				["transactions.op_nb", $op_nb],
				["transactions.trans_type", $trans_type],
			]
		];
		if ($trans_id) {
			$query['where'][] = ["transactions.id !=", $trans_id];
		}
		return $this->load($query);
	}

	public function paginate_pre_orders($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$query = [
			'select' => [
				["account1.account_number AS account_nb1, transactions.trans_date, transactions.trans_type, transactions.auto_no"],
				["account1.account_name AS account1"],
				["$subtotal AS subtotal, transactions.delivery_charge, journals.amount AS total, $qty as trans_qty"],
				["transactions.status2"],
				["DATE_FORMAT(transactions.value_date,'%d-%m-%Y') as value_date, user2.user_name as driver, user1.user_name as user, transactions.status, transactions.id,transactions.payment_method_gateway, COALESCE(transactions.payment_method_gateway_status, '-') as payment_method_gateway_status"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
				['users as user1', 'user1.id = transactions.user_id', 'left'],
				['users as user2', 'user2.id = transactions.driver_id', 'left'],
				['transactions as tr', 'tr.relation_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["{$this->_table}.trans_type", $transType],
				['tr.relation_id is NULL']

			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'DESC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_pre_orders_data_tables($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$dt = [
			'columns' => [
				['account1.account_number', 'account_nb1'],
				'transactions.trans_date',
				'transactions.trans_type',
				'transactions.auto_no',
				['account1.account_name', 'account1'],
				'transactions.payment_method_gateway',
				['COALESCE(transactions.payment_method_gateway_status, "-")', 'payment_method_gateway_status'],

				[$subtotal, 'subtotal'],
				'transactions.delivery_charge',
				['journals.amount', 'total'],
				[$qty, 'trans_qty'],
				'transactions.status2',
				['DATE_FORMAT(transactions.value_date,"%d-%m-%Y")', 'value_date'],
				['user2.user_name', 'driver'],
				['user1.user_name', 'user'],
				'transactions.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['journals', 'journals.transaction_id = transactions.id', 'inner'],
					['users as user1', 'user1.id = transactions.user_id', 'left'],
					['users as user2', 'user2.id = transactions.driver_id', 'left'],
					['transactions as tr', 'tr.relation_id = transactions.id', 'left']
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
					["{$this->_table}.trans_type", $transType],
					['tr.relation_id is NULL']
				],
				'group_by' => ['journals.id'],
				'order_by' => [['auto_no', 'DESC']]
			],
			'search_in' => ['transactions.transaction_date', 'transactions.auto_no', 'transactions.currency_rate', 'transactions.discount', 'transactions.account_id', 'transactions.account2_id', 'account1.account_name', 'account2.account_name']
		];
		$filters = $this->input->get(['multi_auto_nos'], true);
		if (!empty($filters['multi_auto_nos'])) {
			$auto_nbs = explode(',', $filters['multi_auto_nos']);
			$dt['query']['where_in'][] = ['transactions.auto_no', $auto_nbs];
		}
		// var_dump($filters);exit;
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}

	public function load_item_available_qty_in_untransfered_order_purchases($item_id)
	{
		$query = [
			'select' => [
				["items.barcode, transaction_item_sizes.size, SUM(transaction_item_sizes.qty) AS qty"],
			],
			'join' => [
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner'],
				['warehouses', 'ti.warehouse_id = warehouses.id', 'inner'],
				['transactions AS pu', 'pu.relation_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.trans_type", 'OP'],
				["items.id", $item_id],
				["pu.relation_id is NULL"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['items.id, transaction_item_sizes.size'],
		];
		return $this->load_all($query);
	}

	public function load_item_ordered_in_untransfered_pre_orders($item_id)
	{
		$query = [
			'select' => [
				["items.barcode, transaction_item_sizes.size, SUM(transaction_item_sizes.qty) AS qty"],
			],
			'join' => [
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner'],
				['warehouses', 'ti.warehouse_id = warehouses.id', 'inner'],
				['transactions AS sa', 'sa.relation_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.trans_type", 'OS'],
				["items.id", $item_id],
				["sa.relation_id is NULL"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['items.id, transaction_item_sizes.size'],
		];
		return $this->load_all($query);
	}

	public function paginate_op_inventory_data()
	{
		$query = [
			'select' => [
				["items.barcode, items.description, ts.size, SUM(ts.qty * IF(transactions.trans_type = 'OS','-1','1')) AS total_qty, items.price_ttc"]
			],
			'join' => [
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['transaction_item_sizes as ts', 'ti.id = ts.transaction_item_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner'],
				['transactions as tr2', 'tr2.relation_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["(transactions.trans_type = 'OP' OR transactions.trans_type = 'OS') AND tr2.relation_id IS NULL"],
			],
			'group_by' => ['items.id, ts.size'],
			'order_by' => [['barcode', 'DESC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_op_inventory_data_tables()
	{
		$dt = [
			'columns' => [
				'items.barcode',
				'items.description',
				'ts.size',
				["SUM(ts.qty * IF(transactions.trans_type = 'OS','-1','1'))", 'total_qty'],
				'items.price_ttc'
			],
			'query' => [
				'join' => [
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['transaction_item_sizes as ts', 'ti.id = ts.transaction_item_id', 'inner'],
					['items', 'ti.item_id = items.id', 'inner'],
					['transactions as tr2', 'tr2.relation_id = transactions.id', 'left']
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
					["(transactions.trans_type = 'OP' OR transactions.trans_type = 'OS') AND tr2.relation_id IS NULL"]
				],
				'group_by' => ['items.id, ts.size'],
				'order_by' => [['barcode', 'DESC']]
			],
			'search_in' => ['items.barcode', 'items.description', 'ts.size']
		];
		return parent::load_datatables_pagedata($dt);
	}

	public function calculate_item_total_available_qty($item_id)
	{
		$query = [
			'select' => [
				"SUM(ts.qty * transaction_items.mvt_type) as total_qty,"
			],
			'join' => [
				['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['transaction_item_sizes as ts', 'transaction_items.id = ts.transaction_item_id', 'inner'],
				['items', 'items.id = transaction_items.item_id', 'inner'],
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transaction_items.item_id", $item_id],
			],
			'group_by' => ['items.id']
		];
		return $this->load($query);
	}

	public function calculate_item_total_available_qty_of_szie($item_id, $size)
	{
		$query = [
			'select' => [
				"SUM(ts.qty * transaction_items.mvt_type) as total_qty,"
			],
			'join' => [
				['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['transaction_item_sizes as ts', 'transaction_items.id = ts.transaction_item_id', 'inner'],
				['items', 'items.id = transaction_items.item_id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transaction_items.item_id", $item_id],
				['ts.size', $size]
			],
		];
		return $this->load($query);
	}

	public function load_size_qty_of_item_ordered_in_untransfered_pre_orders($item_id, $size)
	{
		$query = [
			'select' => [
				["items.barcode, transaction_item_sizes.size, SUM(transaction_item_sizes.qty) AS qty"],
			],
			'join' => [
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner'],
				['warehouses', 'ti.warehouse_id = warehouses.id', 'inner'],
				['transactions AS sa', 'sa.relation_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.trans_type", 'OS'],
				["items.id", $item_id],
				["transaction_item_sizes.size", $size],
				["sa.relation_id is NULL"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['items.id, transaction_item_sizes.size'],
		];
		return $this->load($query);
	}

	public function load_size_qty_of_item_ordered_in_untransfered_pre_orders_edit_mode($item_id, $size, $trans_id)
	{
		$query = [
			'select' => [
				["items.barcode, transaction_item_sizes.size, SUM(transaction_item_sizes.qty) AS qty"],
			],
			'join' => [
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['transaction_item_sizes', 'ti.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['items', 'ti.item_id = items.id', 'inner'],
				['warehouses', 'ti.warehouse_id = warehouses.id', 'inner'],
				['transactions AS sa', 'sa.relation_id = transactions.id', 'left']
			],
			'where' => [
				["{$this->_table}.trans_type", 'OS'],
				["{$this->_table}.id !=", $trans_id],
				["items.id", $item_id],
				["transaction_item_sizes.size", $size],
				["sa.relation_id is NULL"],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'group_by' => ['items.id, transaction_item_sizes.size'],
		];
		return $this->load($query);
	}

	public function search_tracking_nbs_suggestions($q = false)
	{
		(false === $q) and ($q = $this->input->post('term', true));
		$query = $this->db->select("id, auto_no, trans_type")
			->select("CONCAT_WS(' #', trans_type, auto_no) AS description")
			->from($this->_table)
			->where(
				"(trans_type = 'SA' OR trans_type = 'EX') AND
				(trans_type LIKE '%$q%' 
				or CONCAT(trans_type, ' #', auto_no)  LIKE '%$q%'
				or auto_no LIKE '%$q%')"
			)
			// ->where_in('trans_type', ['SA', 'EX'])
			->get();
		if (false !== $query && $query->num_rows() > 0) {
			return $query->result_array();
		}
		return [];
	}

	public function load_sales_data_for_excel($ids)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$query = [
			'select' => [
				["account1.account_number AS account_nb1, transactions.trans_date, transactions.trans_type, transactions.auto_no"],
				["account1.account_name AS account1"],
				["$subtotal AS subtotal, transactions.delivery_charge, journals.amount AS total, $qty as trans_qty"],
				["transactions.status2"],
				["DATE_FORMAT(transactions.value_date,'%d-%m-%Y') as value_date, user2.user_name as driver, user1.user_name as user, transactions.status, transactions.id"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
				['users as user1', 'user1.id = transactions.user_id', 'left'],
				['users as user2', 'user2.id = transactions.driver_id', 'left']
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["({$this->_table}.hide != 1 OR {$this->_table}.hide is NULL)"],
			],
			'where_in' => [
				["{$this->_table}.trans_type", ["SA", "EX"]],
				["{$this->_table}.id", $ids]
			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'DESC']]
		];
		return $this->load_all($query);
	}

	public function  calculate_available_item_qty($item_id)
	{
		$query = [
			'select' => [
				"SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty,"
			],
			'join' => [
				['transaction_items', 'transactions.id = transaction_items.transaction_id', 'inner'],
				['transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner'],
				['items', 'items.id = transaction_items.item_id', 'inner']
			],
			'where' => [
				["transactions.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["transaction_items.item_id", $item_id],
			],
			'group_by' => ['items.id']
		];
		$result = $this->load($query);
		if ($result["total_qty"] === NULL) {
			$result["total_qty"] = 0;
		}
		return $result["total_qty"];
	}

	public function load_profits_per_date_data($from_date, $to_date)
	{
		$revenue = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$cost = 'SUM(ti.qty*ti.cost)';
		$query = [
			'select' => [
				["transactions.trans_date, transactions.trans_type, transactions.auto_no"],
				["$revenue AS revenue,  $cost as cost"],
			],
			'join' => [
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["{$this->_table}.status2 !=", "Cancelled By Administration"],
				["{$this->_table}.status2 !=", "Failed To Deliver"],
				["{$this->_table}.trans_date >=", date('Y-m-d', strtotime($from_date))],
				["{$this->_table}.trans_date <=", date('Y-m-d', strtotime($to_date))],
			],
			'where_in' => [
				["{$this->_table}.trans_type", ["SA", "EX"]],
			],
			'group_by' => ['journals.id'],
			'order_by' => [['transactions.trans_date', 'ASC']]
		];
		return $this->load_all($query);
	}

	public function paginate_pending_sales_data($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$query = [
			'select' => [
				["account1.account_number AS account_nb1, transactions.trans_date, transactions.trans_type, transactions.auto_no"],
				["account1.account_name AS account1"],
				["$subtotal AS subtotal, transactions.delivery_charge, journals.amount AS total, $qty as trans_qty"],
				["transactions.status2"],
				["DATE_FORMAT(transactions.value_date,'%d-%m-%Y') as value_date, user2.user_name as driver, user1.user_name as user, transactions.status, transactions.id,transactions.payment_method_gateway, COALESCE(transactions.payment_method_gateway_status, '-') as payment_method_gateway_status"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
				['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
				['currencies', 'currencies.id = transactions.currency_id', 'inner'],
				['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
				['journals', 'journals.transaction_id = transactions.id', 'inner'],
				['users as user1', 'user1.id = transactions.user_id', 'left'],
				['users as user2', 'user2.id = transactions.driver_id', 'left']
			],
			'where' => [
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				["({$this->_table}.hide != 1 OR {$this->_table}.hide is NULL)"],
				["{$this->_table}.status2", "Pending By Administration"]
			],
			'where_in' => [
				["{$this->_table}.trans_type", [$transType, "EX"]],
			],
			'group_by' => ['journals.id'],
			'order_by' => [['auto_no', 'DESC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_pending_sales_data_tables($transType)
	{
		$subtotal = 'ROUND(journals.amount - transactions.delivery_charge,2)';
		$qty = 'SUM(ti.qty)';
		$dt = [
			'columns' => [
				['account1.account_number', 'account_nb1'],
				'transactions.trans_date',
				'transactions.trans_type',
				'transactions.status',
				'transactions.auto_no',
				['account1.account_name', 'account1'],
				'transactions.payment_method_gateway',
				['COALESCE(transactions.payment_method_gateway_status, "-")', 'payment_method_gateway_status'],

				[$subtotal, 'subtotal'],
				'transactions.delivery_charge',
				['journals.amount', 'total'],
				[$qty, 'trans_qty'],
				'transactions.status2',
				['DATE_FORMAT(transactions.value_date,"%d-%m-%Y")', 'value_date'],
				['user2.user_name', 'driver'],
				['user1.user_name', 'user'],
				'transactions.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = transactions.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = transactions.account_id', 'inner'],
					['accounts AS account2', 'account2.id = transactions.account2_id', 'inner'],
					['currencies', 'currencies.id = transactions.currency_id', 'inner'],
					['transaction_items AS ti', 'ti.transaction_id = transactions.id', 'inner'],
					['journals', 'journals.transaction_id = transactions.id', 'inner'],
					['users as user1', 'user1.id = transactions.user_id', 'left'],
					['users as user2', 'user2.id = transactions.driver_id', 'left']
				],
				'where' => [
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
					["({$this->_table}.hide != 1 OR {$this->_table}.hide is NULL)"],
					["{$this->_table}.status2", "Pending By Administration"]
				],
				'where_in' => [
					["{$this->_table}.trans_type", [$transType, "EX"]],
				],
				'group_by' => ['journals.id'],
				'order_by' => [['auto_no', 'DESC']]
			],
			'search_in' => ['transactions.transaction_date', 'transactions.auto_no', 'transactions.currency_rate', 'transactions.discount', 'transactions.account_id', 'transactions.account2_id', 'account1.account_name', 'account2.account_name']
		];
		$filter_type = $this->input->get(['trans_type'], true);
		$filter_tdate = $this->input->get(['trans_date'], true);
		$filter_dispatch_date = $this->input->get(['dispatch_date'], true);
		$filter_status = $this->input->get(['status'], true);
		if ($filter_type) {
			if ($filter_type['trans_type']) {
				$dt['query']['where'][] = ['transactions.trans_type', $filter_type['trans_type']];
				unset($dt['query']['where_in']);
			}
		}
		if ($filter_tdate) {
			if ($filter_tdate['trans_date']) {
				$dt['query']['where'][] = ['transactions.trans_date', date('Y-m-d', strtotime($filter_tdate['trans_date']))];
			}
		}
		if ($filter_dispatch_date) {
			if ($filter_dispatch_date['dispatch_date']) {
				$dt['query']['where'][] = ['transactions.value_date', date('Y-m-d', strtotime($filter_dispatch_date['dispatch_date']))];
			}
		}
		if ($filter_status) {
			if ($filter_status['status']) {
				$dt['query']['where'][] = ['transactions.status2', $filter_status['status']];
			}
		}
		$filters = $this->input->get(['multi_auto_nos'], true);
		// var_dump($filters);exit;
		if (!empty($filters['multi_auto_nos'])) {
			$auto_nbs = explode(',', $filters['multi_auto_nos']);
			$dt['query']['where_in'][] = ['transactions.auto_no', $auto_nbs];
		}
		// echo($dt);exit;
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}
	public function get_journal_amount_by_transaction($transId)
	{
		$this->db->select('journals.amount AS total');
		$this->db->from('transactions');
		$this->db->join('journals', 'journals.transaction_id = transactions.id', 'inner');
		$this->db->where('transactions.id', $transId);
		$query = $this->db->get()->row_array();
		return $query;
	}
}
