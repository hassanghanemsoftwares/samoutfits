<?php
defined('BASEPATH') or die ('No direct script access allowed');

/**
 * @property Item $Item
 * @property User $User
 * @property Account $Account
 */
class Users extends MY_Controller
{

	public $Account = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}

	//register function start
	public function register()
	{
		$data['title'] = $this->lang->line('Sign_up');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
		]);
		$this->load->view('users/register', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'users/register']]);
	}

	//varify otp before check out
	function send_otp()
	{
		$phone = $this->input->post('phone');
		$verification_code = rand(1000, 9999);
		$this->session->set_userdata('verification_code_num2', $verification_code);
		$text = utf8_decode($verification_code . "%20is%20your%20verification%20code%20for%20samoutfits.com");
		$res_code = file_get_contents("https://globesms.net/smshub/api.php?username=s.outfit&password=go@2242&action=sendsms&from=SAM-OUTFITS&to=" . $phone . "&text=" . $text);
		if (trim($res_code) == 'OK: 1') {
			echo json_encode(
				array(
					"result" => true,
					"error" => ""
				)
			);
		} else {
			echo json_encode(
				array(
					"result" => false,
					"error" => "Sorry, Wrong Phone Number Entered!"
				)
			);
		}
	}
	//verify otp before checkout end

	public function verify_opt()
	{
		$otp_code = $this->input->post('otp_code');
		$sended_code = $this->session->userdata('verification_code_num2');
		if ($otp_code == $sended_code) {
			echo json_encode(
				array(
					"result" => true,
					"error" => ""
				)
			);
		} else {
			echo json_encode(
				array(
					"result" => false,
					"error" => "Sorry, Wrong Verification Code Entered!"
				)
			);
		}
	}


	public function signup()
	{
	    redirect('users/register');
		$data['title'] = $this->lang->line('Sign_up');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
		]);
		$this->load->view('users/signup', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'users/signup']]);
	}

	public function confirm()
	{
		$post = $this->input->post(null, true);

		if ($post) {
			$this->load->model('Account');
			$res = $this->Account->check_if_phone_nb_exists("+" . $post["code"] . $post["phone"]);
			// var_dump($res);exit;
			if ($res) {
				$user = $this->User->check_if_acc_id_linked_to_a_customer_user($res['id']);
				if ($user) {
					$this->session->set_flashdata('error_message', $this->lang->line('You_are_already_registered'));
					redirect('users/login');
				} else {
					$verification_code = rand(1000, 9999);
					$this->session->set_userdata('verification_code', $verification_code);
					$text = utf8_decode($verification_code . "%20is%20your%20verification%20code%20for%20samoutfits.com");
					$res_code = file_get_contents("https://globesms.net/smshub/api.php?username=s.outfit&password=go@2242&action=sendsms&from=SAM-OUTFITS&to=" . $post['phone'] . "&text=" . $text);
					if (trim($res_code) == 'OK: 1') {
						$name = explode(" ", $res['account_name']);
						if (array_key_exists('0', $name)) {
							$res['first_name'] = $name[0];
						} else {
							$res['first_name'] = '';
						}
						if (array_key_exists('1', $name)) {
							$res['last_name'] = $name[1];
						} else {
							$res['last_name'] = '';
						}
						$account_data = $res;
					} else {
						$this->session->set_flashdata('error_message', 'Sorry, Wrong Phone Number Entered!');
						redirect('users/signup');
					}
				}
			} else {
				$verification_code = rand(1000, 9999);
				$this->session->set_userdata('verification_code', $verification_code);
				$text = utf8_decode($verification_code . "%20is%20your%20verification%20code%20for%20samoutfits.com");
				$res_code = file_get_contents("https://globesms.net/smshub/api.php?username=s.outfit&password=go@2242&action=sendsms&from=SAM-OUTFITS&to=" . $post['phone'] . "&text=" . $text);
				if (trim($res_code) == 'OK: 1') {
					$account_data = null;
				} else {
					$this->session->set_flashdata('error_message', 'Sorry, Wrong Phone Number Entered!');
					redirect('users/signup');
				}
			}
			$this->session->set_userdata('register', $account_data);
			$data["phone"] = "+" . $post["code"] . $post["phone"];
			$data["password"] = $post["password"];
			// var_dump($post);
			$data['title'] = $this->lang->line('Confirm');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => []
			]);
			$this->load->view('users/confirm', $data);
			$this->load->view('templates/footer', ['_moreJs' => []]);
		} else {
			redirect('users/signup');
		}
	}

	public function personal_info()
	{
		$data['account_data'] = $this->session->userdata('register');

		$verification_code = $this->session->userdata('verification_code');
		$post = $this->input->post(null, true);

		if ($post) {
			if ($verification_code == $post['code']) {
				$data["phone"] = $post["phone"];
				$data["password"] = $post["password"];
				$data['title'] = $this->lang->line('Personal_Info');
				$this->load->view('templates/header', [
					'_page_title' => $data['title'],
					'_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
				]);
				$this->load->view('users/personal_info', $data);
				$this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'users/personal_info']]);
			} else {
				$this->session->set_flashdata('error_message', 'Sorry, Wrong Verification Code Entered!');
				redirect('users/signup');
			}
		} else {
			redirect('users/signup');
		}
	}

	// public function address()
	// {
	// 	$data['account_data'] = $this->session->userdata('register');
	// 	$data['country'] = ($data['account_data']) ? $data['account_data']['country'] : 'LB';
	// 	$post = $this->input->post(null, true);
	// 	if ($post) {
	// 		$data["info"] = $post;
	// 		$data['title'] = $this->lang->line('Address');
	// 		$this->load->view('templates/header', [
	// 			'_page_title' => $data['title'],
	// 			'_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
	// 		]);
	// 		$this->load->view('users/address', $data);
	// 		$this->load->view('templates/footer', ['_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'users/address']]);
	// 	} else {
	// 		redirect('users/signup');
	// 	}
	// }

	public function check_phone()
	{
		$phone = $this->input->post('phone');
		$type = $this->input->post('type');
		$this->load->model('Account');
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

	public function save_ecomerce_user_and_account()
	{
		$account = $this->session->userdata('register');

		// var_dump($data);
		// exit;
		$post = $this->input->post(null, true);
		if ($post) {
			$this->load->model('Account');
			if ($account) {
				$res = $this->Account->update_user_account($account['id'], $post);
				$user_id = $this->User->create_ecomerce_user($account['id'], $post);
				if ($user_id !== '') {
					$user = $this->User->load_all_user_data($user_id);
					$this->violet_auth->build_user_session($user);
					redirect('home/index');
				}
			} else {
				$acc_id = $this->Account->create_account_for_user($post);
				if ($acc_id !== '') {
					$user_id = $this->User->create_ecomerce_user($acc_id, $post);
					if ($user_id !== '') {
						$user = $this->User->load_all_user_data($user_id);
						$this->violet_auth->build_user_session($user);
						$this->session->set_flashdata('message', 'Registeration Complete: You Are Now Logged In Successfully.');
						redirect('home/index');
					}
				}
			}
		} else {
			$this->session->set_flashdata('error_message', 'Sorry, Something Went Wrong!');
			redirect('users/signup');
		}
	}


	//affter register save data
	public function register_ecomerce_user_and_account()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$this->load->model('Account');
			// var_dump($post); exit;
			$phone_without_code = $this->input->post('phone');

			$firstTwoCharsOfPhone = substr($phone_without_code, 0, 2); // Get the first two characters

			if ($firstTwoCharsOfPhone === '03' && $this->input->post('code') == 961) {
				$phone_without_code = '3' . substr($phone_without_code, 2); // Replace with '99' and concatenate the rest of the string
			}

			$phone_string = "+" . $this->input->post('code') . $phone_without_code;
			$phone = str_replace(' ', '', $phone_string);
			$info = array(
				"fname" => $this->input->post('fname'),
				"lname" => $this->input->post('lname'),
				'phone' => $phone,
				'phone2' => str_replace(' ', '', $this->input->post('phone2_code') . $this->input->post('phone2')),
				'email' => $this->input->post('email'),
				'country' => $this->input->post('country_val'),
				'city' => $this->input->post('city'),
				'place' => null,
				'street' => null,
				'building' => null,
				'floor' => null,
				'direction' => $this->input->post('direction')
			);
			// var_dump($info); exit;

			$acc_id = $this->Account->create_account_for_user($info);
			if ($acc_id !== '') {
				$user_data = array(
					"password" => $this->input->post('password'),
					"fname" => $this->input->post('fname'),
					"lname" => $this->input->post('lname'),
					"birthdate" => null,
				);
				$user_id = $this->User->create_ecomerce_user($acc_id, $user_data);
				if ($user_id !== '') {
					$user = $this->User->load_all_user_data($user_id);
					$this->violet_auth->build_user_session($user);
					$this->session->set_flashdata('message', 'Registeration Complete: You Are Now Logged In Successfully.');
					redirect('home/index');
				}
			}
		} else {
			$this->session->set_flashdata('error_message', 'Sorry, Something Went Wrong!');
			redirect('users/register');
		}
	}

	public function login()
	{
		$post = $this->input->post(null, true);
		$data['phone'] = $data['password'] = '';
		// var_dump($post);exit;
		if (!empty ($post)) {
			$data['phone'] = $post['phone'];
			$data['password'] = $post['password'];
			$this->authenticate();
		}
		$data['title'] = $this->lang->line('login');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['bootstrap-select.min', 'bootstrap-select-country.min']
		]);
		$this->load->view('users/login', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => ['bootstrap-select.min', 'bootstrap-select-country.min', 'users/login',]
		]);
	}

	private function authenticate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		// var_dump($this->form_validation->run());
		// exit;
		if ($this->form_validation->run()) {
			$user = $this->User->authenticate();
			// var_dump($user);
			// exit;
			if (false !== $user) {
				$this->violet_auth->build_user_session($user);
				$this->session->set_flashdata('message', $this->lang->line('You_are_now_logged_in'));
				redirect('home/index');
			} else {
				$this->session->set_flashdata('message', '*' . $this->lang->line('You_enter_a_wrong_"Username"_or_"Password"') . '*');
				// redirect('users/login');
			}
		}
	}

	public function logout()
	{
		// Unset user data
		$this->session->unset_userdata('sam_user_logged_in');
		$this->session->unset_userdata('sam_user_id');
		$this->session->unset_userdata('sam_account_id');
		$this->session->unset_userdata('sam_first_name');
		$this->session->unset_userdata('sam_last_name');
		$this->session->unset_userdata('sam_birthdate');
		$this->session->unset_userdata('sam_profile_image');
		// Set message
		$this->session->set_flashdata('user_loggedout', $this->lang->line('You_are_now_logged_out'));
		redirect('users/login');
	}

	public function add_item_to_customer_wishlist()
	{
		if ($this->violet_auth->is_logged_in()) {
			$item_id = $this->input->post('item_id');
			$count = $this->User->check_if_user_id_and_item_id_exists($item_id, $this->violet_auth->get_user_id())['count'];
			if ($count === "0") {
				$this->User->add_item_to_wishlist($item_id);
				echo (1);
			} else {
				echo (2);
			}
		} else {
			echo (0);
		}
	}

	public function update_user_shipping_address()
	{
		$post = $this->input->post(null, true);
		if ($post) {
			$updated = $this->User->update_user_address($post);
			if ($updated) {
				$this->session->set_flashdata('msg', $this->lang->line('Shipping_Address_Updated_Successfuly'));
				redirect('accounts/shipping_address');
			} else {
				$this->session->set_flashdata('error_msg', $this->lang->line('Oops_Something_Went_Wrong!'));
				redirect('accounts/shipping_address');
			}
		} else {
			$this->session->set_flashdata('error_msg', $this->lang->line('Oops_Something_Went_Wrong!'));
			redirect('accounts/shipping_address');
		}
	}

	public function update_user_personal_info()
	{
		$post = $this->input->post(null, true);
		$personal_info = $post["info"];
		if ($post) {
			$data['filenames'] = [];

			if (!empty ($_FILES['attachment']['name'])) {
				// Set preference
				$config['upload_path'] = './profile_images';
				$config['allowed_types'] = 'jpg|jpeg|png';
				$config['max_size'] = '20000'; // max_size in KB
				$config['file_name'] = $_FILES['attachment']['name'];
				// var_dump($config['upload_path']);
				//Load upload library
				$this->load->library('upload', $config);
				// File upload

				if ($this->upload->do_upload('attachment')) {
					// Get data about the file
					$uploadData = $this->upload->data();
					$filename = $uploadData['file_name'];

					// Initialize array
					$data['filenames'] = $filename;
				} else {
					$data['filenames'] = '';
					$errors = array('error' => $this->upload->display_errors());
				}
				$personal_info["profile_image"] = $data['filenames'];
			}
			$updated = $this->User->update_user_personal_info($personal_info);
			if ($updated) {
				$acc_info = $post['account'];
				$acc_info['account_name'] = $post["info"]['first_name'] . " " . $post["info"]['last_name'];
				$saved = $this->User->update_account_personal_info($acc_info);
				if ($saved) {
					$user_data = [
						'sam_first_name' => $personal_info['first_name'],
						'sam_last_name' => $personal_info['last_name'],
						'sam_birthdate' => $personal_info['birthdate'],
					];
					if (isset ($personal_info["profile_image"])) {
						if ($post['old_profile_image']) {
							unlink('profile_images/' . $post['old_profile_image']);
						}
						$user_data['sam_profile_image'] = $personal_info["profile_image"];
					}
					$this->session->set_userdata($user_data);
					$this->session->set_flashdata('message', $this->lang->line('Updated_Successfully'));
					redirect('accounts/edit');
				} else {
					$this->session->set_flashdata('message', $this->lang->line('Oops_Something_Went_Wrong!'));
					redirect('accounts/edit');
				}
			} else {
				$this->session->set_flashdata('message', $this->lang->line('Oops_Something_Went_Wrong!'));
				redirect('accounts/edit');
			}
		} else {
			$this->session->set_flashdata('message', $this->lang->line('Oops_Something_Went_Wrong!'));
			redirect('accounts/edit');
		}
	}
}
