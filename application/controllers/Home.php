<?php
defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Item $Item
 * @property Section $Section
 */
class Home extends MY_Controller
{

	public $Account = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Item');
	}

 public function index()
    {
        // $data['new_arrivals'] = $this->Item->load_all_items_with_price_and_image('');
        // // var_dump($data['new_arrivals']);
        // // exit;
        // if (!$data['new_arrivals']) {
        //     $data['new_arrivals'] = [];
        // }
        $res = preg_match('/(android|iphone|ipad|ipod|blackberry|windows phone|webos|opera mini|iemobile|mobile)/i', $_SERVER['HTTP_USER_AGENT']);
		$data['screen_case'] = 'desktop';
		if($res){
			$data['screen_case'] = 'mobile';
		}
        $section_order = $this->Item->get_section_order();
        foreach ($section_order as $key => $row) {
            $data['cat'][$key]['banner_nb'] = $row['banner_id'];
              $data['cat'][$key]['cat_id'] = $row['id'];
            $data['cat'][$key]['items'] = $this->Item->load_landing_page_category_items_with_price_and_image($row['cat_name']);
            if (!$data['cat'][$key]['items']) {
                $data['cat'][$key]['items'] = [];
            }
            // $co++;
        }
        //load sections
        $this->load->model('Section');
        $data['sections'] = $this->Section->load_all_sections();
        // var_dump($data['cat']);exit;
        $data['title'] = $this->lang->line('Home');
        $this->load->view('templates/header', [
            '_page_title' => $this->lang->line('home'),
            '_moreCss' => [],
        ]);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer', ['_moreJs' => []]);
    }

	// public function index()
	// {
	// 	$data['new_arrivals'] = $this->Item->load_all_items_with_price_and_image('');
	// 	// var_dump($data['new_arrivals']);
	// 	// exit;
	// 	if (!$data['new_arrivals']) {
	// 		$data['new_arrivals'] = [];
	// 	}
	// 	$data['shoes'] = $this->Item->load_all_items_with_price_and_image('shoes');
	// 	if (!$data['shoes']) {
	// 		$data['shoes'] = [];
	// 	}
	// 	$data['wallets'] = $this->Item->load_all_items_with_price_and_image('Bags & Wallets');
	// 	if (!$data['wallets']) {
	// 		$data['wallets'] = [];
	// 	}
	// 	$data['caps'] = $this->Item->load_all_items_with_price_and_image('Hats');
	// 	if (!$data['caps']) {
	// 		$data['caps'] = [];
	// 	}
	// 	$data['sunglasses'] = $this->Item->load_all_items_with_price_and_image('Sunglasses');
	// 	if (!$data['sunglasses']) {
	// 		$data['sunglasses'] = [];
	// 	}
	// 	$data['perfumes'] = $this->Item->load_all_items_with_price_and_image('Perfume');
	// 	if (!$data['perfumes']) {
	// 		$data['perfumes'] = [];
	// 	}
	// 	$data['clothing'] = $this->Item->load_all_items_with_price_and_image('Clothing');
	// 	if (!$data['clothing']) {
	// 		$data['clothing'] = [];
	// 	}
	// 	$data['bracelets'] = $this->Item->load_all_items_with_price_and_image('Bracelets');
	// 	if (!$data['bracelets']) {
	// 		$data['bracelets'] = [];
	// 	}
	// 	$data['body_care'] = $this->Item->load_all_items_with_price_and_image('Hair & Skin Products');
	// 	if (!$data['body_care']) {
	// 		$data['body_care'] = [];
	// 	}
	// 	$data['socks'] = $this->Item->load_all_items_with_price_and_image('Socks');
	// 	if (!$data['socks']) {
	// 		$data['socks'] = [];
	// 	}
	// 	//load sections
	// 	$this->load->model('Section');
	// 	$data['sections'] = $this->Section->load_all_sections();
	// 	// var_dump($data['sections']);exit;
	// 	$data['title'] = $this->lang->line('Home');
	// 	$this->load->view('templates/header', [
	// 		'_page_title' => $this->lang->line('home'),
	// 		'_moreCss' => []
	// 	]);
	// 	$this->load->view('home/index', $data);
	// 	$this->load->view('templates/footer', ['_moreJs' => []]);
	// }

	public function search($search, $page = 1)
	{		
		$limit = 18;
		$offset = ($page - 1) * $limit;
		$data['search_url'] = $search;
		$search = trim(str_replace("_"," ",$search));
		// var_dump($search);exit;
		$data['results'] = [];
		if ($search) {
			$data['results'] = $this->Item->load_all_items_with_price_and_image_for_search($search, $limit, $offset);
		}
		// var_dump($data['results']);
		// var_dump($this->Item->load_all_items_with_price_and_image_for_search($post['search'], '', ''));
		// exit;
		$all = $this->Item->load_all_items_with_price_and_image_for_search($search, null, null);
		if($all){
			$total = count($all);
		}else{
			$total = 0;
		}	
		$data['pages_count'] = ceil($total / $limit);
		$data['page_nb'] = $page;
		$data['title'] = $this->lang->line('search_results');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('home/search_result', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}

	public function terms_of_use()
	{
		$data['title'] = $this->lang->line('terms_of_use');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('home/terms_of_use', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}


	public function Disclaimer()
	{
		$data['title'] = $this->lang->line('Disclaimer');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('home/Disclaimer', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}

	public function return_policy()
	{
		$data['title'] = $this->lang->line('return_policy');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('home/return_policy', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}

	public function privacy_policy()
	{
		$data['title'] = $this->lang->line('privacy_policy');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('home/privacy_policy', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}

	public function contact_us()
	{
		$data['title'] = $this->lang->line('contact_us');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => []
		]);
		$this->load->view('home/contact_us', $data);
		$this->load->view('templates/footer', ['_moreJs' => []]);
	}
}
