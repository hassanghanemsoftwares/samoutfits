<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Transaction_item $Transaction_item
 */
class Journal extends MY_Model
{

	const PaymentJournalType = 'PA';
	const ReceiptJournalType = 'RE';

	protected $modelName = 'Journal';
	protected $_table = 'journals';
	protected $_listFieldName = 'auto_no';
	protected $_fieldsNames = ['id', 'fiscal_year_id', 'journal_type', 'auto_no', 'journal_date', 'amount', 'account_id', 'account2_id', 'currency_id', 'currency_rate', 'description', 'user_id', 'transaction_id', 'value_date'];
	protected $_dateFields = ['journal_date', 'value_date'];
	protected $allowedNulls = ['description'];

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
			'journal_type' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => ['maxLength', 2],
				'message' => sprintf($this->lang->line('required__max_length_rule'), $this->lang->line('journal_type'), 2)
			],
			'auto_no' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('auto_no'))
			],
			'journal_date' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => ['date', 'dmy'],
				'message' => sprintf($this->lang->line('required_date_rule'), $this->lang->line('journal_date'))
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
			'amount' => [
				'required' => TRUE,
				'allowEmpty' => TRUE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('amount'))
			],
			'user_id' => [
				'required' => TRUE,
				'allowEmpty' => FALSE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('required__is_numeric_rule'), $this->lang->line('user'))
			]
		];
	}

	public function get_journal_types_list()
	{
		return [
			self::PaymentJournalType => 'Payment',
			self::ReceiptJournalType => 'Receipt',

		];
	}

	public function paginate_payment()
	{
		return $this->paginate_journals(self::PaymentJournalType);
	}
	public function paginate_receipt()
	{
		return $this->paginate_journals(self::ReceiptJournalType);
	}

	private function paginate_journals($journalType)
	{
		$query = [
			'select' => [
				["journals.id, journals.auto_no, journals.currency_rate, journals.journal_date, journals.amount,  journals.description"],
				["account1.account_name AS account1, account2.account_name AS account2"],
				["currencies.currency_code"]
			],
			'join' => [
				['fiscal_years', 'fiscal_years.id = journals.fiscal_year_id', 'inner'],
				['accounts AS account1', 'account1.id = journals.account_id', 'inner'],
				['accounts AS account2', 'account2.id = journals.account2_id', 'inner'],
				['currencies', 'currencies.id = journals.currency_id', 'inner'],
			],
			'where' => [
				["{$this->_table}.journal_type", $journalType],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			],
			'order_by' => [['auto_no', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_journals_data_tables($journalType)
	{
		$dt = [
			'columns' => [
				'journals.auto_no', 'journals.description', 'journals.journal_date',
				['account1.account_name', 'account1'], ['account2.account_name', 'account2'],
				'journals.currency_rate', 'journals.amount',
				'currencies.currency_code', 'journals.id'
			],
			'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = journals.fiscal_year_id', 'inner'],
					['accounts AS account1', 'account1.id = journals.account_id', 'inner'],
					['accounts AS account2', 'account2.id = journals.account2_id', 'inner'],
					['currencies', 'currencies.id = journals.currency_id', 'inner'],
				],
				'where' => [
					["{$this->_table}.journal_type", $journalType],
					["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
				],
				'order_by' => [['auto_no', 'ASC']]
			],
			'search_in' => ['journals.journal_date', 'journals.description', 'journals.auto_no', 'journals.currency_rate', 'journals.amount', 'journals.account_id', 'journals.account2_id']
		];
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}


	public function save_transaction_items($items, $mvtType)
	{
		$this->load->model('Transaction_item');
		$transaction_id = _gnv($this->get_field('id'));
		foreach ($items as $item) {
			$this->Transaction_item->reset_fields();
			$this->Transaction_item->set_fields($item);
			$this->Transaction_item->set_field('transaction_id', $transaction_id);
			$this->Transaction_item->set_field('mvt_type', $mvtType);
			$this->Transaction_item->insert();
		}
	}

	public function set_next_auto_number($journalType)
	{
		$query = $this->db->select_max('auto_no', 'nextAutoNo')
			->where('journal_type', $journalType)
			->where("fiscal_year_id", $this->violet_auth->get_fiscal_year_id())
			->get($this->_table);
		$no = ($query->num_rows() > 0 ? _gnv($query->row()->nextAutoNo) : 0);
		return 1 + $no;
	}

	public function fetch_journal_id_by_autono($auto_no, $journalType)
	{
		$query = [
			'select' => "journals.id",
			'where' => [
				["journals.auto_no", $auto_no],
				["{$this->_table}.journal_type", $journalType],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load_all($query);
	}

	public function save_in_journal_accounts($journal_id, $account_id, $auto_no, $total, $mvt_Type, $name, $journal_type)
	{
		$this->load->model('Journal_account');
		$this->Journal_account->reset_fields();
		$this->Journal_account->set_field('journal_id', $journal_id);
		$this->Journal_account->set_field('account_id', $account_id);
		$this->Journal_account->set_field('description', $journal_type . " NO " . $auto_no . " - " . $name);
		$this->Journal_account->set_field('mvt_type', $mvt_Type);
		$this->Journal_account->set_field('amount', $total);
		$this->Journal_account->insert();
		// var_dump($this->Journal_account->get('validationErrors'));
		// exit;
	}

	public function fetch_journal_id_by_transaction_id($trans_id)
	{
		$query = [
			'select' => "journals.id",
			'where' => [
				["journals.transaction_id", $trans_id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}


	public function load_journal_data_by_jonrnal_id($journal_id)
	{
		$query = [
			'select' => "journals.*",
			'where' => [
				["journals.id", $journal_id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()],
			]
		];
		return $this->load($query);
	}


	public function paginate_accounts_activity($account_id)
	{
		$fiscal_year = $this->violet_auth->get_fiscal_year_id();
		$query = [
			'select' => [
				["accounts.account_number , accounts.account_name "],
				["journals.journal_type,journals.auto_no,journals.journal_date,journals.currency_rate"],
				["currencies.currency_code"],
				["journals.amount as total"],
				["journals.id"]
			],
			'join' => [
				['currencies', 'currencies.id = journals.currency_id', 'inner'],
				['accounts', 'accounts.id = journals.account_id', 'inner'],
				['transactions', 'transactions.id = journals.transaction_id', 'left']
			],
			'where' => [
				"{$this->_table}.fiscal_year_id= $fiscal_year AND (journals.account_id = $account_id OR journals.account2_id = $account_id)"
			],
			'order_by' => [['account_number', 'ASC']]
		];
		return parent::paginate($query, ['uri_segment' => 4, 'urlPrefix' => '']);
	}

	public function load_accounts_activity_data_tables($account_id)
	{
		$fiscal_year = $this->violet_auth->get_fiscal_year_id();
		$dt = [
			'columns' => [
				"accounts.account_number", "accounts.account_name",
				"journals.journal_type", "journals.auto_no", "journals.journal_date", "journals.currency_rate",
				"currencies.currency_code",
				["journals.amount", "total"],
				"journals.id"
			], 'query' => [
				'join' => [
					['currencies', 'currencies.id = journals.currency_id', 'inner'],
					['accounts', 'accounts.id = journals.account_id', 'inner'],
					['transactions', 'transactions.id = journals.transaction_id', 'left']
				],
				'where' => [
					"{$this->_table}.fiscal_year_id= $fiscal_year AND (journals.account_id = $account_id OR journals.account2_id = $account_id)"
				]
			],

			'search_in' => ['accounts.account_number', 'accounts.account_name', 'journals.auto_no']
		];
		$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}

	public function bulk_add_receipts_for_invoices($trans_ids, $amounts,$cash_date)
	{
		$this->load->model('Transaction');
		$this->load->model('Account');
		foreach ($trans_ids as $k => $id) {
			$invoice = $this->Transaction->fetch_transaction_data($id);
			$account2_id = $this->Account->get_cash_account_by_currency_id($invoice['currency_id']);
			$auto_no = $this->Journal->set_next_auto_number(Journal::ReceiptJournalType);
			$data = array(
				'auto_no' => $auto_no,
				'account_id' => $invoice['account_id'],
				'account2_id' => $account2_id["id"],
				'journal_date' => $cash_date,
				'currency_id' => $invoice['currency_id'],
				'currency_rate' => $invoice['currency_rate'],
				'amount' => $amounts[$k],
				'journal_type' => Journal::ReceiptJournalType,
				'fiscal_year_id' => $this->violet_auth->get_fiscal_year_id(),
				'user_id' => $this->violet_auth->get_user_id()
			);
			$query = $this->db->insert('journals', $data);
			$journal_id = $this->fetch_journal_id_by_autono($auto_no, Journal::ReceiptJournalType);
			$name1 = $this->Account->fetch_account_name_by_id($invoice['account_id']);
			$name2 = $account2_id["account_name"];
			$this->save_in_journal_accounts($journal_id["0"]["id"], $invoice['account_id'], $auto_no, $amounts[$k], "-1", $name1["0"]["account_name"], "Receipt");
			$this->save_in_journal_accounts($journal_id["0"]["id"], $account2_id["id"], $auto_no, $amounts[$k], "1", $name2, "Receipt");

			//update balance debit credit for account 1
			$balance = $this->Journal->calculate_account_balance($invoice['account_id'])["total"];
			$credit = $this->Journal->calculate_account_credit($invoice['account_id'])["total"];
			$debit = $this->Journal->calculate_account_debit($invoice['account_id'])["total"];
			$this->Account->update_account_credit_debit_balance($invoice['account_id'], $balance, $credit, $debit);
			//update balance debit credit for account 2
			$balance = $this->Journal->calculate_account_balance($account2_id["id"])["total"];
			$credit = $this->Journal->calculate_account_credit($account2_id["id"])["total"];
			$debit = $this->Journal->calculate_account_debit($account2_id["id"])["total"];
			$this->Account->update_account_credit_debit_balance($account2_id["id"], $balance, $credit, $debit);
		}
	}

	public function fetch_invoice_amount_by_trans_auto_no($invoice_nb)
	{
		$this->db->select('amount');
		$this->db->from('journals');
		$this->db->join('transactions', 'transactions.id = journals.transaction_id');
		$this->db->where_in('transactions.trans_type', ["SA","EX"]);
		$this->db->where('transactions.auto_no', $invoice_nb);
		$this->db->where('transactions.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_journal_type_by_journal_id($journal_id)
	{
		$this->db->select('journals.journal_type');
		$this->db->from('journals');
		$this->db->where('journals.id', $journal_id);
		$this->db->where('journals.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$result = $this->db->get()->row_array()["journal_type"];
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
		if ($result == "RE") {
			$trans = "receipts";
		}
		if ($result == "PA") {
			$trans = "payments";
		}
		return $trans;
	}

	public function fetch_trans_id_by_journal_id($journal_id)
	{
		$this->db->select('journals.transaction_id');
		$this->db->from('journals');
		$this->db->where('journals.id', $journal_id);
		$this->db->where('journals.fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$query = $this->db->get()->row_array()["transaction_id"];
		return $query;
	}

	public function calculate_account_balance($account_id)
	{
		$query = [
			'select' => [
				["SUM(journal_accounts.amount * mvt_type) as total"]
			],
			'join' => [
				['journal_accounts', 'journal_accounts.journal_id = journals.id', 'inner'],
			],
			'where' => [
				["journal_accounts.account_id", $account_id],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load($query);
	}

	public function calculate_account_credit($account_id)
	{
		$query = [
			'select' => [
				["SUM(journal_accounts.amount) as total"]
			],
			'join' => [
				['journal_accounts', 'journal_accounts.journal_id = journals.id', 'inner'],
			],
			'where' => [
				["journal_accounts.account_id", $account_id],
				["journal_accounts.mvt_type", 1],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load($query);
	}

	public function calculate_account_debit($account_id)
	{
		$query = [
			'select' => [
				["SUM(journal_accounts.amount) as total"]
			],
			'join' => [
				['journal_accounts', 'journal_accounts.journal_id = journals.id', 'inner'],
			],
			'where' => [
				["journal_accounts.account_id", $account_id],
				["journal_accounts.mvt_type", -1],
				["{$this->_table}.fiscal_year_id", $this->violet_auth->get_fiscal_year_id()]
			]
		];
		return $this->load($query);
	}

	public function load_account_history($account_id)
	{
		$fiscal_year = $this->violet_auth->get_fiscal_year_id();
		$query = [
			'select' => [
				["accounts.account_number , accounts.account_name "],
				["journals.journal_type,journals.auto_no, DATE_FORMAT(journals.journal_date,'%d-%m-%Y') as  journal_date,journals.currency_rate"],
				["currencies.currency_code"],
				["journals.amount as total"],
				["journals.id"]
			],
			'join' => [
				['currencies', 'currencies.id = journals.currency_id', 'inner'],
				['accounts', 'accounts.id = journals.account_id', 'inner'],
				['transactions', 'transactions.id = journals.transaction_id', 'left']
			],
			'where' => [
				"{$this->_table}.fiscal_year_id= $fiscal_year AND (journals.account_id = $account_id OR journals.account2_id = $account_id)"
			],
			'order_by' => [['journals.journal_date, id', 'ASC']]
		];
		return $this->load_all($query);
	}
}
