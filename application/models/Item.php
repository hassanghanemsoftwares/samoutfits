<?php

defined('BASEPATH') or die('No direct script access allowed');

class Item extends MY_Model
{

	protected $modelName = 'Item';
	protected $_table = 'items';
	protected $_listFieldName = 'description';
	protected $_fieldsNames = ['id', 'barcode', 'description', 'category', 'open_cost', 'cost', 'purchase_cost', 'open_qty', 'qty', 'price', 'profit', 'TVA', 'description2', 'brand', 'color', 'gender', 'publish', 'size_chart', 'link', 'cool_storage', 'flammable_handling', 'fragile', 'size_guidance'];
	protected $allowedNulls = ['link'];

	public function __construct()
	{
		parent::__construct();
	}

	public function load_all_items($limit, $category)
	{
		$query = [
			'select' => "items.*",
			'where' => ['items.publish', 1],
			'order_by' => [['id', 'DESC']]
		];
		if ($limit) {
			$query['LIMIT'] = [$limit];
		}
		if ($category) {
			if ($category === "shoes") {
				$query['where'][] = ['items.category', "Men Shoes"];
				$query['or_where'][] = ['items.category', "Women Shoes"];
				$query['or_where'][] = ['items.category', "Unisex Shoes"];
				$query['or_where'][] = ['items.category', "Shoes"];
			} else {
				$query['where'][] = ['items.category', $category];
			}
		}
		return $this->load_all($query);
	}

