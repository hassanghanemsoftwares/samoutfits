<?php

/**
 * @property User $User
 * @property Fiscal_year $Fiscal_year
 * @property CI_Form_validation $form_validation
 */
class Users extends MY_Controller
{
	public $user = NULL;

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('users');
		$this->load->model('User');
		$this->load->model('Account');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->User->load_users_data_tables());
		} else {
			// $this->pageTitle = $this->lang->line('users');
			$data['records'] = $this->User->paginate_users();
			$data['title'] = $this->lang->line('users');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
			]);
			$this->load->view('users/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.fixedHeader.min', 'users/index']]);
		}
	}

	public function add()
	{
		$this->save(0, $this->lang->line('add_user'));
	}

	public function edit($id = '0')
	{
		$this->save($id, $this->lang->line('edit_user'));
	}
	//by mohammad 2024-04-29 start
	public function edit_permissions($user_id=null)
	{
		if ($this->input->is_ajax_request()) {
			$user_id = $this->input->post('id');
			$permissions_array = $this->input->post('permission');
			$permissions = array();
			foreach ($permissions_array as $permission) {
				$row = explode(',', $permission);
				foreach ($row as $per) {
					$permissions[] = array(
						"user_id" => $user_id,
						"permission" => $per
					);
				}
			}
			$delete=$this->User->delete_user_permissions($user_id);
			$result_add=$this->User->add_user_permissions($permissions);
			echo json_encode(array(
				"result"=>true,
				"count"=>$result_add
			));
		} else {
			//get user informations
			$data['user'] = $this->User->get_user($user_id);
			// var_dump($data['user']); exit;
			//get user permissions in db
			$db_permissions = $this->User->get_user_permissions($user_id);
			//format access pages and put in array
			$access_pages = array();
			foreach ($db_permissions as $perm) {
				$access_pages[] = $perm['permission'];
			}
			$data['access_pages'] = $access_pages;
			$page_title = "User Permissions";
			$data["title"] = $page_title;
			$this->load->view('templates/header', [
				'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/permission_cards'],
				'_page_title' => $page_title
			]);
			$this->load->view('users/edit_permissions', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'air-datepicker/js/datepicker.min',
					'air-datepicker/js/i18n/datepicker.en',
					'users/edit_permissions'
				]
			]);
		}
	}
	//by mohammad 2024-04-29 end

	private function save($id = '0', $page_title)
	{
		$fetched = ($id > 0 ? $this->User->fetch(_gnv($id)) : false);

		$post = $this->input->post(null, true);

		$types = ["Admin", "Employee", "Driver"];
		$data["user_type"] = array_combine($types, $types);
		if (!empty($post)) {
			$this->User->set_field('user_name', $post["user_name"]);
			$this->User->set_field('user_email', $post["user_email"]);
			$this->User->set_field('user_type', $post["user_type"]);
			$this->User->set_field('hide', $post["hide"]);
			$this->User->set_field('fiscal_year_id', $post["fiscal_year_id"]);
			$this->User->set_field('user_password', $this->User->encryptPass($post["user_password"]));
			$saved = $fetched ? $this->User->update() : $this->User->insert();
			if ($saved) {
				if (!$fetched) {
				// 	foreach ($post["permissions"] as $p) {
				// 		if ($p !== '') {
				// 			$this->User->add_user_permission($this->User->get_field('id'), $p);
				// 		}
				// 	}
					redirect('users/index');
				} else {
				// 	$this->User->delete_user_permissions($this->User->get_field('id'));
				// 	foreach ($post["permissions"] as $p) {
				// 		if ($p !== '') {
				// 			$this->User->add_user_permission($this->User->get_field('id'), $p);
				// 		}
				// 	}
					redirect('users/index');
				}
			} elseif ($this->User->is_valid()) {
				redirect('users/index');
			}
		}
		if ($fetched) {
			$data["perm0"] = $this->User->check_user_permission($this->User->get_field('id'), "accounts/index")["count"];
			$data["perm1"] = $this->User->check_user_permission($this->User->get_field('id'), "items/index")["count"];
			$data["perm2"] = $this->User->check_user_permission($this->User->get_field('id'), "opening_items/index")["count"];
			$data["perm3"] = $this->User->check_user_permission($this->User->get_field('id'), "missing_products/index")["count"];
			$data["perm4"] = $this->User->check_user_permission($this->User->get_field('id'), "transfers/index")["count"];
			$data["perm5"] = $this->User->check_user_permission($this->User->get_field('id'), "warehouses/inventory")["count"];
			$data["perm6"] = $this->User->check_user_permission($this->User->get_field('id'), "quotations/index")["count"];
			$data["perm7"] = $this->User->check_user_permission($this->User->get_field('id'), "orders/index")["count"];
			$data["perm8"] = $this->User->check_user_permission($this->User->get_field('id'), "sales/index")["count"];
			$data["perm9"] = $this->User->check_user_permission($this->User->get_field('id'), "delivery_notes/index")["count"];
			$data["perm10"] = $this->User->check_user_permission($this->User->get_field('id'), "return_sales/index")["count"];
			$data["perm11"] = $this->User->check_user_permission($this->User->get_field('id'), "sales/receive_cash")["count"];
			$data["perm12"] = $this->User->check_user_permission($this->User->get_field('id'), "order_purchases/index")["count"];
			$data["perm13"] = $this->User->check_user_permission($this->User->get_field('id'), "purchases/index")["count"];
			$data["perm14"] = $this->User->check_user_permission($this->User->get_field('id'), "return_purchases/index")["count"];
			$data["perm15"] = $this->User->check_user_permission($this->User->get_field('id'), "payments/index")["count"];
			$data["perm16"] = $this->User->check_user_permission($this->User->get_field('id'), "receipts/index")["count"];
			$data["perm17"] = $this->User->check_user_permission($this->User->get_field('id'), "journal_accounts/index")["count"];
			$data["perm18"] = $this->User->check_user_permission($this->User->get_field('id'), "warehouses/reports")["count"];
			$data["perm19"] = $this->User->check_user_permission($this->User->get_field('id'), "reports/wakilni_data")["count"];
			$data["perm20"] = $this->User->check_user_permission($this->User->get_field('id'), "reports/daily_pickup")["count"];
			$data["perm21"] = $this->User->check_user_permission($this->User->get_field('id'), "fiscal_years/index")["count"];
			$data["perm22"] = $this->User->check_user_permission($this->User->get_field('id'), "currencies/index")["count"];
			$data["perm23"] = $this->User->check_user_permission($this->User->get_field('id'), "warehouses/index")["count"];
			$data["perm24"] = $this->User->check_user_permission($this->User->get_field('id'), "configurations/index")["count"];
			$data["perm25"] = $this->User->check_user_permission($this->User->get_field('id'), "users/index")["count"];
			$data["perm26"] = $this->User->check_user_permission($this->User->get_field('id'), "users/choose_fiscal_year")["count"];
			$data["perm27"] = $this->User->check_user_permission($this->User->get_field('id'), "profit")["count"];
		} else {
			$data["perm0"] = '1';
			$data["perm1"] = '1';
			$data["perm2"] = '1';
			$data["perm3"] = '1';
			$data["perm4"] = '1';
			$data["perm5"] = '1';
			$data["perm6"] = '1';
			$data["perm7"] = '1';
			$data["perm8"] = '1';
			$data["perm9"] = '1';
			$data["perm10"] = '1';
			$data["perm11"] = '1';
			$data["perm12"] = '1';
			$data["perm13"] = '1';
			$data["perm14"] = '1';
			$data["perm15"] = '1';
			$data["perm16"] = '1';
			$data["perm17"] = '1';
			$data["perm18"] = '1';
			$data["perm19"] = '1';
			$data["perm20"] = '1';
			$data["perm21"] = '1';
			$data["perm22"] = '1';
			$data["perm23"] = '1';
			$data["perm24"] = '1';
			$data["perm25"] = '1';
			$data["perm26"] = '1';
			$data["perm27"] = '1';
		}
		$fiscal_years = $this->User->fetch_all_years();
		foreach ($fiscal_years as $f) {
			$data['fiscal_year'][$f["id"]] = $f["year_name"];
		}
		$data["title"] = $page_title;
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
			'_page_title' => $page_title
		]);
		$this->load->view('users/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'users/form'
			]
		]);
	}

	public function delete($id)
	{
		$active = $this->User->check_if_user_is_active($id);
		if ($active["count"] === "0") {
			if ($this->User->delete($id)) {
				redirect('users/index');
			} else {
				redirect('users/index');
			}
		} else {
			$this->session->set_flashdata('message', $this->lang->line('active_user_cant_be_deleted'));
			redirect('users/index');
		}
	}

	public function login()
	{
		$post = $this->input->post(null, true);
		if (!empty($post)) {
			$this->authenticate();
		}
		$data['title'] = $this->lang->line('login');
		$this->load->view('templates/header', [
			'_page_title' => $data['title']
		]);
		$this->load->view('users/login_form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'users/validation'
			]
		]);
	}

	private function authenticate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run()) {
			$user = $this->User->authenticate();
			if (false !== $user) {
				$this->violet_auth->build_user_session($user);
				$this->session->set_flashdata('user_loggedin', $this->lang->line('You_are_now_logged_in'));
				if ($user["user_type"] === "Driver") {
					redirect('sales/driver_page');
				} else {
					if ($user["user_type"] === "Employee") {
						redirect('sales/index');
					} else {
						redirect('');
					}
				}
			} else {
				$this->session->set_flashdata('message', $this->lang->line('Wrong_Username_Username'));
			}
		}
	}

	public function logout()
	{
		// Unset user data
		$this->session->unset_userdata('vauth_user_logged_in');
		$this->session->unset_userdata('vauth_fiscal_year');
		$this->session->unset_userdata('vauth_user_name');
		$this->session->unset_userdata('vauth_user_id');
		$this->session->unset_userdata('vauth_user_email');
		$this->session->unset_userdata('vauth_fiscal_year_id');
		// Set message
		$this->session->set_flashdata('user_loggedout', $this->lang->line('You_are_now_logged_out'));
		redirect('users/login');
	}

	public function choose_fiscal_year()
	{
		$this->load->model('Fiscal_year');
		$post = $this->input->post(null, true);
		if (!empty($post)) {
			$fiscal_year_id = _gnv($post['fiscal_year_id']);
			$fiscalYear = $this->Fiscal_year->load($fiscal_year_id);
			if (false === $fiscalYear) {
				redirect('users/choose_fiscal_year');
			}
			$this->violet_auth->set_fiscal_year_id($fiscalYear['id']);
			$this->violet_auth->set_fiscal_year($fiscalYear['year_name']);
			$this->load->model('User');
			$this->User->fetch($this->violet_auth->get_user_id());
			$this->User->set_field('fiscal_year_id', $fiscal_year_id);
			$this->User->update();
			redirect('');
		}
		$data['title'] = $this->lang->line('choose_fiscal_year');
		$data['fiscal_year'] = $this->Fiscal_year->load_fiscal_years_list();
		$this->load->view('templates/header', [
			'_page_title' => $data['title']
		]);
		$this->load->view('users/choose_f_year', $data);
		$this->load->view('templates/footer');
	}

	public function set_language($lang)
	{
		$languages = ['arabic' => 'Ar', 'english' => 'En', 'french' => 'Fr'];
		if (in_array($lang, $languages)) {
			$ln = array_search($lang, $languages);
			$this->input->set_cookie(LANG_COOKIE_NAME, $ln, time() + LANG_COOKIE_LIFE);
		}
		redirect('');
	}
}
