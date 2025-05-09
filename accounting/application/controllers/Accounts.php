<?php
defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Account $Account
 * @property Journal $Journal
 * @property Transaction $Transaction
 */
class Accounts extends MY_Controller
{

	public $Account = NULL;
	public $Currency = NULL;

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('accounts');
		$this->load->model('Account');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Account->load_accounts_data_tables());
		} else {
			// $this->pageTitle = $this->lang->line('accounts');
			$data['records'] = $this->Account->paginate_accounts();
			$data['title'] = $this->lang->line('accounts');
			$this->load->view('templates/header', [
				'_page_title' => $this->lang->line('accounts'),
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('accounts/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'accounts/index']]);
		}
	}

	public function add()
	{
		$this->save(0,  $this->lang->line('add_account'));
	}

	public function edit($id = '0')
	{
		$this->save($id, $this->lang->line('edit_account'));
	}

private function save($id = '0', $page_title)
	{
		$fetched = ($id > 0 ? $this->Account->fetch(_gnv($id)) : false);
		$post = $this->input->post(null, true);

		if (!empty($post)) {
			$post['phone'] =  "+" . $post['country_phone'] . $post['phone'];
			if ($post['phone2'] != "") {
				$post['phone2'] = "+" . $post['country_phone2'] . $post['phone2'];
			}
			unset($post['country_phone']);
			unset($post['country_phone2']);
			if (empty($id)) {
				// var_dump($post);
				// exit;
				$post["account_number"] = $this->Account->generate_autonumber($post["account_type"]);
				$this->Account->set_fields($post);
				$this->Account->set_field('balance', $post["open_balance"]);
				$this->Account->set_field('credit', "0");
				$this->Account->set_field('debit', "0");
			} else {

				$this->Account->set_fields($post);
			}
			$saved = $fetched ? $this->Account->update() : $this->Account->insert();
			if ($saved) {
				redirect('accounts/index');
			} elseif ($this->Account->is_valid()) {
				redirect('accounts/index');
			}
		}
		if ($fetched) {
			$data['opening_date'] = $this->Account->get_field('opening_date');
			$data['open_balance'] = $this->Account->get_field('open_balance');
			$data['country'] = $this->Account->get_field('country');
			$data['currency_id'] = $this->Account->get_field('currency_id');
		} else {
			$data['opening_date'] =  date("d-m-Y");
			$data['open_balance'] = 0;
			$data['country'] = "LB";
			$this->load->model('Currency');
			$data['currency_id'] = $this->Currency->fetch_currency_id_by_code("USD")["id"];
		}
		$this->load->model('Currency');
		$data['currenciesList'] = $this->Currency->load_currencies_list();
		$data['account_type'] = array(
			"Customer" => "Customer", "Supplier" => "Supplier",
			"Cash" => "Cash", "Expenses" => "Expenses",
			"Bank" => "Bank", "Sale VAT" => "Sale VAT",
			"Purchase VAT" => "Purchase VAT"
		);
		$data['title'] =  $page_title;
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $page_title
		]);
		$this->load->view('accounts/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'bootstrap-select.min', 'bootstrap-select-country.min', 'accounts/form', 'accounts/generate'
			]
		]);
	}

	public function delete($id)
	{
		$this->load->model('Journal');
		$active = $this->Journal->paginate_accounts_activity($id);
		if ($active === []) {
			$account_type = $this->Account->fetch_account_type($id)["account_type"];
			if ($account_type === "Purchases") {
				$this->session->set_flashdata('message', $this->lang->line('acc_type_cant_be_deleted'));
				redirect('accounts/index');
			} else {
				if ($account_type === "Sales") {
					$this->session->set_flashdata('message', $this->lang->line('acc_type_cant_be_deleted'));
					redirect('accounts/index');
				} else {
					if ($account_type === "Cash") {
						$this->session->set_flashdata('message', $this->lang->line('acc_type_cant_be_deleted'));
						redirect('accounts/index');
					} else {
						if ($this->Account->delete($id)) {
							redirect('accounts/index');
						} else {
							redirect('accounts/index');
						}
					}
				}
			}
		} else {
			$this->session->set_flashdata('message', $this->lang->line('acc_active_cant_be_deleted'));
			redirect('accounts/index');
		}
	}

	public function fetchaccountnumberfromDatabase()
	{
		$whatselected = $this->input->post('whatselected');
		$this->Account->generate_autonumber($whatselected);
		echo $this->Account->generate_autonumber($whatselected);
	}

	public function activity($id)
	{
		$this->load->model("Journal");
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Journal->load_accounts_activity_data_tables($id));
		} else {
			// $this->pageTitle = $this->lang->line('accounts');
			$data['records'] = $this->Journal->paginate_accounts_activity($id);
			$data['account_id'] = $id;
			$this->load->view('templates/header', [
				'_page_title' => $this->lang->line('accounts'),
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('accounts/activity', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'accounts/activity']]);
		}
	}

	public function filter($account_type)
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Account->load_filtered_accounts_data_tables($account_type));
		} else {
			// $this->pageTitle = $this->lang->line('accounts');
			$data['records'] = $this->Account->paginate_filtered_accounts($account_type);
			$data['title'] = $this->lang->line('accounts');
			$this->load->view('templates/header', [
				'_page_title' => $this->lang->line('accounts'),
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('accounts/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'accounts/index']]);
		}
	}

	public function add_edit_account_by_modal()
	{
		$form_data = $this->input->post('form_data');
		$inputs = [];
		foreach ($form_data as $d) {
			$inputs[$d["name"]] = $d["value"];
		}
		$inputs['phone'] =  "+" . $inputs['country_phone'] . $inputs['phone'];
		if ($inputs['phone2'] != "") {
			$inputs['phone2'] = "+" . $inputs['country_phone2'] . $inputs['phone2'];
		}
		unset($inputs['country_phone']);
		unset($inputs['country_phone2']);

		if ($inputs["id"] === '') {
			try {
				$inputs["account_number"] = $this->Account->generate_autonumber($inputs["account_type"]);
				$this->Account->set_fields($inputs);
				$this->Account->set_field('credit', "0");
				$this->Account->set_field('debit', "0");
				$saved = $this->Account->insert();
				if ($saved) {
					$acc_data['id'] =  $this->Account->get_field('id');
					$acc_data['account_number'] =  $this->Account->get_field('account_number');
					$this->_render_json(
						$acc_data
					);
				} else {
					echo "error";
				}
			} catch (Exception $e) {
				echo 'Message: ' . $e->getMessage();
			}
		} else {
			$this->Account->set_fields($inputs);
			$saved = $this->Account->update();
			if ($saved) {
				$acc_data['id'] =  $this->Account->get_field('id');
				$acc_data['account_number'] =  $this->Account->get_field('account_number');
				$this->_render_json(
					$acc_data
				);
			} else {
				echo "error";
			}
		}
	}


	public function get_account_edit_modal_data()
	{
		$acc_id = $this->input->post('acc_id');
		$acc_data = $this->Account->fetch_account_data($acc_id);
		$this->_render_json(
			$acc_data
		);
	}

	public function get_account_id()
	{
		$account_number = $this->input->post('account_number');
		$acc_id = $this->Account->fetch_account_id($account_number)["id"];
		echo $acc_id;
	}

	public function get_account_balance()
	{
		$acc_id = $this->input->post('acc_id');
		$acc_balance = $this->Account->fetch_account_balance($acc_id)["balance"];
		echo $acc_balance;
	}

	public function get_journal_type()
	{
		$journal_id = $this->input->post('journal_id');
		$this->load->model(['Journal']);
		$result = $this->Journal->fetch_journal_type_by_journal_id($journal_id);
		echo ($result);
	}

	public function get_journal_or_trans_id()
	{
		$journal_id = $this->input->post('journal_id');
		$this->load->model(['Journal']);
		$result = $this->Journal->fetch_trans_id_by_journal_id($journal_id);
		echo ($result);
	}

	public function search($account_id = null)
	{

		$data['account_id'] = $account_id;


		$data['title'] = $this->lang->line('search_accounts');
		$this->load->view('templates/header', [
			'_page_title' => $this->lang->line('search_accounts')
		]);
		$this->load->view('accounts/search', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['jquery.autocomplete.min']]);
	}

	public function lookup_seatch_accounts()
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->search_accounts_suggestions(trim($this->input->get('query', true)))
		);
	}

	public function get_account_by_id()
	{
		$this->load->model('Account');
		$this->_render_json(
			$this->Account->fetch_account_data(trim($this->input->get('account_id', true)))
		);
	}

	public function get_account_currency_code()
	{
		$currency_id = $this->input->post('currency_id');
		$this->load->model(['Currency']);
		$name = $this->Currency->fetch_currency_code($currency_id)["currency_code"];
		echo $name;
	}
	
		public function check_phone()
	{
		$phone = $this->input->post('phone');
		$type = $this->input->post('type');
		if ($type == 0) {
			$result = $this->Account->fetch_account_phone($phone);
		} else {
			$id = $this->input->post('id');
			$result = $this->Account->fetch_account_phone_without_this($id, $phone);
		}
		if ($result == null) {
			echo 0;
		} else {
			echo 1;
		}
	}
	
	public function open_customer_whatsapp($acc_id)
	{
		$this->load->model(['Account']);
		$acc = $this->Account->load($acc_id);
		$phone = str_replace('+', '', $acc['phone']);
		redirect("https://wa.me/".$phone);
	}
}
