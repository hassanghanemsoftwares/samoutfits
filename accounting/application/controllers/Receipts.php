<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Currency $Currency
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Journal $Journal
 */
class Receipts extends MY_Controller
{

	public $Transaction = NULL;
	public $Transaction_item = NULL;
	public $Configuration = NULL;
	public $User = NULL;
	public $Journal = NULL;
	public $Journal_account = NULL;
	public $Order = NULL;
	public $Inbox = NULL;
	public $Warehouse = NULL;

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('Receipt');
		$this->load->model('Journal');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Journal->load_journals_data_tables(Journal::ReceiptJournalType));
		} else {
			// $this->pageTitle = $this->lang->line('Receipt');
			$data['records'] = $this->Journal->paginate_receipt();
			$data['title'] = $this->lang->line('Receipts');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']

			]);
			$this->load->view('receipt/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.datetime.format', 'receipts/index']]);
		}
	}

	public function add()
	{
		$this->save(0, Journal::ReceiptJournalType);
	}

	public function edit($id = '0')
	{
		$this->save($id, Journal::ReceiptJournalType);
	}

	private function save($id = '0', $journalType)
	{
		$fetched = ($id > 0 ? $this->Journal->fetch(_gnv($id)) : false);
		$post = $this->input->post(['trans', 'submitBtn'], true);
		if ((!$fetched) and ($this->Journal->set_next_auto_number($journalType))) {
			$this->Journal->set_field('auto_no', $this->Journal->set_next_auto_number($journalType));
		}
		if ($post['submitBtn']) {
			if ((!$fetched) and ($this->Journal->set_next_auto_number($journalType))) {
				$post['trans']['auto_no'] = $this->Journal->set_next_auto_number($journalType);
			}
			$this->Journal->set_fields($post['trans']);
			$this->Journal->set_field('journal_type', $journalType);
			$this->Journal->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
			$this->Journal->set_field('user_id', $this->violet_auth->get_user_id());
			if ($fetched) {
				$journal = $this->Journal->load_journal_data_by_jonrnal_id($id);
			}
			$saved = $fetched ? $this->Journal->update() : $this->Journal->insert();
			if ($saved) {
				if (!$fetched) {
					$this->load->model('Account');

					$journal_id = $this->Journal->fetch_journal_id_by_autono($post['trans']['auto_no'], $journalType);
					$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
					$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
					$this->Journal->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account_id'], $post['trans']['auto_no'], $post['trans']['amount'], "-1", $name2["0"]["account_name"], "Receipt");
					$this->Journal->save_in_journal_accounts($journal_id["0"]["id"], $post['trans']['account2_id'], $post['trans']['auto_no'], $post['trans']['amount'], "1", $name1["0"]["account_name"], "Receipt");

					//update balance debit credit for account 1
					$balance = $this->Journal->calculate_account_balance($post['trans']['account_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account_id'], $balance, $credit, $debit);
					//update balance debit credit for account 2
					$balance = $this->Journal->calculate_account_balance($post['trans']['account2_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account2_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account2_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account2_id'], $balance, $credit, $debit);
				} elseif ($fetched) {
					$this->load->model('Account');

					//update Journal accounts
					$this->load->model('Journal_account');
					$journal_acc_ids = $this->Journal_account->fetch_journal_accounts_id_by_journal_id($this->Journal->get_field('id'));
					foreach ($journal_acc_ids as $j) {
						$this->Journal_account->delete($j["id"]);
					}

					$name1 = $this->Account->fetch_account_name_by_id($post['trans']['account_id']);
					$name2 = $this->Account->fetch_account_name_by_id($post['trans']['account2_id']);
					$this->Journal->save_in_journal_accounts($this->Journal->get_field('id'), $post['trans']['account_id'], $post['trans']['auto_no'], $post['trans']['amount'], "-1", $name2["0"]["account_name"], "Receipt");
					$this->Journal->save_in_journal_accounts($this->Journal->get_field('id'), $post['trans']['account2_id'], $post['trans']['auto_no'], $post['trans']['amount'], "1", $name1["0"]["account_name"], "Receipt");

					//update balance debit credit for account 1
					$balance = $this->Journal->calculate_account_balance($post['trans']['account_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account_id'], $balance, $credit, $debit);
					//update balance debit credit for account 2
					$balance = $this->Journal->calculate_account_balance($post['trans']['account2_id'])["total"];
					$credit = $this->Journal->calculate_account_credit($post['trans']['account2_id'])["total"];
					$debit = $this->Journal->calculate_account_debit($post['trans']['account2_id'])["total"];
					$this->Account->update_account_credit_debit_balance($post['trans']['account2_id'], $balance, $credit, $debit);
				}
			}
			if ($this->Journal->is_valid()) {
				redirect('receipts/index');
			}
		}
		$data = $this->_load_related_models($fetched, $journalType);
		//		$this->includes('js/transactions.form', 'js');
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $data['transTypeText']
		]);
		$this->load->view('receipt/receipt_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'transactions/journals_form'
			]
		]);
	}

	private function _load_related_models($fetched, $journalType)
	{
		$data = [];
		$this->load->model(['Currency']);
		$data['transTypeText'] = ($fetched ? 'Edit ' : 'Add New ') . $this->Journal->get_Journal_types_list()[$journalType];
		$data['transType'] = $this->Journal->get_Journal_types_list()[$journalType];
		$data['currenciesList'] = $this->Currency->load_currencies_list();
		if ($fetched) {
			$this->load->model('Account');
			$account = $this->Account->load($this->Journal->get_field('account_id'));
			$data['account'] = "{$account['account_number']} - {$account['account_name']}";
			$account2 = $this->Account->load($this->Journal->get_field('account2_id'));
			$data['account2'] = "{$account2['account_number']} - {$account2['account_name']}";
			$data['journal_date'] = $this->Journal->get_field('journal_date');
		} else {
			$data['account'] = '';
			$data['account2'] = '';
			$data['journal_date'] = date("d-m-Y");
		}
		return $data;
	}

	public function delete($id)
	{
		//update balance debit credit
		$this->load->model('Account');
		$journal = $this->Journal->load_journal_data_by_jonrnal_id($id);

		if ($this->Journal->delete($id)) {
			$this->load->model('Journal_account');
			$journal_acc_ids = $this->Journal_account->fetch_journal_accounts_id_by_journal_id($this->Journal->get_field('id'));
			foreach ($journal_acc_ids as $j) {
				$this->Journal_account->delete($j["id"]);
			}
			//update balance debit credit for account 1
			$balance = $this->Journal->calculate_account_balance($journal['account_id'])["total"];
			$credit = $this->Journal->calculate_account_credit($journal['account_id'])["total"];
			$debit = $this->Journal->calculate_account_debit($journal['account_id'])["total"];
			$this->Account->update_account_credit_debit_balance($journal['account_id'], $balance, $credit, $debit);
			//update balance debit credit for account 2
			$balance = $this->Journal->calculate_account_balance($journal['account2_id'])["total"];
			$credit = $this->Journal->calculate_account_credit($journal['account2_id'])["total"];
			$debit = $this->Journal->calculate_account_debit($journal['account2_id'])["total"];
			$this->Account->update_account_credit_debit_balance($journal['account2_id'], $balance, $credit, $debit);
			redirect('receipts/index');
		} else {
			// $this->add_msg($this->lang->line('record_not_deleted'), 'warning');
			redirect('receipts/index');
		}
	}

	public function lookup_accounts()
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->search_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function lookup_items()
	{
		$this->load->model('Item');
		$this->_render_json(
			$this->Item->search_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function preview($id)
	{
		$this->load->model('Account');
		$this->load->model('Configuration');
		$this->load->model('Currency');
		$data['trans'] = $this->Journal->load_journal_data_by_jonrnal_id($id);
		$data['from_info'] = $this->Account->fetch_account_info($data['trans']["account_id"]);
		$data['to_info'] = $this->Account->fetch_account_info($data['trans']["account2_id"]);
		$data['company_name'] = $this->Configuration->fetch_company_name()["valueStr"];
		$data['company_address'] = $this->Configuration->fetch_company_address()["valueStr"];
		$data['company_phone'] = $this->Configuration->fetch_company_phone()["valueStr"];
		$data['company_email'] = $this->Configuration->fetch_company_email()["valueStr"];
		$data['company_website'] = $this->Configuration->fetch_company_website()["valueStr"];
		$data['currency'] = $this->Currency->fetch_currency_code($data['trans']["currency_id"])["currency_code"];
		$data['title'] = $this->lang->line('Receipt');
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $this->lang->line('Print')
		]);
		$this->load->view('receipt/preview', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min', 'sales/preview'
			]
		]);
	}
}
