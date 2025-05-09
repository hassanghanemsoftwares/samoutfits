<?php

/**
 * @property MY_Controller $ci
 */
class Violet_auth
{

	public function __construct()
	{
		$this->ci = &get_instance();
	}

	private $login_uri = 'users/login';

	public function get_login_uri()
	{
		return $this->login_uri;
	}

	public function build_user_session($user)
	{
		$data = [
			'sam_user_id' => $user['id'],
			'sam_account_id' => $user['account_id'],
			'sam_first_name' => $user['first_name'],
			'sam_last_name' => $user['last_name'],
			'sam_birthdate' => $user['birthdate'],
			'sam_profile_image' => $user['profile_image'],
			'sam_user_logged_in' => true
		];
		return $this->ci->session->set_userdata($data);
	}

	public function is_logged_in()
	{
		return true === $this->ci->session->userdata('sam_user_logged_in');
	}

	public function get_user_id()
	{
		return $this->ci->session->userdata('sam_user_id');
	}

	public function get_user_name()
	{
		return $this->ci->session->userdata('sam_first_name') . " " . $this->ci->session->userdata('sam_last_name');
	}

	public function get_first_name()
	{
		return $this->ci->session->userdata('sam_first_name');
	}

	public function get_last_name()
	{
		return $this->ci->session->userdata('sam_last_name');
	}

	public function get_birthdate()
	{
		return $this->ci->session->userdata('sam_birthdate');
	}

	public function get_account_id()
	{
		return $this->ci->session->userdata('sam_account_id');
	}

	public function get_user_profile_image()
	{
		return $this->ci->session->userdata('sam_profile_image');
	}

	public function get_all_subcategories()
	{
		$this->ci->db->select('items.category, items.sub_category');
		$this->ci->db->from('items');
		$this->ci->db->where_in('items.category', ['Sunglasses', 'Shoes', 'Bags & Wallets', 'Bracelets & Necklaces', 'Bracelets', 'Clothing', 'Hats', 'Perfume', 'Hair & Skin Products', 'Socks', 'Other']);
		// $this->ci->db->where('items.sub_category IS NOT NULL');
		$this->ci->db->group_by('items.category, items.sub_category');
		$query = $this->ci->db->get()->result_array();
		$res = [];
		foreach ($query as $q) {
			if ($q['sub_category'] !== '0') {
				if ($q['category'] == 'Hats') {
					$res['Caps'][$q['sub_category']] = $q['sub_category'];
				} else {
					$res[$q['category']][$q['sub_category']] = $q['sub_category'];
				}
			}
		}
		return $res;
	}
}
