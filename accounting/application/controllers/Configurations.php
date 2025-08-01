<?php

/**
 * @property Configuration $Configuration
 *
 */
class Configurations extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Configuration');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			die("handle ajax request");
		} else {
			$post = $this->input->post(null, true);
			// var_dump($post );exit;
			$rejected_sizes = [];
			$sizes = $this->Configuration->fetch_sizes()["valueStr"];
			if (isset($post['variables'])) {
				$data = $post['variables'];
				if ($sizes !== $post['variables']["sizes"]) {
					$old = explode(",", $sizes);
					$new = explode(",", $post['variables']["sizes"]);
					$diff = array_diff($old, $new);
					$sizes_new = $new;
					foreach ($diff as $d) {
						$count = $this->Configuration->check_if_size_is_active($d)["count"];
						if (intval($count) > 0) {
							array_push($sizes_new, $d);
							array_push($rejected_sizes, $d);
						}
					}
					sort($sizes_new);
					$sizes_new = implode(",", $sizes_new);
					$data["sizes"] = $sizes_new;
				}
				if ($rejected_sizes !== []) {
					$r = implode(",", $rejected_sizes);
					$this->session->set_flashdata('message', '*' . $this->lang->line('Sizes') . ': ' . $r . ' ' . $this->lang->line('can_not_be_deleted') . '*');
				}
				$this->Configuration->save($data);
				redirect('configurations/index');
			}
			// $this->load->model('Currency');
			// var_dump($this->Currency->load_currencies_list());
			// exit;
			$data['configSet1'] = $this->Configuration->load_conf_group_form_elements('set_1', 'has-secondary');
			$data['configSet2'] = $this->Configuration->load_conf_group_form_elements('set_2', 'has-secondary');
			//$data['configSet3'] = $this->Configuration->load_conf_group_form_elements('set_3', 'has-warning');
			// die("This is how you read TestTwo [ {$this->Configuration->get_conf_val('TestTwo')} ]");
			// die("This is how you read all: <pre>" . print_r($this->Configuration->load_configurations(), true) . "</pre>");
			// die("This is how you read some: <pre>" . print_r($this->Configuration->load_configurations(['TestThree']), true) . "</pre>");
			$data['whatsapp_order_confirmation_msg']	= $this->Configuration->fetch_local_whatsapp_order_confirmation_msg()["valueStr"];

			$data['title'] = $this->lang->line('Configurations');
			// var_dump($data);exit;
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/jquery-tag-this']
			]);
			$this->load->view('configurations/form', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'jquery.tagthis',
					'configurations/form'
				]
			]);
		}
	}

	public function get_sizes()
	{
		$sizes = $this->Configuration->fetch_sizes();
		echo ($sizes['valueStr']);
	}

	public function get_categories()
	{
		$categories = $this->Configuration->fetch_categories();
		echo ($categories['valueStr']);
	}

	public function get_status()
	{
		$status = $this->Configuration->fetch_status();
		echo ($status['valueStr']);
	}

	public function get_source()
	{
		$source = $this->Configuration->fetch_source();
		echo ($source['valueStr']);
	}
	public function get_delivery_charge()
	{
		$delivery_charge = $this->Configuration->fetch_delivery_charge();
		echo ($delivery_charge['valueStr']);
	}
	public function get_colors()
	{
		$colors = $this->Configuration->fetch_colors();
		echo ($colors['valueStr']);
	}
	public function get_size_guidances()
	{
		$size_guidances = $this->Configuration->fetch_size_guidances();
		echo ($size_guidances['valueStr']);
	}
	public function get_sub_categories()
	{
		$sub_categories = $this->Configuration->fetch_sub_categories();
		echo ($sub_categories['valueStr']);
	}
}
