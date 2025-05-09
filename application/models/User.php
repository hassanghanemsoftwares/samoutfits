<?php

class User extends MY_Model
{

	protected $modelName = 'User';
	protected $_table = 'ecommerce_users';
	protected $_listFieldName = 'id';
	protected $_fieldsNames = ['id', 'account_id', 'password', 'first_name', 'last_name', 'birthdate', 'profile_image'];

	public function __construct()
	{
		parent::__construct();
	}

	public function load_all_user_data($user_id)
	{
		$this->db->select('*');
		$this->db->from('ecommerce_users');
		$this->db->where('id', $user_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	//2024-03-07
	//load data as phone
	public function load_user_data_as_phone($phone)
	{
		$this->db->select('ecommerce_users.*');
		$this->db->from('ecommerce_users');
		$this->db->join('accounts','ecommerce_users.account_id=accounts.id','inner');
		$this->db->where('accounts.phone', $phone);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_all_user_and_account_data($user_id)
	{
		$this->db->select('*');
		$this->db->from('ecommerce_users');
		$this->db->join('accounts', 'accounts.id = ecommerce_users.account_id', 'inner');
		$this->db->where('ecommerce_users.id', $user_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function user_account_exit($acc_id){
		$this->db->select('*');
		$this->db->from('ecommerce_users');
		$this->db->where('ecommerce_users.account_id ', $acc_id);
		$query = $this->db->get();
		if($query->num_rows()==0){
			return false;
		}
		return $query->row_array();
	}

	public function authenticate()
	{
		$phone = $this->input->post('phone');
		$password = $this->User->encryptPass($this->input->post('password'));
		$this->db->select('ecommerce_users.*')
			->join('accounts', 'accounts.id = ecommerce_users.account_id', 'left')
			->where('BINARY(phone) = ', $phone)
			->where('BINARY(password) = ', $password);
		$query = $this->db->get('ecommerce_users');
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

	public function create_ecomerce_user($acc_id, $info)
	{
		$this->User->set_field('account_id', $acc_id);
		$this->User->set_field('password', $this->encryptPass($info['password']));
		$this->User->set_field('first_name', $info['fname']);
		$this->User->set_field('last_name', $info['lname']);
		$this->User->set_field('birthdate', $info['birthdate']);
		$saved = $this->User->insert();
		if ($saved) {
			return $this->User->get_field('id');
		} else {
			return '';
		}
	}

	public function load_all_inbox_msgs_for_customer($limit = false, $offset = false)
	{
		$this->db->select('*');
		$this->db->from('inbox');
		$this->db->where('to_user_id', $this->violet_auth->get_user_id());
		$this->db->or_where('to_user_id = from_user_id');
		$this->db->where('hide !=', 1);
		$this->db->order_by('id','DESC');
		if ($limit !== false && $offset  !== false) {
			$this->db->limit($limit, $offset);
		}
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function load_all_coupons_for_customer()
	{
		$this->db->select('*');
		$this->db->from('coupons');
		$this->db->where('customer_id', $this->violet_auth->get_user_id());
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function load_all_coupons_for_customer_used_in_orders(){
		$this->db->select('coupons.*');
		$this->db->from('orders');
		$this->db->join('coupons', 'coupons.id = orders.coupon_id', 'inner');		
		$this->db->where('orders.customer_id', $this->violet_auth->get_user_id());
		$this->db->group_by('coupons.id ');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function add_item_to_wishlist($item_id)
	{
		$data['item_id'] = $item_id;
		$data['customer_id'] = $this->violet_auth->get_user_id();
		$this->db->insert('wishlist', $data);
	}

	public function check_if_user_id_and_item_id_exists($item_id, $user_id)
	{
		$this->db->select('count(*) as count');
		$this->db->from('wishlist');
		$this->db->where('customer_id', $user_id);
		$this->db->where('item_id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_customer_wishlist()
	{
		$this->db->select('*');
		$this->db->from('wishlist');
		$this->db->join('items', 'items.id = wishlist.item_id', 'inner');
		$this->db->where('wishlist.customer_id', $this->violet_auth->get_user_id());
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function update_user_address($new_address)
	{
		$this->db->where('id', $new_address['account_id']);
		$query = $this->db->update('accounts', $new_address['address']);
		return $query;
	}

	public function update_user_personal_info($personal_info)
	{
		$this->db->where('id', $this->violet_auth->get_user_id());
		$query = $this->db->update('ecommerce_users', $personal_info);
		return $query;
	}

	public function update_account_personal_info($personal_info)
	{
		$this->db->where('id', $this->violet_auth->get_account_id());
		$query = $this->db->update('accounts', $personal_info);
		return $query;
	}

	public function delete_item_from_wishlist($item_id)
	{
		$data = array(
			'item_id' => $item_id,
			'customer_id' => $this->violet_auth->get_user_id()
		);
		$query = $this->db->delete('wishlist', $data);
		return $query;
	}

	public function check_customer_coupon($coupon)
	{
		$query = $this->db->select('*')->from('coupons')
			->where('BINARY(coupon) = ', $coupon)
			->group_start()
			->where('customer_id', '1')
			->or_where('customer_id', $this->violet_auth->get_user_id())
			->group_end()
			->get()->row_array();
		return $query;
	}

	//added 2024-03-05 start
	//check coupon on phone number
	public function check_customer_coupon_on_phone($coupon,$phone)
	{
		$query_check_account=$this->db->select('accounts.phone,accounts.id')->from('accounts')->where('accounts.phone',$phone)->get();
	    if($query_check_account->num_rows()==0){
	        $query = $this->db->select('coupons.*')->from('coupons')
			->where('BINARY(coupon) = ', $coupon)
			->where('coupons.customer_id', '1')
			->get()->row_array();
	    } else {
	        $account=$query_check_account->row_array();
	     $query = $this->db->select('coupons.*,accounts.phone')->from('coupons')
		    ->join('ecommerce_users','coupons.customer_id=ecommerce_users.id','left')
			->join('accounts','ecommerce_users.account_id=accounts.id','left')
			->where('BINARY(coupon) = ', $coupon)
			->group_start()
			->where('coupons.customer_id', '1')
			->or_where('accounts.phone', $phone)
			->group_end()
			->get()->row_array();   
	    }
		return $query;
	}
	// added 2024-03-05 end

	public function insert_msg_from_customer_to_inbox($subject, $message)
	{
		$data['subject'] = $subject;
		$data['message'] = $message;
		$data['from_user_id'] = $this->violet_auth->get_user_id();
		$data['to_user_id'] = 1;
		$data['date'] = date('Y-m-d');
		$query = $this->db->insert('inbox', $data);
		return $query;
	}

	public function check_if_acc_id_linked_to_a_customer_user($acc_id)
	{
		$this->db->select('*');
		$this->db->from('ecommerce_users');
		$this->db->where('account_id', $acc_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function calculate_how_many_times_coupon_code_is_used_by_customer($coupon_id)
	{
		$this->db->select('COUNT(*) as count');
		$this->db->from('orders');
		$this->db->where('coupon_id', $coupon_id);
		$this->db->where('customer_id', $this->violet_auth->get_user_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function calculate_how_many_times_coupon_code_is_used_by_customer_on_customer_id($customer_id,$coupon_id)
	{
		$this->db->select('COUNT(*) as count');
		$this->db->from('orders');
		$this->db->where('coupon_id', $coupon_id);
		$this->db->where('customer_id', $customer_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_usage_times_of_customer_coupon_code($coupon_id)
	{
		$this->db->select('usage_times');
		$this->db->from('coupons');
		$this->db->where('id', $coupon_id);
		$this->db->where('customer_id', $this->violet_auth->get_user_id());
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function update_usage_times_of_customer_coupon($coupon_id, $total)
	{
		$data['usage_times'] = $total;
		$this->db->where('id', $coupon_id);
		$this->db->where('customer_id', $this->violet_auth->get_user_id());
		$query = $this->db->update('coupons', $data);
		return $query;
	}

	public function load_coupon_data($coupon_id)
	{
		$this->db->select('*');
		$this->db->from('coupons');
		$this->db->where('id', $coupon_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function fetch_ecommerce_online_user_from_users_table()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_type', 'Ecommerce');
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function change_user_password($new_pass){
		$data = array('password' => $this->encryptPass($new_pass));
		$this->db->where('id', $this->violet_auth->get_user_id());
		$query = $this->db->update('ecommerce_users', $data);
		return $query;
	}

	public function check_if_user_password_is_true($password){
		$this->db->select('id');
		$this->db->from('ecommerce_users');
		$this->db->where('id', $this->violet_auth->get_user_id());
		$this->db->where('password', $this->encryptPass($password));
		$query = $this->db->get()->row_array();
		return $query;
	}
}