	public function load_all_items_with_price_and_image($category)
	{
		$query = [
			'select' => "items.*,  SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty",
			'join' => [
				// ['product_images', 'product_images.item_id = items.id', 'inner'],
				['transaction_items', 'transaction_items.item_id = items.id', 'inner'],
				['warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
			],
			'where' => [
				['items.publish', 1],
				['warehouses.warehouse', "Primary Warehouse"]
			],
			'group_by' => ['items.id'],
			'order_by' => [['total_qty', 'DESC']]
		];
		if ($category) {
			if ($category === "shoes") {
				$query['where_in'][] = ['items.category', ["Men Shoes", "Women Shoes", "Unisex Shoes", "Shoes"]];
			} else {
				$query['where'][] = ['items.category', $category];
			}
		}
		$items = $this->load_all($query);
		if ($items) {
			$res = array_slice($items, 0, 12);
			foreach ($res as $item) {
				$data[$item['id']] = $item;
				$images = $this->load_item_images($item['id']);
				if ($images) {
					$data[$item['id']]['image_name'] = $images[0]['image_name'];
				} else {
					$data[$item['id']]['image_name'] = 'no_image.jpg';
				}
			}
			return $data;
		} else {
			return false;
		}
	}

	public function load_item_images($item_id)
	{
		$this->db->select('image_name');
		$this->db->from('product_images');
		$this->db->where('item_id', $item_id);
		$this->db->order_by('order_nb', 'ASC');
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function load_images_for_set_of_items($items)
	{
		foreach ($items as $k => $item) {
			$images = $this->load_item_images($item['id']);
			if ($images === []) {
				$items[$k]['image_name'] = "no_image.jpg";
			} else {
				$items[$k]['image_name'] = $images[0]['image_name'];
			}
		}
		return $items;
	}

	public function load_products_paginated_data($category, $limit = false, $offset = false, $filter)
	{
		//pagination
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		$this->db->select('items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result');
		$this->db->from('items');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id', 'inner');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner');
		$this->db->where('warehouses.warehouse', "Primary Warehouse");
		$this->db->where('items.publish', 1);
		$this->db->group_by('items.id');
		// $this->db->order_by('total_qty DESC');
		if ($category === "Shoes" || $category === "shoes") {
			$this->db->where_in('items.category', ["Men Shoes", "Women Shoes", "Unisex Shoes", "Shoes"]);
		} else {
			if ($category === "Wallets") {
				$this->db->where('items.category', "Bags & Wallets");
			} else {
				$this->db->where('items.category', $category);
			}
		}
		// var_dump($filter);exit;
		if ($filter) {
			if (array_key_exists("subcategory", $filter)) {
				unset($filter['subcategory']['All']);
				if ($filter['subcategory']) {
					$sub_f = str_replace('-and', '&', $filter['subcategory']);
					if (is_array($sub_f)) {
						if (in_array('Deodorant_and_Roll-on', $sub_f)) {
							$this->db->where_in('items.sub_category', ['Deodorant & Roll-on']);
						} else {
							$this->db->where_in('items.sub_category', str_replace('_', ' ', $sub_f));
						}
					} else {
						$this->db->where_in('items.sub_category', str_replace('_', ' ', $sub_f));
					}
				}
			}
			if (array_key_exists("gender", $filter)) {
				unset($filter['gender']['All']);
				if ($filter['gender']) {
					$this->db->where_in('items.gender', str_replace('_', ' ', $filter['gender']));
				}
			}
			if ($filter['min_price']) {
				$this->db->where('items.price >=', $filter['min_price']);
			}
			if ($filter['max_price']) {
				$this->db->where('items.price <=', $filter['max_price']);
			}
			if (array_key_exists("colors", $filter)) {
				unset($filter['colors']['All']);
				if ($filter['colors']) {
					$color_rep = str_replace('-and', '&', $filter['colors']);
					$this->db->where_in('items.color', str_replace('_', ' ', $color_rep));
				}
			}

			if (array_key_exists("sizes", $filter)) {
				unset($filter['sizes']['All']);
				if ($filter['sizes']) {
					$this->db->where_in('transaction_item_sizes.size', str_replace('_', ' ', $filter['sizes']));
				}
			}
			// var_dump(array_key_exists("sort", $filter), $filter);exit;
			if (array_key_exists("sort", $filter)) {
				if ($filter['sort'] === 'priceASC') {
					$this->db->order_by('result DESC, items.price ASC');
				} else {
					if ($filter['sort'] === 'priceDESC') {
						$this->db->order_by('result DESC, items.price DESC');
					} else {
						if ($filter['sort'] === 'Oldest') {
							$this->db->order_by('result DESC, items.id ASC');
						} else {
							$this->db->order_by('result DESC, items.id DESC');
						}
					}
				}
			} else {
				$this->db->order_by('result DESC');
			}
		} else {
			$this->db->order_by('result DESC');
		}
		$query = $this->db->get()->result_array();
		// echo($this->db->last_query());exit;
		return $query;
	}

	public function load_item_data($item_id)
	{
		$this->db->select('*');
		$this->db->from('items');
		$this->db->where('id', $item_id);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_item_available_sizes($item_id)
	{
		$this->db->select('transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty');
		$this->db->from('warehouses');
		$this->db->join('transaction_items', 'warehouses.id = transaction_items.warehouse_id', 'inner');
		$this->db->join('items', 'items.id = transaction_items.item_id', 'inner');
		$this->db->join('transactions', 'transaction_items.transaction_id = transactions.id', 'inner');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->where('items.id', $item_id);
		$this->db->where('warehouses.warehouse', "Primary Warehouse");
		$this->db->group_by('transaction_item_sizes.size');
		$this->db->order_by('transaction_item_sizes.size', 'ASC');
		$this->db->having('SUM(transaction_item_sizes.qty * transaction_items.mvt_type) >', 0);
		$query = $this->db->get()->result_array();
		return $query;
	}
	public function load_item_available_by_size($item_id, $size)
	{
		$this->db->select('transaction_item_sizes.size, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty');
		$this->db->from('warehouses');
		$this->db->join('transaction_items', 'warehouses.id = transaction_items.warehouse_id', 'inner');
		$this->db->join('items', 'items.id = transaction_items.item_id', 'inner');
		$this->db->join('transactions', 'transaction_items.transaction_id = transactions.id', 'inner');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->where('items.id', $item_id);
		if (!is_null($size)) {
			$this->db->where('transaction_item_sizes.size', $size);
		}
		$this->db->where('warehouses.warehouse', "Primary Warehouse");
		$this->db->group_by('transaction_item_sizes.size');
		$this->db->having('SUM(transaction_item_sizes.qty * transaction_items.mvt_type) >', 0);
		$query = $this->db->get()->row_array();
		return $query;
	}
	public function load_all_item_data($item_id)
	{
		$query = [
			'select' => "items.*, product_images.image_name",
			'join' => [
				['product_images', 'product_images.item_id = items.id', 'inner'],
			],
			'where' => [
				['items.id', $item_id],
			],
			'order_by' => [['id', 'DESC'], ['product_images.order_nb', 'ASC']]
		];
		return $this->load($query);
	}

	public function load_similar_products($category, $sub_category, $item_id)
	{
		$query = [
			'select' => "items.*,  SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty",
			'join' => [
				['transaction_items', 'transaction_items.item_id = items.id', 'inner'],
				['warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
			],
			'where' => [
				// ['items.category', $category],
				['items.sub_category', $sub_category],
				['items.id !=', $item_id],
				['warehouses.warehouse', "Primary Warehouse"],
				['items.publish', 1]
			],
			'group_by' => ['items.id'],
			'having' => ['SUM(transaction_items.qty * transaction_items.mvt_type) >', 0],
			'order_by' => [['RAND()']]
		];
		$query['LIMIT'] = [12];
		return $this->load_all($query);
	}

	public function load_max_item_price()
	{
		$this->db->select('max(price) as max');
		$this->db->from('items');
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function load_all_items_with_price_and_image_for_search($search, $limit, $offset)
	{
		$s = $search;
		$where_st = '';
		$words_array = [];
		if (str_word_count($s) > 1) {
			$se_desc = "a.description LIKE '%$s%'";
			$res = explode(" ", $s);
			$count = 0;
			$count1 = 0;
			$this->load->model('Keyword');
			if ($res) {
				$keywords = [];
				foreach ($res as $r) {
					if (ctype_alpha($r)) {
						$keywords[] = $this->Keyword->find_keywords_by_search($r);
						// var_dump($keywords);exit;
						if ($count !== 0) {
							$se_desc .= " AND ";
						} else {
							$se_desc .= " OR (";
						}
						$se_desc .= "a.description LIKE '%$r%'";
						$count++;
					}
				}
				$se_desc .= ")";
				if ($keywords) {
					foreach ($keywords as $keyword) {
						foreach ($keyword as $kw) {
							$words_array[$kw['type']][] = $kw['keyword'];
						}
					}
					// var_dump($words_array);exit;
					if ($words_array) {
						$where_st = "(" . $se_desc . ") OR (";
						$c2 = 0;
						foreach ($words_array as $k => $wr) {
							$c1 = 0;
							$str = '';
							foreach ($wr as $w) {
								if ($c1 == 0) {
									$str .= $k . " = '$w'";
								} else {
									$str .= " OR " . $k . " = '$w'";
									if ($k == 'color') {
									}
								}
								$c1++;
							}
							if ($c2 !== 0) {
								$where_st .= " AND ";
							}
							$where_st .= "(" . $str . ")";
							$c2++;
						}
						$where_st .= ")";
					} else {
						$where_st = "(" . $se_desc . ")";
					}
				}
				// var_dump($where_st);exit;
			}
		} else {
			$res = $this->check_if_barcode_exists($s);
			if ($res) {
				$bc =  $res['barcode'];
				$where_st = "a.barcode = '$s'";
			} else {
				$where_st = "tags.tag LIKE '%$s%' OR a.description LIKE '%$s%' OR a.color LIKE '%$s%' OR a.barcode LIKE '%$s%' OR a.category LIKE '%$s%' OR a.sub_category LIKE '%$s%' ";
			}
		}
		// mysqli_real_escape_string()
		$where_st = ($where_st) ? $where_st : "a.description LIKE '%$s%'";
		$q = "SELECT a.*
		FROM (
		SELECT
			items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) AS total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, '1', '0') as result 
		FROM
			`items`
		INNER JOIN transaction_items on transaction_items.item_id = items.id
		INNER JOIN transaction_item_sizes on transaction_items.id = transaction_item_sizes.transaction_item_id
		WHERE transaction_items.warehouse_id = 39
		GROUP BY items.id
		) as a
		LEFT JOIN item_tags ON a.id = item_tags.item_id
		LEFT JOIN tags ON tags.id = item_tags.tag_id 
		WHERE " . $where_st . " 
		GROUP BY a.id
		ORDER BY result DESC";
		// echo $q;exit;
		if ($limit) {
			$q .= " LIMIT $limit OFFSET $offset";
		}
		$query = $this->db->query($q);
		$items = $query->result_array();
		if ($items) {
			foreach ($items as $item) {
				$data[$item['id']] = $item;
				$images = $this->load_item_images($item['id']);
				if ($images) {
					$data[$item['id']]['image_name'] = $images[0]['image_name'];
				} else {
					$data[$item['id']]['image_name'] = 'no_image.jpg';
				}
			}
			return $data;
		} else {
			return false;
		}
	}

	public function load_more_similar_products($category, $sub_category, $item_id, $limit)
	{
		$query = [
			'select' => "items.*,  SUM(transaction_items.qty * transaction_items.mvt_type) as total_qty",
			'join' => [
				['transaction_items', 'transaction_items.item_id = items.id', 'inner'],
				['warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
			],
			'where' => [
				// ['items.category !=', $category],
				['items.sub_category !=', $sub_category],
				['items.id !=', $item_id],
				['warehouses.warehouse', "Primary Warehouse"],
				['items.publish', 1]
			],
			'group_by' => ['items.id'],
			'having' => ['SUM(transaction_items.qty * transaction_items.mvt_type) >', 0],
			'order_by' => [['RAND()']]
		];
		$query['LIMIT'] = [$limit];
		return $this->load_all($query);
	}

	public function load_item_subcategories_by_category($category)
	{
		$query = [
			'select' => "items.sub_category",
			'join' => [
				['transaction_items', 'transaction_items.item_id = items.id', 'inner'],
				['warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner'],
			],
			'where' => [
				['items.category', $category],
				['warehouses.warehouse', "Primary Warehouse"],
				['items.publish', 1]
			],
			'group_by' => ['items.sub_category'],
		];
		return $this->load_all($query);
	}

	public function load_item_tags($item_id)
	{
		$query = [
			'select' => "tags.*",
			'join' => [
				['item_tags', 'item_tags.item_id = items.id', 'inner'],
				['tags', 'item_tags.tag_id = tags.id', 'inner'],
			],
			'where' => [
				['items.id', $item_id]
			]
		];
		return $this->load_all($query);
	}

	public function load_all_stock_clearance_products($limit = false, $offset = false, $min_price, $max_price, $colors, $sizes, $gender)
	{
		if ($limit) {
			$this->db->limit($limit, $offset);
		}
		$this->db->select('items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty, IF(SUM(transaction_item_sizes.qty * transaction_items.mvt_type) > 0, "1", "0") as result');
		$this->db->from('items');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id', 'inner');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'inner');
		$this->db->join('warehouses', 'transaction_items.warehouse_id = warehouses.id', 'inner');
		$this->db->where('warehouses.warehouse', "Primary Warehouse");
		$this->db->where('items.publish', 1);
		$this->db->where('items.stock_clearance', 1);
		$this->db->group_by('items.id');
		$this->db->order_by('result', 'DESC');
		$this->db->order_by('items.id', 'ASC');
		if ($min_price) {
			$this->db->where('items.price >=', $min_price);
		}
		if ($max_price) {
			$this->db->where('items.price <=', $max_price);
		}
		if ($colors) {
			unset($colors['All']);
			if ($colors) {
				$color_rep = str_replace('-and', '&', $colors);
				$this->db->where_in('items.color', str_replace('_', ' ', $color_rep));
			}
		}

		if ($sizes) {
			unset($sizes['All']);
			if ($sizes) {
				$this->db->where_in('transaction_item_sizes.size', str_replace('_', ' ', $sizes));
			}
		}
		unset($gender['All']);
		if ($gender) {
			$this->db->where_in('items.gender', str_replace('_', ' ', $gender));
		}
		$query = $this->db->get()->result_array();
		// 		echo($this->db->last_query());exit;
		return $query;
	}

	public function check_if_barcode_exists($barcode)
	{
		$query = [
			'select' => "items.*",
			'where' => ['items.barcode', $barcode]
		];
		return $this->load($query);
	}

	public function load_landing_page_category_items_with_price_and_image($category)
	{
		$this->db->select('items.*, SUM(transaction_item_sizes.qty * transaction_items.mvt_type) as total_qty');
		$this->db->from('landing_page');
		$this->db->join('items', 'landing_page.item_id = items.id', 'left');
		$this->db->join('transaction_items', 'transaction_items.item_id = items.id', 'left');
		$this->db->join('transaction_item_sizes', 'transaction_items.id = transaction_item_sizes.transaction_item_id', 'left');
		$this->db->where('landing_page.category', $category);
		$this->db->group_by('items.id');
		$this->db->order_by('landing_page.id', 'ASC');
		$items = $this->db->get()->result_array();
		// var_dump($items);exit;
		if ($items) {
			foreach ($items as $item) {
				$data[$item['id']] = $item;
				$images = $this->load_item_images($item['id']);
				if ($images) {
					$data[$item['id']]['image_name'] = $images[0]['image_name'];
				} else {
					$data[$item['id']]['image_name'] = 'no_image.jpg';
				}
			}
			return $data;
		} else {
			return false;
		}
	}
	public function get_section_order()
	{
		$this->db->select('*');
		$this->db->from('reordenig_sections');
		$this->db->order_by('reordenig_sections.order_nb', 'ASC');
		return $this->db->get()->result_array();
	}
}
