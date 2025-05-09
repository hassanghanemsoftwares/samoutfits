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
	}

    public function save_trans_in_jounral($auto_no, $trans_id, $account2, $local_currency, $fiscal_year_id, $user_id, $amount){
        $data = array(
            'auto_no' => $auto_no,
            'transaction_id' => $trans_id,
            'account_id' => $this->violet_auth->get_account_id(),
			'account2_id' => $account2['id'],
            'journal_date' => date('d-m-Y'),
			'journal_type' => 'SA',
            'currency_id' => $local_currency,
            'currency_rate' => 1,
			'fiscal_year_id' => $fiscal_year_id,
			'user_id' => $user_id,	
            'amount' => $amount,
            'description' => "SA NO ".$auto_no	
        );
		$this->Journal->set_fields($data);
        $saved = $this->Journal->insert();
        return  $saved;
    }

	//save tran in journal
	public function save_trans_in_jounral_as_user($acc_id,$auto_no, $trans_id, $account2, $local_currency, $fiscal_year_id, $user_id, $amount){
        $data = array(
            'auto_no' => $auto_no,
            'transaction_id' => $trans_id,
            'account_id' => $acc_id,
			'account2_id' => $account2['id'],
            'journal_date' => date('d-m-Y'),
			'journal_type' => 'SA',
            'currency_id' => $local_currency,
            'currency_rate' => 1,
			'fiscal_year_id' => $fiscal_year_id,
			'user_id' => $user_id,	
            'amount' => $amount,
            'description' => "SA NO ".$auto_no	
        );
		$this->Journal->set_fields($data);
        $saved = $this->Journal->insert();
        return  $saved;
    }

    public function save_in_journal_accounts($journal_id, $account_id, $auto_no, $total, $mvt_Type, $name, $journal_type)
	{
        $data = array(
            'journal_id' => $journal_id,
            'account_id' => $account_id,
            'description' => $journal_type . " NO " . $auto_no . " - " . $name,
			'mvt_type' => $mvt_Type,
            'amount' => $total,
        );
        return $this->db->insert('journal_accounts', $data);
	}

    public function calculate_account_balance($account_id, $fiscal_year_id)
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
				["{$this->_table}.fiscal_year_id", $fiscal_year_id]
			]
		];
		return $this->load($query);
	}

	public function calculate_account_credit($account_id, $fiscal_year_id)
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
				["{$this->_table}.fiscal_year_id", $fiscal_year_id]
			]
		];
		return $this->load($query);
	}

	public function calculate_account_debit($account_id, $fiscal_year_id)
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
				["{$this->_table}.fiscal_year_id", $fiscal_year_id]
			]
		];
		return $this->load($query);
	}
}
