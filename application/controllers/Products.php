<?php
defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Item $Item
 * @property Configuration $Configuration
 * @property Transaction $Transaction
 */
class Products extends MY_Controller
{

	public $Products = NULL;
	public $Transaction = NULL;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Item');
	}

	public function view($item_id)
	{
		delete_cookie('recentviewed');
		if (array_key_exists('recentviewed', $_COOKIE)) {
			//already set
			$cookie_get = get_cookie('recentviewed');
			$cookieres = unserialize($cookie_get);
			///check product already present
			if (array_key_exists($this->violet_auth->get_user_id(), $cookieres)) {
				if (!in_array($item_id, $cookieres[$this->violet_auth->get_user_id()])) {
					$cookieres[$this->violet_auth->get_user_id()][] = $item_id;
				}
			} else {
				$cookieres[$this->violet_auth->get_user_id()][] = $item_id;
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
		} else {
			///cookie set
			$cookie_data[$this->violet_auth->get_user_id()][] = $item_id;
			$cookievalue = serialize($cookie_data);
			$cookiearr = array(
				'name' => 'recentviewed',
				'value' => $cookievalue,
				'expire' => '86400'
			);
			$this->input->set_cookie($cookiearr);
		}
		$data['sizes'] = $this->Item->load_item_available_sizes($item_id);
		$data['product'] = $this->Item->load_item_data($item_id);
		$data['category'] = $data['product']['category'];
		$data['sub_category'] = $data['product']['sub_category'];
		$data['category_link'] = str_replace(" ","%20", str_replace("&","%26", $data['product']['category']));
		$data['sub_category_link'] = str_replace(" ","%20", str_replace("&","%26", $data['product']['sub_category']));
		// var_dump($data['sub_category_link'], $data['category_link']);exit;
		$data['images'] = $this->Item->load_item_images($item_id);
		$tags = $this->Item->load_item_tags($item_id);
		$data['all_tags'] = $tags;
		$data['tags'] = '';
		var_dump($data['sizes']);exit;
		if ($tags) {
			foreach ($tags as $k => $tag) {
				if ($k == 0) {
					$data['tags'] = $tag['tag'];
				} else {
					$data['tags'] .= ", " . $tag['tag'];
				}
			}
			$data['tags'] .= ".";
		}
		if (in_array($data['product']['category'], ['Wallets', 'Hats'])) {
			$data['hide_size'] = 1;
		} else {
			$data['hide_size'] = 0;
		}
		$similar = $this->Item->load_similar_products($data['product']['category'], $item_id);
		if (count($similar) < 12) {
			$more_limit = 12 - count($similar);
			$more = $this->Item->load_more_similar_products($data['product']['category'], $item_id, $more_limit);
			foreach ($more as $m) {
				$similar[] = $m;
			}
		}
		$data['similar_products'] = $this->Item->load_images_for_set_of_items($similar);
		$pixelMetaData = array(
			'item_id' => $item_id,
			'title' => $data['product']['barcode'],
			'description' => $data['product']['description'],
			'note' => $data['product']['note'],
			'price' => $data['product']['price'],
			'old_price' => $data['product']['old_price'],
			'color' => $data['product']['color'],
			'url' => "https://www.samoutfits.com/products/view/".$item_id,
			'availability' => (doubleval($data['product']['qty'] > 0))? 'In Stock' : 'Out of Stock', 
			'image' => (isset($data['images'][0]['image_name'])? "https://www.samoutfits.com/accounting/assets/uploads/".$data['images'][0]['image_name'] : "" )
		);
		$data['title'] = $this->lang->line('Product') . " - " . $data['product']['barcode'];
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => [''],
			'_pixelMetaData' => $pixelMetaData
		]);
		$this->load->view('products/product_info', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['products/product_info']]);
	}

	public function category($category, $subcategory = null, $gender = null, $min_price = null, $max_price = null, $colors = null, $sizes = null, $sort = null, $page = 1)
	{
		$data = $this->load_related_data_for_category($category, $subcategory, $gender, $min_price, $max_price, $colors, $sizes, $sort);
		$post = $this->input->post(null, true);
		if ($category === "Hats") {
			$title = "Caps";
		} else {
			if ($category === "Wallets") {
				$title = "Bags_and_wallets";
			} else {
				if ($category === "Hair_and_Body_Care") {
					$title = "Hair & Body Care";
				} else {
					$title = str_replace(' ', '_', $category);
				}
			}
		}
		// var_dump($title);exit;
		$cat = str_replace('%26', '&', $category);
		$cat = str_replace('%20', ' ', $cat);
		if (in_array($cat, ['Shoes', 'Men Shoes', 'Unisex Shoes', 'Women Shoes', 'Clothing'])) {
			$data['hide_size'] = 0;
		} else {
			$data['hide_size'] = 1;
		}
		$filters['subcategory'] = $data['selected_subcategory'];
		$filters['gender'] = $data['selected_gender'];
		$filters['min_price'] = $data['min_price'];
		$filters['max_price'] = $data['max_price'];
		$filters['colors'] = $data['colors'];
		$filters['sizes'] = $data['sizes'];
		$filters['sort'] = $data['sort'];
		$limit = 28;
		$offset = ($page - 1) * $limit;
		$total = count($this->Item->load_products_paginated_data($cat, '', '', $filters));
		$data['pages_count'] = ceil($total / $limit);
		$data['page_nb'] = $page;
		$res = $this->Item->load_products_paginated_data($cat, $limit, $offset, $filters);
		$data['products'] = $this->Item->load_images_for_set_of_items($res);
		$data['title'] = $this->lang->line($title);
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['price-slider-range']
		]);
		$this->load->view('products/category', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['products/category']]);
	}

	private function load_related_data_for_category($category, $subcategory, $gender, $min_price, $max_price, $colors, $sizes, $sort)
	{
		$breadcrumb_sub_category = str_replace('%26', '&', $subcategory);
		$breadcrumb_sub_category = str_replace('%20', ' ', $breadcrumb_sub_category);
		$data['breadcrumb_sub_category'] = str_replace('All-', '', $breadcrumb_sub_category);
		$data['category_name'] = $category;
		$data['breadcrumb_cat_link'] = "products/category/" . $category;
		if ($subcategory) {
			$subcategory_array = explode("-", $subcategory);
			$data['selected_subcategory'] = [];
			foreach ($subcategory_array as $s) {
				str_replace('%20', ' ',  $s);
				if($s == "Deodorant%20%26%20Roll"){
				    $s = "Deodorant%20%26%20Roll-on";
				}
				$data['selected_subcategory'][$s] = $s;
			}
		} else {
			$data['selected_subcategory']['All'] = 'All';
		}
		if ($gender) {
			$gender_array = explode("-", $gender);
			$data['selected_gender'] = [];
			foreach ($gender_array as $s) {
				$data['selected_gender'][$s] = $s;
			}
		} else {
			$data['selected_gender']['All'] = 'All';
		}
		if ($min_price) {
			$data['min_price'] = $min_price;
		} else {
			$data['min_price'] = 0;
		}
		if ($max_price) {
			$data['max_price'] = $max_price;
		} else {
			$data['max_price'] = 100;
		}
		if($data['max_price'] == 0){
			$data['max_price'] = 100;
		}
		if ($colors) {
			$colors_array = explode("-", $colors);
			$data['colors'] = [];
			foreach ($colors_array as $s) {
				$data['colors'][$s] = $s;
			}
		} else {
			$data['colors']['All'] = 'All';
		}
		if ($sizes) {
			$sizes_array = explode(":", $sizes);
			$data['sizes'] = [];
			// if($)
			foreach ($sizes_array as $s) {
				$data['sizes'][$s] = $s;
			}
		} else {
			$data['sizes']['All'] = 'All';
		}
		if ($sort) {
			$data['sort'] = $sort;
		} else {
			$data['sort'] = 'Latest';
		}
		$data['category_link'] = $category;
		if ($category == "Wallets") {
			$data['category_name'] = 'Bags & Wallets';
		} else {
			if ($category === "Hair_and_Body_Care") {
				$data['category_name'] = 'Hair & Body Care';
			} else {
				$category = str_replace('%26', '&', $category);
				$category = str_replace('%20', ' ', $category);
				$data['category_name'] = $category;
			}
		}
		$subcats = $this->Item->load_item_subcategories_by_category($data['category_name']);
		$data['sub_categories'] = [];
		foreach ($subcats as $sub) {
			$data['sub_categories'][$sub['sub_category']] = $sub['sub_category'];
		}
		// $data['gender'] = array('Female' => 'Female', 'Male' => 'Male', 'Unisex' => 'Unisex', 'gender_free' => 'Gender Free',);
		// var_dump($data['sub_categories']);exit;
		if ($category == "Shoes" || $category == "Men Shoes" || $category == "Women Shoes" || $category == "Unisex Shoes" || $category == "Shoes") {
			$data['banner'] = "shoes";
		} else {
			if ($category == "Hats") {
				$data['banner'] = "caps";
			} elseif ($category == "Wallets") {
				$data['banner'] = "wallets";
			} else {
				if ($category === "Hair_and_Body_Care") {
					$data['banner'] = 'body_care';
				} else {
					$data['banner'] = '';
				}
			}
		}
		$this->load->model('Transaction');
		$sizes_category = $this->Transaction->load_available_filters($category, $subcategory);
		$data['sizes_list'] = [];
		// var_dump($sizes_category);exit;
		$data['colors_list'] = [];
		$data['sizes_list'] = [];
		$data['gender'] = [];
		$data['price_min'] = 0;
		$data['price_max'] = 0;
		$count = 0;
		foreach ($sizes_category as $sc) {
			if ($sc['size']) {
				$data['sizes_list'][$sc['size']] = $sc['size'];
			}
			if ($sc['color']) {
				$data['colors_list'][$sc['color']] = $sc['color'];
			}
			if ($sc['gender']) {
				$data['gender'][$sc['gender']] = $sc['gender'];
			}
			if ($count == 0) {
				$data['price_min'] = $sc['price'];
				$data['price_max'] = $sc['price'];
				$count++;
			} else {
				if ($sc['price'] > $data['price_max']) {
					$data['price_max'] = $sc['price'];
				}
				if ($sc['price'] < $data['price_min']) {
					$data['price_min'] = $sc['price'];
				}
			}
		}
		sort($data['sizes_list']);
		sort($data['colors_list']);
		// var_dump($data['min_price'], $data['max_price']);
		// exit;
		// $this->load->model('Configuration');
		// $sizes_list = $this->Configuration->fetch_sizes();
		// $data['sizes_list'] = $sizes_list;
		// if ($category == 'Shoes') {
		// 	$data['sizes_list'] = [];
		// 	foreach ($sizes_list as $sl) {
		// 		if (is_numeric($sl))
		// 			$data['sizes_list'][$sl] = $sl;
		// 	}
		// } elseif ($category == 'Clothing') {
		// 	$data['sizes_list'] = [];
		// 	foreach ($sizes_list as $sl) {
		// 		if (!is_numeric($sl))
		// 			$data['sizes_list'][$sl] = $sl;
		// 	}
		// }
		// var_dump($data['sizes_list']);exit;
		// $data['colors_list'] = $this->Configuration->fetch_colors();
		// $data['max_pr'] = $this->Item->load_max_item_price();
		return $data;
	}

	public function stock_clearance($min_price = null, $max_price = null, $colors = null, $sizes = null, $gender = null, $page = 1)
	{
		$this->load->model(['Configuration', 'Transaction']);
		$limit = 20;
		$offset = ($page - 1) * $limit;
		$data['max_pr'] = $this->Item->load_max_item_price();
		$filters = $this->Transaction->load_stock_clearance_available_filters();
		$data['colors_list'] = [];
		$data['sizes_list'] = [];
		$data['gender'] = [];
		$data['price_min'] = 0;
		$data['price_max'] = 0;
		$count = 0;
		foreach ($filters as $sc) {
			if ($sc['size']) {
				$data['sizes_list'][$sc['size']] = $sc['size'];
			}
			if ($sc['color']) {
				$data['colors_list'][$sc['color']] = $sc['color'];
			}
			if ($sc['gender']) {
				$data['gender'][$sc['gender']] = $sc['gender'];
			}
			if ($count == 0) {
				$data['price_min'] = $sc['price'];
				$data['price_max'] = $sc['price'];
				$count++;
			} else {
				if ($sc['price'] > $data['price_max']) {
					$data['price_max'] = $sc['price'];
				}
				if ($sc['price'] < $data['price_min']) {
					$data['price_min'] = $sc['price'];
				}
			}
		}
		$data['price_max'] = ceil($data['price_max']);
		$data['price_min'] = floor($data['price_min']);
		// var_dump($filters, $data['price_max']);exit;
		// $data['sizes_list'] = [];
		// $data['colors_list'] = $this->Configuration->fetch_colors();
		// $data['sizes_list'] = $this->Configuration->fetch_sizes();
		if ($min_price) {
			$data['min_price'] = $min_price;
		} else {
			$data['min_price'] = 0;
		}
		if ($max_price) {
			$data['max_price'] = $max_price;
		} else {
			$data['max_price'] = 100;
		}
		if ($colors) {
			$colors_array = explode("-", $colors);
			$data['colors'] = [];
			foreach ($colors_array as $s) {
				$data['colors'][$s] = $s;
			}
		} else {
			$data['colors']['All'] = 'All';
		}
		if ($sizes) {
			$sizes_array = explode("-", $sizes);
			$data['sizes'] = [];
			// if($)
			foreach ($sizes_array as $s) {
				$data['sizes'][$s] = $s;
			}
		} else {
			$data['sizes']['All'] = 'All';
		}
		// $data['gender'] = [];
		if ($gender) {
			$gender_array = explode("-", $gender);
			$data['selected_gender'] = [];
			foreach ($gender_array as $s) {
				$data['selected_gender'][$s] = $s;
			}
		} else {
			$data['selected_gender']['All'] = 'All';
		}
		$data['results'] = [];
		$res = $this->Item->load_all_stock_clearance_products($limit, $offset, $min_price, $max_price, $data['colors'], $data['sizes'], $data['selected_gender']);
		if ($res) {
			$data['results'] = $this->Item->load_images_for_set_of_items($res);
		}
		$total = count($this->Item->load_all_stock_clearance_products('', '', $min_price, $max_price, $data['colors'], $data['sizes'], $data['selected_gender']));
		$data['pages_count'] = ceil($total / $limit);
		$data['page_nb'] = $page;
		$data['title'] = $this->lang->line('stock_clearance');
		$this->load->view('templates/header', [
			'_page_title' => $data['title'],
			'_moreCss' => ['price-slider-range']
		]);
		$this->load->view('products/stock_clearance', $data);
		$this->load->view('templates/footer', ['_moreJs' => ['products/stock_clearance']]);
	}

	//get json product info
	public function json_info(){
		$item_id=$this->input->post('item_id');
		$item = $this->Item->load_item_data($item_id);
		$response=array(
			"result"=>true,
			"data"=>$item
		);
		echo json_encode($response);
	}
}
