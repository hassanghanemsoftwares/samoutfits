<?php
defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Item $Item
 * @property Order $Order
 * @property User $User
 * @property Account $Account
 */
class Accounts extends MY_Controller
{
	public $Account = NULL;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	public function index()
	{
		$this->load->model('Order');
		$data['points'] = $this->Order->calculate_user_points();
		$data['title'] = $this->lang->line('Account');
		$this->load->view('templates/account_header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/index', $data);
		$this->load->view('templates/account_footer', ['_moreJs' => []]);
	}

	public function inbox($index = 1)
	{
		$data['page'] = $index;
		$data['previous_page'] = 0;
		$data['pages'] = 1;
		$data['next_page'] = '';
		$limit = 10;
		$offset = (intval($index) - 1) * $limit;
		$data['msgs'] = $this->User->load_all_inbox_msgs_for_customer($limit, $offset);
		$all_msgs = $this->User->load_all_inbox_msgs_for_customer(false, false);
		if ($data['msgs']) {
			$msgs_total = count($all_msgs);
			$data['pages'] = ceil($msgs_total / $limit);
			$data['previous_page'] = intval($index) - 1;
			$data['next_page'] = intval($index) + 1;
			if ($data['pages'] < $data['next_page']) {
				$data['next_page'] = '';
			}
			$max = $offset + $limit;
			if ($max > $msgs_total) {
				$max = $msgs_total;
			}
			$data['pagination_info'] = $offset . " - " . $max . " of " . $msgs_total;
		} else {
			$data['pagination_info'] = '';
		}
		// var_dump(count($data['msgs']));
		// exit;
		$data['title'] = $this->lang->line('Inbox');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/inbox', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}


	public function coupons()
	{
		$this->load->model('User');
		$data['coupons'] = $this->User->load_all_coupons_for_customer();
		$used_coupons = $this->User->load_all_coupons_for_customer_used_in_orders();
		foreach ($used_coupons as $u) {
			$count = 0;
			foreach ($data['coupons'] as $c) {
				if ($u['id'] == $c['id']) {
					$count++;
					break;
				}
			}
			if ($count == 0) {
				$data['coupons'][] = $u;
			}
		}

		$date_now = new DateTime();
		foreach ($data['coupons'] as $k => $c) {
			$usage = $this->User->calculate_how_many_times_coupon_code_is_used_by_customer($c['id'])['count'];
			$expiry_date   = new DateTime($c['expiry_date']);
			if ($date_now > $expiry_date) {
				$data['coupons'][$k]['status'] = 'Expired';
				if ($c['usage_times'] == '0') {
					$data['coupons'][$k]['usage_times'] = '';
				}
			} else {
				if (!$c['usage_times'] == '0') {
					if ($c['usage_times'] <= $usage) {
						$data['coupons'][$k]['status'] = 'Used';
					} else {
						$data['coupons'][$k]['status'] = 'Valid';
					}
				} else {
					$data['coupons'][$k]['usage_times'] = '';
					$data['coupons'][$k]['status'] = 'Valid';
				}
			}
			if ($c['discount_type'] === '0') {
				$data['coupons'][$k]['type'] = '%';
			} else {
				$data['coupons'][$k]['type'] = '$';
			}
		}
		// var_dump($data['coupons']);exit;
		$data['title'] = $this->lang->line('Coupons');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['jquery.dataTables.min']
		]);
		$this->load->view('account/coupons', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['jquery-3.5.1', 'jquery.dataTables.min', 'account/coupon']]);
	}

	public function pending_orders($index = 1)
	{
		$this->orders('pending', $index);
	}
	public function archived_orders($index = 1)
	{
		$this->orders('archived', $index);
	}
	private function orders($order, $index)
	{

		$data['page'] = $index;
		$data['previous_page'] = 0;
		$data['pages'] = 1;
		$data['next_page'] = '';
		$limit = 5;
		$offset = (intval($index) - 1) * $limit;
		$this->load->model(['Order', 'Item']);
		if ($order === 'pending') {
			$all_orders = $this->Order->load_all_customer_pending_orders(false, false);
			$data['orders'] = $this->Order->load_all_customer_pending_orders($limit, $offset);
			$data['title'] = $this->lang->line('Pending_Orders');
		} elseif ($order === 'archived') {
			$all_orders = $this->Order->load_all_customer_archived_orders(false, false);
			$data['orders'] = $this->Order->load_all_customer_archived_orders($limit, $offset);
			// var_dump($data['orders']);exit;
			$data['title'] = $this->lang->line('Archived_Orders');
		}
		if ($data['orders']) {
			$orders_total = count($all_orders);
			$data['pages'] = ceil($orders_total / $limit);
			$data['previous_page'] = intval($index) - 1;
			$data['next_page'] = intval($index) + 1;
			if ($data['pages'] < $data['next_page']) {
				$data['next_page'] = '';
			}
		}
		foreach ($data['orders'] as $order) {
			$data["order_items"][$order['id']] = $this->Order->load_order_items($order['id']);
			$data["total_qty"][$order['id']] = 0;
			$data["total"][$order['id']] = 0;
			foreach ($data["order_items"][$order['id']] as $k => $item) {
				$data["total_qty"][$order['id']] += $item['qty'];
				$data["total"][$order['id']] += ($item['price'] * $item['qty']) * (1 - ($item['discount'] / 100));
				// $images = $this->Item->load_item_images($item['item_id']);
				// if ($images === []) {
				// 	$data["order_items"][$order['id']][$k]['image'] = "no_image.jpg";
				// } else {
				// 	$data["order_items"][$order['id']][$k]['image'] = $images[0]['image_name'];
				// }
			}
			$data["total"][$order['id']] -= $order['discount'];
			if (doubleval($data["total"][$order['id']]) < 0) {
				$data["total"][$order['id']] = 0;
			}
			$data["total"][$order['id']] += $order['delivery_charge'];
		}
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/orders', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}

	public function shipping_address()
	{
		$data['user'] = $this->User->load_all_user_and_account_data($this->violet_auth->get_user_id());
		$data['title'] = $this->lang->line('Shipping_Address');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
		]);
		$this->load->view('account/shipping_address', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'account/shipping_address']]);
	}

	public function questions()
	{
		$data['title'] = $this->lang->line('Q&A');
		$this->load->view('templates/account_header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/questions', $data);
		$this->load->view('templates/account_footer', ['_moreJs' => []]);
	}

	public function administration()
	{
		$data['title'] = $this->lang->line('Administration');
		$this->load->view('templates/account_header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/administration', $data);
		$this->load->view('templates/account_footer', ['_moreJs' => ['account/administration']]);
	}

	public function edit()
	{
		$data['user'] = $this->User->load_all_user_and_account_data($this->violet_auth->get_user_id());
		$data['title'] = $this->lang->line('Edit_Account');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/edit', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['account/edit']]);
	}

	public function wishlist()
	{
		$this->load->model(['Item']);
		$data['wishlist'] = $this->User->load_customer_wishlist();
		foreach ($data['wishlist'] as $k => $item) {
			$images = $this->Item->load_item_images($item['item_id']);
			if ($images === []) {
				$data["wishlist"][$k]['image'] = "no_image.jpg";
			} else {
				$data["wishlist"][$k]['image'] = $images[0]['image_name'];
			}
		}
		$data['title'] = $this->lang->line('Wishlist');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['jquery.dataTables.min']
		]);
		$this->load->view('account/wishlist', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['jquery-3.5.1', 'jquery.dataTables.min', 'account/wishlist']]);
	}

	public function delete_customer_inbox_msg($msg_id)
	{
		$this->load->model('Account');
		$res = $this->Account->hide_customer_inbox_msg($msg_id);
		redirect('accounts/inbox');
	}

	public function delete_item_from_customer_wishlist()
	{
		$item_id = $this->input->post('item_id');
		$res = $this->User->delete_item_from_wishlist($item_id);
		echo ($res);
	}

	public function viewed_items($index)
	{
		$data['page'] = $index;
		$min = ((intval($index) - 1) * 18);
		$max = intval($index) * 17;
		$data['previous_page'] = 0;
		$data['pages'] = 1;
		$data['next_page'] = '';
		$data['viewed_items'] = [];
		if (array_key_exists('recentviewed', $_COOKIE)) {
			$this->load->model('Item');
			$cookie_get = get_cookie('recentviewed');
			$cookieres = unserialize($cookie_get);
			if (array_key_exists($this->violet_auth->get_user_id(), $cookieres)) {
				$count = 0;
				$item_ids = [];
				foreach ($cookieres[$this->violet_auth->get_user_id()] as $item_id) {
					$item_ids[$count] = $item_id;
					$count++;
				}
				$total_items = count($item_ids);
				if ($total_items > 0) {
					for ($x = $min; $x <= $max; $x++) {
						if ($x === $total_items) {
							break;
						}
						$data['viewed_items'][$item_ids[$x]] = $this->Item->load_all_item_data($item_ids[$x]);
					}
					$data['pages'] = ceil($total_items / 18);
					$data['previous_page'] = intval($index) - 1;
					$data['next_page'] = intval($index) + 1;
					if ($data['pages'] < $data['next_page']) {
						$data['next_page'] = '';
					}
				}
			}
		}
		// var_dump($cookieres[$this->violet_auth->get_user_id()]);
		// 		exit;
		$data['title'] = $this->lang->line('Viewed_Items');
		$this->load->view('templates/account_header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/viewed_items', $data);
		$this->load->view('templates/account_footer', ['_moreJs' => ['account/viewed_items']]);
	}

	public function remove_item_from_viewed_items()
	{
		$item_id = $this->input->post('item_id');
		if (array_key_exists('recentviewed', $_COOKIE)) {
			//already set
			$cookie_get = get_cookie('recentviewed');
			$cookieres = unserialize($cookie_get);
			///check product already present
			if (array_key_exists($this->violet_auth->get_user_id(), $cookieres)) {
				if (in_array($item_id, $cookieres[$this->violet_auth->get_user_id()])) {
					foreach ($cookieres[$this->violet_auth->get_user_id()] as $k => $c) {
						if ($c === $item_id) {
							unset($cookieres[$this->violet_auth->get_user_id()][$k]);
							break;
						}
					}
				}
			}
			delete_cookie('recentviewed');
			///again set cookie
			$cookievalue = serialize($cookieres);
			$cookiearr = array(
				'name' => 'recentviewed',
				'value' => $cookievalue,
				'expire' => '86400'
			);
			$this->input->set_cookie($cookiearr);
			echo (1);
		} else {
			echo (0);
		}
	}

	public function send_message_administration()
	{
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');
		$res = $this->User->insert_msg_from_customer_to_inbox($subject, $message);
		echo ($res);
	}

	public function order_details($id)
	{
		$this->load->model(['Order', 'Item']);
		$data['order'] = $this->Order->load_order_data($id);
		// var_dump($data['order']);exit;
		$order_items = $this->Order->load_order_items($id);
		$data['subtotal'] = 0;
		foreach ($order_items as $k => $item) {
			$data['subtotal'] += doubleval($item['qty']) * doubleval($item['price']);
			$images = $this->Item->load_item_images($item['item_id']);
			if ($images === []) {
				$order_items[$k]['image_name'] = "no_image.jpg";
			} else {
				$order_items[$k]['image_name'] = $images[0]['image_name'];
			}
		}
		$data['disc'] = 0;
		$data['total'] = $data['subtotal'];
		if ($data['order']['discount'] != '0') {
			$data['disc'] = "$" . $data['order']['discount'];
			$data['total'] -= doubleval($data['order']['discount']);
		} else {
			if ($order_items) {
				if ($order_items[0]['discount'] != '0') {
					$data['disc'] = $order_items[0]['discount'] . "%";
					$data['total'] = doubleval($data['total']) - ((doubleval($data['total']) * doubleval($order_items[0]['discount'])) / 100);
				}
			}
		}
		$data['order_items'] = $order_items;
		// $data['delivery_charge']  =  5;
		if (doubleval($data['total']) < 0) {
			$data['total'] = 0;
		}
		$data['total'] += doubleval($data['order']['delivery_charge']);
		$data['title'] = $this->lang->line('order_details');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/order_details', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}

	public function get_user_wishlist_count()
	{
		echo count($this->User->load_customer_wishlist());
	}

	public function change_password()
	{
		$data['title'] = $this->lang->line('change_password');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('account/change_password', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['account/change_password']]);
	}

	public function confirm_user_change_password()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$this->load->model(['User']);
			$result = $this->User->check_if_user_password_is_true($post['current_pass']);
			if ($result) {
				$res = $this->User->change_user_password($post['new_password']);
				if ($res) {
					$this->session->set_flashdata('message', 'Password Changed Successfully.');
					redirect('home/index');
				} else {
					$this->session->set_flashdata('error_msg', 'Sorry, Something Went Wrong!');
					redirect('accounts/change_password');
				}
			} else {
				$this->session->set_flashdata('error_msg', 'Sorry, The Current Password Used is Wrong!');
				redirect('accounts/change_password');
			}
		} else {
			$this->session->set_flashdata('error_msg', 'Sorry, Something Went Wrong!');
			redirect('accounts/change_password');
		}
		redirect('accounts/change_password');
	}
}
