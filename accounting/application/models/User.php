<?php

class User extends MY_Model
{

	protected $modelName = 'User';
	protected $_table = 'users';
	protected $_listFieldName = 'id';

	protected $_fieldsNames = ['id', 'user_name', 'user_email', 'user_password', 'user_type', 'fiscal_year_id', 'hide'];

	public function __construct()
	{
		parent::__construct();
		$this->validate = [
			'id' => [
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'rule' => 'numeric',
				'message' => sprintf($this->lang->line('is_numeric_rule'), $this->lang->line('id'))
			],
			'user_name' => [
				'length' => ['required' => true, 'allowEmpty' => false, 'rule' => ['maxLength', 25], 'message' => sprintf($this->lang->line('required__max_length_rule'), 'Username', 255)],
				'unique' => ['required' => true, 'rule' => 'isUnique', 'message' => sprintf($this->lang->line('is_unique_rule'), 'Username')]
			],
			'user_password' => [
				'length' => ['required' => true, 'allowEmpty' => false, 'rule' => ['maxLength', 255], 
				'message' => sprintf($this->lang->line('required__max_length_rule'), 'user_password', 255)],
			],
			'user_type' => [
				'required' => true,
				'allowEmpty' => false,
				'rule' => ['maxLength', 255],
				'message' => sprintf($this->lang->line('max_length_rule'), $this->lang->line('user_type'), 255)
			],
			'user_email' => [
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'rule' => ['maxLength', 255],
				'message' => sprintf($this->lang->line('max_length_rule'), $this->lang->line('user_email'), 255)
			],
			'fiscal_year_id' => [
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'rule' => ['maxLength', 255],
				'message' => sprintf($this->lang->line('max_length_rule'), $this->lang->line('fiscal_year_id'), 255)
			]
		];
	}

	public function paginate_users()
	{
		$query = [
			'select' => "user_name, user_email, user_type, fiscal_years.year_name AS year_name, users.id",
			'join' => [['fiscal_years', 'fiscal_years.id = users.fiscal_year_id', 'left']],
			'where' => [
				["{$this->_table}.hide !=", 1]
			],
			'or_where' => [
				["{$this->_table}.hide IS NULL"]
			],
			'order_by' => [['id', 'ASC']]
		];
		return parent::paginate($query, ['urlPrefix' => '']);
	}

	public function load_users_data_tables()
	{
		$dt = [
			'columns' => [
				'user_name', 'user_email', 'user_type',
				['fiscal_years.year_name', 'year_name'],
				'users.id'
			], 'query' => [
				'join' => [
					['fiscal_years', 'fiscal_years.id = users.fiscal_year_id']
				],
				'where' => [
					["{$this->_table}.hide !=", 1]
				],
				'or_where' => [
					["{$this->_table}.hide IS NULL"]
				]
			],
			'search_in' => ['user_name, user_email, user_type, year_name']
		];
		//$this->remove_indexes_if_search_not_date($dt['search_in'], [0]);
		return parent::load_datatables_pagedata($dt);
	}
	public function fetch_all_years()
	{
		$this->db->order_by('year_name');
		$query = $this->db->get('fiscal_years');
		return $query->result_array();
	}

	public function authenticate()
	{
		$username = $this->input->post('username');
		$password = $this->User->encryptPass($this->input->post('password'));
		$this->db->select('users.*, fiscal_years.year_name')
			->join('fiscal_years', 'fiscal_years.id = users.fiscal_year_id', 'left')
			->where('BINARY(user_name) = ', $username)
			->where('BINARY(user_password) = ', $password);
		$query = $this->db->get('users');
		return ($query && $query->num_rows()) ? $query->row_array() : false;
	}

	public function encryptPass($password)
	{
		$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
		$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
		$method = 'aes-256-cbc';

		$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

		$encrypted = base64_encode(openssl_encrypt($password, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
		return $encrypted;
	}

	public function decryptPass($password)
	{
		$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
		$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
		$method = 'aes-256-cbc';

		$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);

		$decrypted = openssl_decrypt(base64_decode($password), $method, $sSalt, OPENSSL_RAW_DATA, $iv);
		return $decrypted;
	}

	public function check_if_user_is_active($id)
	{
		$this->db->select('COUNT(*) as count');
		$this->db->from('transactions');
		$this->db->where('transactions.user_id', $id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function get_user_type($user_id){
		$this->db->select('user_type');
		$this->db->from('users');
		$this->db->where('users.id', $user_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function get_user_permission($user_type){
		$this->db->select('permission');
		$this->db->from('user_permissions');
		$this->db->where('user_type', $user_type);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function search_suggestions($q = false)
	{
		(false === $q) and ($q = $this->input->post('term', true));
		$query = $this->db->select("id, user_name")
			->from("users")
			->where('user_type =', "Driver")
			->where("user_name LIKE '%$q%'")
			->get();
		if (false !== $query && $query->num_rows() > 0) {
			return $query->result_array();
		}
		return [];
	}

	public function get_user_name($user_id){
		$this->db->select('user_name');
		$this->db->from('users');
		$this->db->where('users.id', $user_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_all_users_with_type_driver(){
		$this->db->select('id, user_name');
		$this->db->from('users');
		$this->db->where('users.user_type', "Driver");
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function load_all_users_with_type_employee(){
		$this->db->select('id, user_name');
		$this->db->from('users');
		$this->db->where('users.user_type', "Employee");
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function fetch_user_permission($user_id){
		$this->db->select('permission');
		$this->db->from('user_permissions');
		$this->db->where('user_permissions.user_id', $user_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function check_user_permission($user_id, $permission){
		$this->db->select('count(*) as count');
		$this->db->from('user_permissions');
		$this->db->where('user_permissions.user_id', $user_id);
		$this->db->where('user_permissions.permission', $permission);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function check_if_user_has_permissions($user_id){
		$this->db->select('count(*) as count');
		$this->db->from('user_permissions');
		$this->db->where('user_permissions.user_id', $user_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function add_user_permission($user_id, $permission){
		$data = array(
			'user_id' => $user_id,
			'permission' => $permission,
		);
		$query = $this->db->insert('user_permissions', $data);
		return $query;
	}

	public function delete_user_permissions($user_id){
		$this->db->where('user_permissions.user_id', $user_id);
		$query = $this->db->delete('user_permissions');
		return $query;
	}

	public function load_all_users(){
		$this->db->select('id, user_name');
		$this->db->from('users');
		$query = $this->db->get()->result_array();
		return $query;
	}
	//by mohammad 2024-04-29 start
	public function get_user($id){
		$this->db->select('users.*');
		$this->db->from('users');
		$this->db->where('users.id',$id);
		$query = $this->db->get()->result_array();
		return $query[0];
	}
	public function get_user_permissions($id){
		$this->db->select('user_permissions.permission');
		$this->db->from('user_permissions');
		$this->db->where('user_permissions.user_id',$id);
		$query = $this->db->get()->result_array();
		return $query;
	}
	public function add_user_permissions($data){
		$add = $this->db->insert_batch('user_permissions', $data);
        $num_affected_rows = $this->db->affected_rows();
        return $num_affected_rows;
	}
	//by mohammad 2024-04-29 end
}
