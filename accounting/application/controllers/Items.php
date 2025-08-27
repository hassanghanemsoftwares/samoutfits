<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Item $Item
 * @property Transaction $Transaction
 * @property Warehouse $Warehouse
 * @property Configuration $Configuration
 */
class Items extends MY_Controller
{

	public $Item = NULL;
	public $Tag = NULL;
	public $Transaction_item = NULL;
	public $Currency = NULL;

	public function __construct()
	{
		parent::__construct();
		// $this->pageTitle = $this->lang->line('items');
		$this->load->model('Item');
	}

	public function index()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Item->load_items_data_tables());
		} else {
			$this->load->model('Configuration');
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'items/index');
			// $this->pageTitle = $this->lang->line('items');
			$data['records'] = $this->Item->paginate_items();
			$operations	= ["=", "+", "-", "*", "/"];
			$data['operations'] = array_combine($operations, $operations);
			$data['stock_cost'] = $this->Item->calculate_stock_total_cost()["stock_cost"];
			$categories = $this->Configuration->fetch_categories()["valueStr"];
			$categories = explode(",", $categories);
			$data['categories'][0] = '';
			foreach ($categories as $c) {
				$data['categories'][$c] = $c;
			}
			$sub_categories = $this->Configuration->fetch_sub_categories()["valueStr"];
			$sub_categories = explode(",", $sub_categories);
			$data['sub_categories'][0] = '';
			foreach ($sub_categories as $c) {
				$data['sub_categories'][$c] = $c;
			}
			$data['gender'] = array('Female' => 'Female', 'Male' => 'Male', 'Unisex' => 'Unisex', 'gender_free' => 'Gender Free',);
			$data['gender_list'] = array('' => '', 'Female' => 'Female', 'Male' => 'Male', 'Unisex' => 'Unisex', 'gender_free' => 'Gender Free',);
			$colors = $this->Configuration->fetch_colors()["valueStr"];
			$colors = explode(",", $colors);
			$data['colors'][0] = '';
			foreach ($colors as $c) {
				$data['colors'][$c] = $c;
			}
			$this->load->model('Tag');
			$tags =  $this->Tag->load_all_tags();
			$data['tags'][0] = '';
			foreach ($tags as $c) {
				$data['tags'][$c['id']] = $c['tag'];
			}
			$data['variant1'] = [
				"NULL" => " ",
				"Apparel & Accessories > Shoes & Footwear" => "Apparel & Accessories > Shoes & Footwear",
				"Apparel & Accessories > Clothing" => "Apparel & Accessories > Clothing",
				"Apparel & Accessories > Clothing Accessories" => "Apparel & Accessories > Clothing Accessories",
				"Health & Beauty > Beauty > Skin Care" => "Health & Beauty > Beauty > Skin Care",
				"Health & Beauty > Beauty > Hair care & Styling" => "Health & Beauty > Beauty > Hair care & Styling",
				"Health & Beauty > Personal Care > Fragrances" => "Health & Beauty > Personal Care > Fragrances",
				"Jewelry & watches > jewelry" => "Jewelry & watches > jewelry",
				"Travel & Luggage > Hanbags & Wallets" => "Travel & Luggage > Hanbags & Wallets",
			];

			$size_guidances = $this->Configuration->fetch_size_guidances()["valueStr"];
			$size_guidances = explode(",", $size_guidances);
			foreach ($size_guidances as $c) {
				$data['size_guidance_list'][$c] = $c;
			}
			$data['title'] = $this->lang->line('products');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'css/bootstrap-select.min', 'css/jquery-tag-this']
			]);
			$this->load->view('items/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'jquery.tagthis', 'bootstrap-select.min', 'my_lib_js/exceljs4.0.1.min', 'my_lib_js/filesaver', 'items/index']]);
		}
	}

	public function generate_pixel_excel()
	{
		if ($this->input->is_ajax_request()) {
			$excel = [];
			$excel[] = ["# Required | A unique content ID for the item. Use the item's SKU if you can. Each content ID must appear only once in your catalog. To run dynamic ads this ID must exactly match the content ID for the same item in your Meta Pixel code. Character limit: 100", "# Required | A specific and relevant title for the item. See title specifications: https://www.facebook.com/business/help/2104231189874655 Character limit: 200", "# Required | A short and relevant description of the item. Include specific or unique product features like material or color. Use plain text and don't enter text in all capital letters. See description specifications: https://www.facebook.com/business/help/2302017289821154 Character limit: 9999", "# Required | The current availability of the item. | Supported values: in stock; out of stock", "# Required | The current condition of the item. | Supported values: new; used", "# Required | The price of the item. Format the price as a number followed by the 3-letter currency code (ISO 4217 standards). Use a period (.) as the decimal point; don't use a comma.", "# Required | The URL of the specific product page where people can buy the item.", "# Required | The URL for the main image of your item. Images must be in a supported format (JPG/GIF/PNG) and at least 500 x 500 pixels.", "# Required | The brand name of the item. Character limit: 100.", "# Optional | The Google product category for the item. Learn more about product categories: https://www.facebook.com/business/help/526764014610932.", "# Optional | The Facebook product category for the item. Learn more about product categories: https://www.facebook.com/business/help/526764014610932.", "# Optional | The quantity of this item you have to sell on Facebook and Instagram with checkout. Must be 1 or higher or the item won't be buyable", "# Optional | The discounted price of the item if it's on sale. Format the price as a number followed by the 3-letter currency code (ISO 4217 standards). Use a period (.) as the decimal point; don't use a comma. A sale price is required if you want to use an overlay for discounted prices.", "# Optional | The time range for your sale period. Includes the date and time/time zone when your sale starts and ends. If this field is blank any items with a sale_price remain on sale until you remove the sale price. Use this format: YYYY-MM-DDT23:59+00:00/YYYY-MM-DDT23:59+00:00. Enter the start date as YYYY-MM-DD. Enter a 'T'. Enter the start time in 24-hour format (00:00 to 23:59) followed by the UTC time zone (-12:00 to +14:00). Enter '/' and then repeat the same format for your end date and time. The example row below uses PST time zone (-08:00).", "# Optional | Use this field to create variants of the same item. Enter the same group ID for all variants within a group. Learn more about variants: https://www.facebook.com/business/help/2256580051262113 Character limit: 100.", "# Optional | The gender of a person that the item is targeted towards. | Supported values: female; male; unisex", "# Optional | The color of the item. Use one or more words to describe the color. Don't use a hex code. Character limit: 200.", "# Optional | The size of the item written as a word or abbreviation or number. For example: small; XL; 12. Character limit: 200.", "# Optional | The age group that the item is targeted towards. | Supported values: adult; all ages; infant; kids; newborn; teen; toddler", "# Optional | The material the item is made from; such as cotton; denim or leather. Character limit: 200.", "# Optional | The pattern or graphic print on the item. Character limit: 100.", "# Optional | Shipping details for the item. Format as Country:Region:Service:Price. Include the 3-letter ISO 4217 currency code in the price. Enter the price as 0.0 to use the free shipping overlay in your ads. Use a semi-colon ';' or a comma ", " to separate multiple shipping details for different regions or countries. Only people in the specified region or country will see shipping details for that region or country. You can leave out the region (keep the double '::') if your shipping details are the same for an entire country.", "# Optional | The shipping weight of the item. Include the unit of measurement (lb/oz/g/kg).", "# Optional | The item’s Global Trade Item Number (GTIN). Recommended to help classify the item. May appear on the barcode; packaging or book cover. Only provide GTIN if you’re sure it’s correct. GTIN types include UPC (12 digits); EAN (13 digits); JAN (8 or 13 digits); ISBN (13 digits) or ITF-14 (14 digits)", "# Optional | URLs and tags for videos to be used in your ads or in shops. Supports up to 20 different videos. Must be a direct link to download the video file; not a link to a video player such as YouTube. Tags are optional and; if used; should describe what is in the video. Learn more about video field specifications at: https://www.facebook.com/business/help/120325381656392", "# Optional | URLs and tags for videos to be used in your ads or in shops. Supports up to 20 different videos. Must be a direct link to download the video file; not a link to a video player such as YouTube. Tags are optional and; if used; should describe what is in the video. Learn more about video field specifications at: https://www.facebook.com/business/help/120325381656392", "# Optional | Add labels to products to help filter them into product sets. Max characters: 110 per label; 5000 labels per product", "# Optional | Add labels to products to help filter them into product sets. Max characters: 110 per label; 5000 labels per product", "# Optional | Describe the fashion style of this item."];
			$excel[] = ["id", "title", "description", "availability", "condition", "price", "link", "image_link", "brand", "google_product_category", "fb_product_category", "quantity_to_sell_on_facebook", "sale_price", "sale_price_effective_date", "item_group_id", "gender", "color", "size", "age_group", "material", "pattern", "shipping", "shipping_weight", "gtin", "video[0].url", "video[0].tag[0]", "product_tags[0]", "product_tags[1]", "style[0]"];
			$pixel_items = $this->Item->get_all_items_for_pixels();
			$count = 0;
			foreach ($pixel_items as $item) {
				if ($item->availabile_qty > 0) {
					$excel_row = [
						$item->id,
						$item->description,
						$item->note . ". " . strtolower($item->barcode),
						($item->availabile_qty > 0) ? "in stock" : "out of stock",
						"new",
						($item->old_price != 0 && $item->old_price != NULL) ? number_format($item->old_price, 2) . " USD" : number_format($item->price, 2) . " USD",
						"https://samoutfits.com/products/view/" . $item->id,
						"https://samoutfits.com/accounting/assets/uploads/" . $item->first_image,
						"N\A",
						($item->variant1 != NULL) ? $item->variant1 : "",
						($item->variant1 != NULL) ? $item->variant1 : "",
						"",
						($item->old_price == 0 || $item->old_price == NULL) ? "" : number_format($item->price, 2) . " USD",
						"",
						"",
						"",
						$item->color,
						"",
						"",
						"",
						"",
						"",
						"",
						"",
						"",
						"",
						$item->category,
						($item->sub_category != "0") ? $item->sub_category : "",
						""
					];
					$excel[] = $excel_row;
					$count++;
				}
			}
			// 			"Apparel & Accessories",
			// 	"Clothing & Accessories",
			$this->_render_json([
				"result" => true,
				"count" => $count,
				"data" => $excel
			]);
		}
	}

	public function add()
	{
		$this->save(0, $this->lang->line('add_product'));
	}

	public function edit($id = '0')
	{
		$this->save($id, $this->lang->line('edit_product'));
	}

	private function save($id = '0', $page_title)
	{
		$fetched = ($id > 0 ? $this->Item->fetch(_gnv($id)) : false);
		$post = $this->input->post(null, true);
		$data = [];
		// var_dump($post);
		// exit;

		if (!empty($post)) {
			// ---- Size chart upload ----
			if (isset($_FILES['size_chart']) && $_FILES['size_chart']['name'] != "") {
				$config = [
					'upload_path'   => './assets/uploads',
					'allowed_types' => 'jpg|jpeg|png|gif',
					'max_size'      => 5000,
					'file_name'     => uniqid() . '_' . $_FILES['size_chart']['name']
				];
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('size_chart')) {
					$uploadDatasize_chart = $this->upload->data();
					$post['size_chart'] = $uploadDatasize_chart['file_name'];
				}
			}
			$main_item_id = null;
			$this->Item->set_fields($post);
			if (isset($post["variant1"]) && $post["variant1"] == "NULL") {
				$this->Item->set_field('variant1', NULL);
			}
			if (isset($post["size_guidance"]) && trim($post["size_guidance"]) == "") {
				$this->Item->set_field('size_guidance', NULL);
			}
			// var_dump($post);exit;
			// ---- Variants handling ----
			foreach ($post['variants'] as $index => $variant) {
				$this->Item->set_fields($post); // common fields
				$this->Item->set_field('color', $variant['color']);
				$this->Item->set_field('gender', $variant['gender']);
				$this->Item->set_field('price', $variant['price']);
				$this->Item->set_field('old_price', $variant['old_price']);
				$this->Item->set_field('publish', $variant['publish']);
				$this->Item->set_field('stock_clearance', $variant['stock_clearance']);

				// var_dump($index);exit;
				$this->Item->set_field('barcode', $post['barcode'] . '-' . ($index + 1));
				$this->Item->set_field('arrangement', $index + 1);

				// ---- Defaults handling ----
				if (!isset($variant['id'])) {
					$this->Item->set_field('open_cost', 0);
					$this->Item->set_field('open_qty', 0);
					$this->Item->set_field('cost', 0);
					$this->Item->set_field('qty', 0);
					$this->Item->set_field('profit', isset($post['profit']) ? $post['profit'] : '');
					if ($variant["price"] === "") {
						$this->Item->set_field('price', 0);
						$this->Item->set_field('price_ttc', 0);
					}
				} else {
					$this->load->model('Transaction');
					$last_trans_date = $this->Transaction->fetch_last_trans_date_of_purchase_or_transfer_of_item($id);
					if ($last_trans_date === NULL && isset($post["open_cost"])) {
						$this->Item->set_field('cost', $post["open_cost"]);
					}
					$this->Item->set_field('profit', isset($post['profit']) ? $post['profit'] : '');
					if ($variant["price"] === "") {
						$this->Item->set_field('price', 0);
						$this->Item->set_field('price_ttc', 0);
					}
					if (floatval($post["profit"]) > 0) {
						$this->Item->set_field('price', $variant["cost"] * (1 + ($variant["profit"] / 100)));
						$this->Item->set_field('price_ttc', ($variant["cost"] * (1 + ($variant["profit"] / 100))) * (1 + ($variant["TVA"] / 100)));
					}
				}


				// ---- INSERT OR UPDATE ----
				if (isset($variant['id']) && $variant['id'] > 0) {
					// Existing variant: update
					$this->Item->set_field('id', $variant['id']);
					$this->Item->update($variant['id']);

					if ($index == 0 && !$main_item_id) {
						$main_item_id = $variant['id']; // first variant defines main
					}
				} else {
					// New variant: insert
					$this->Item->set_field('id', null);

					if ($index == 0 && !$fetched) {
						// First variant of a new item
						$this->Item->set_field('main_item_id', null); // cannot reference self yet
						$this->Item->insert();
						$main_item_id =  $this->Item->get_field('id');
						$this->Item->set_field('main_item_id', $main_item_id);
						$this->Item->update($this->Item->get_field('id'));
					} else {
						// Subsequent variants
						$this->Item->set_field('main_item_id', $main_item_id ?: $id); // link to main
						$this->Item->insert();
					}
				}

				// ---- Images for this variant ----
				$saved_id = $this->Item->get_field('id');
				$data['filenames'] = [];

				if (isset($_FILES['variants']['name'][$index]['files']) && !empty($_FILES['variants']['name'][$index]['files'][0])) {
					$variantFiles = $_FILES['variants'];

					$countfiles = count($variantFiles['name'][$index]['files']);
					for ($i = 0; $i < $countfiles; $i++) {
						if (!empty($variantFiles['name'][$index]['files'][$i])) {
							$_FILES['file']['name']     = $variantFiles['name'][$index]['files'][$i];
							$_FILES['file']['type']     = $variantFiles['type'][$index]['files'][$i];
							$_FILES['file']['tmp_name'] = $variantFiles['tmp_name'][$index]['files'][$i];
							$_FILES['file']['error']    = $variantFiles['error'][$index]['files'][$i];
							$_FILES['file']['size']     = $variantFiles['size'][$index]['files'][$i];

							$config['upload_path']   = './assets/uploads';
							$config['allowed_types'] = 'jpg|jpeg|png|gif';
							$config['max_size']      = 5000;
							$config['file_name'] = $variantFiles['name'][$index]['files'][$i];


							$this->load->library('upload', $config);

							if ($this->upload->do_upload('file')) {
								$uploadData = $this->upload->data();
								$filename   = $uploadData['file_name'];
								$data['filenames'][] = $uploadData['file_name'];
							}
						}
					}
				}

				// Flatten all variant files for DB insertion
				if (!$fetched) {
					$this->Item->insert_item_images($data['filenames'], $this->Item->get_field('id'));
					$images = $this->Item->load_all_item_images($saved_id);
					$count_img = 1;
					foreach ($images as $img) {
						$this->Item->update_product_image_order_nb($img['id'], $count_img);
						$count_img++;
					}
				} else {
					if ($data['filenames'] !== []) {
						// $this->Item->delete_item_images($this->Item->get_field('id'));
						$this->Item->insert_item_images($data['filenames'], $this->Item->get_field('id'));
						$images = $this->Item->load_all_item_images($this->Item->get_field('id'));
						$count = 1;
						foreach ($images as $i) {
							$this->Item->update_product_image_order_nb($i['id'], $count);
							$count++;
						}
					}
				}
				// ---- Tags for this variant ----
				$this->load->model('Tag');
				if (!$fetched) {
					if (isset($post['tags'])) {
						$this->Tag->insert_item_tags($post['tags'], $this->Item->get_field('id'));
					}
				} else {
					$this->Tag->delete_all_item_tags($this->Item->get_field('id'));
					if (isset($post['tags'])) {
						$this->Tag->insert_item_tags($post['tags'], $this->Item->get_field('id'));
					}
				}
			}
			$this->session->set_flashdata('message_success', $this->lang->line($fetched ? 'Updated_Successfully' : 'Saved_Successfully'));
			if (!$fetched) {
				redirect("items/edit/" . $this->Item->get_field('main_item_id'));
			} else {
				redirect("items/edit/" . $id);
			}
		}

		// ---- Load view for edit/add ----
		$this->load->model('Tag');
		$data['selected_tags'] = $fetched ? array_column($this->Tag->load_item_tags($id), 'id', 'id') : '';
		if ($fetched) {
			$fetched_item = $this->Item->fetch_item($id)[0];
			$main_item_id = $fetched_item['main_item_id'] ?: $id;
			// var_dump($main_item_id);exit;
			$data['variants'] = $this->Item->getItemVariants($main_item_id);
			foreach ($data['variants'] as $key => $variant) {
				$data['variants'][$key]['item_images'] = $this->Item->load_item_images($variant['id']);
				$data['variants'][$key]['images_nbs'] = [];
				$count = 1;
				foreach ($data['variants'][$key]['item_images'] as $img) {
					$data['variants'][$key]['images_nbs'][$count] = $count;
					$count++;
				}
			}
			$clean_barcode = preg_replace('/-\d+$/', '', (string) $this->Item->get_field('barcode'));
			$this->Item->set_field('barcode', $clean_barcode);
		}

		// ---- Configs, categories, colors, tags, etc ----
		$this->load->model('Configuration');
		$TVA1 = $this->Configuration->fetch_TVA1()["valueStr"];
		$TVA2 = $this->Configuration->fetch_TVA2()["valueStr"];
		$TVA = [0, doubleval($TVA1), doubleval($TVA2)];
		$data['TVA'] = array_combine($TVA, $TVA);
		$categories = $this->Configuration->fetch_categories()["valueStr"];
		$categories = explode(",", $categories);
		$data['categories'][0] = '';
		foreach ($categories as $c) {
			$data['categories'][$c] = $c;
		}
		$sub_categories = $this->Configuration->fetch_sub_categories()["valueStr"];
		$sub_categories = explode(",", $sub_categories);
		$data['sub_categories'][0] = '';
		foreach ($sub_categories as $c) {
			$data['sub_categories'][$c] = $c;
		}
		$data['gender'] = array('Unisex' => 'Unisex', 'Female' => 'Female', 'Male' => 'Male',  'gender_free' => 'Gender Free',);
		$colors = $this->Configuration->fetch_colors()["valueStr"];
		$colors = explode(",", $colors);
		$data['colors'][0] = '';
		foreach ($colors as $c) {
			$data['colors'][$c] = $c;
		}
		$this->load->model('Tag');
		$tags =  $this->Tag->load_all_tags();
		$data['tags'][0] = '';
		foreach ($tags as $c) {
			$data['tags'][$c['id']] = $c['tag'];
		}
		$data['variant1'] = [
			"NULL" => " ",
			"Apparel & Accessories > Shoes & Footwear" => "Apparel & Accessories > Shoes & Footwear",
			"Apparel & Accessories > Clothing" => "Apparel & Accessories > Clothing",
			"Apparel & Accessories > Clothing Accessories" => "Apparel & Accessories > Clothing Accessories",
			"Health & Beauty > Beauty > Skin Care" => "Health & Beauty > Beauty > Skin Care",
			"Health & Beauty > Beauty > Hair care & Styling" => "Health & Beauty > Beauty > Hair care & Styling",
			"Health & Beauty > Personal Care > Fragrances" => "Health & Beauty > Personal Care > Fragrances",
			"Jewelry & watches > jewelry" => "Jewelry & watches > jewelry",
			"Travel & Luggage > Hanbags & Wallets" => "Travel & Luggage > Hanbags & Wallets",
		];


		$size_guidances = $this->Configuration->fetch_size_guidances()["valueStr"];
		$size_guidances = explode(",", $size_guidances);
		foreach ($size_guidances as $c) {
			$data['size_guidance'][$c] = $c;
		}
		// var_dump($data);exit;
		$data['title'] = $page_title;
		$this->load->view('templates/header', [
			'_page_title' => $page_title,
			'_moreCss' => [
				'css/bootstrap-select.min'
			]
		]);
		$this->load->view('items/form', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'bootstrap-select.min',
				'items/generate',
				'items/form'
			]
		]);
	}

	public function delete($id)
	{
		$item = $this->Item->fetch_item($id)[0];

		$main_item_id = $item['main_item_id'];
		$variants = $this->Item->getItemVariants($main_item_id);
		$base_barcode = preg_replace('/-\d+$/', '',  $item['barcode']);

		if ($this->Item->fetch_all_item_details($id)) {
			$this->session->set_flashdata('message', $this->lang->line('active_item_cant_be_deleted'));
			redirect($_SERVER['HTTP_REFERER']);
			return;
		}

		if ($main_item_id == $item['id']) {
			$main_item_id = $variants[1]['id'];
		}
		$item_images = $this->Item->load_item_images($id);
		if ($this->Item->delete($id)) {
			foreach ($item_images as $image) {
				$filename =  'assets/uploads/' . $image['image_name'];
				unlink($filename);
			}
			$variants = array_filter($variants, function ($variant) use ($id) {
				return $variant['id'] != $id;
			});

			if (empty($variants)) {
				redirect('items/index');
				return;
			}
			$this->Item->rearrange_variants($variants, $base_barcode, $main_item_id);
			$referer = $_SERVER['HTTP_REFERER'];
			$edit_page_pattern = '/edit\/' . $id . '$/';

			if (preg_match($edit_page_pattern, $referer)) {
				redirect('items/edit/' . $main_item_id);
			} else {
				redirect($referer);
			}
		} else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}



	public function fetchitemnumberfromDatabase()
	{
		$get_last_number = $this->Item->generate_autonumber();
		echo $get_last_number;
		$this->Item->set_field('barcode', $get_last_number);
	}

	public function activity($id)
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Item->load_items_activity_data_tables($id));
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'items/activity/' . $id);
			// $this->pageTitle = $this->lang->line('items');
			$data['records'] = $this->Item->paginate_items_activity($id);
			$data['item_id'] = $id;
			$data['title'] = $this->lang->line('item_activity');
			if ($data['records']) {
				$this->load->view('templates/header', [
					'_page_title' => $this->lang->line('item_activity'),
					'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min']
				]);
				$this->load->view('items/activity', $data);
				$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'dataTables.fixedHeader.min', 'items/activity']]);
			} else {
				$this->session->set_flashdata('message', $this->lang->line('Warning_Item_Not_Active'));
				redirect('items/index');
			}
		}
	}

	public function warehouses($id)
	{
		$data['item_id'] = $id;
		$item = $this->Item->load_item_data($id);
		$data['item'] = $item[0]["description"] . " - " . $item[0]["barcode"];
		$this->load->model('Warehouse');
		//$warehouses_list= $this->Warehouse->load_item_all_warehouses_and_shelfs($id);
		$warehouses_ids = $this->Warehouse->fetch_warehouse_id_by_item_id($id);
		$data['warehouses_shelfs'] = [];
		foreach ($warehouses_ids as $w_id) {
			$qty = $this->Warehouse->load_item_all_warehouses_and_shelfs($w_id["warehouse_id"], $id)["qty"];
			if (intval($qty) > 0) {
				$result = $this->Warehouse->fetch_warehouse_shelf($w_id["warehouse_id"]);
				$data['warehouses_shelfs'][$w_id["warehouse_id"]] = $result["w_s"];
			}
		}
		$all = $this->Warehouse->fetch_all_warehouse_shelf();
		$data['all_warehouses_shelfs'] = [];
		foreach ($all as $a) {
			$data['all_warehouses_shelfs'][$a["id"]] = $a["w_s"];
		}
		$data['records'] = $this->Warehouse->load_item_inventory($id);
		if ($data['records'] === []) {
			$this->session->set_flashdata('message', $this->lang->line('Warning_Item_Not_found_in_any_warehouse'));
			redirect('items/index');
		}
		$data["title"] = $this->lang->line('item_warehouses_activity');
		$this->load->view('templates/header', [
			'_page_title' => $this->lang->line('item_warehouses_activity'),
			'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min']
		]);
		$this->load->view('items/warehouses', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min',
				'air-datepicker/js/i18n/datepicker.en',
				'jquery.autocomplete.min',
				'items/warehouses'
			]
		]);
	}

	public function transfer($id)
	{
		$this->load->model('Transaction');
		$this->load->model('Configuration');
		$transType = "TR";
		$post = $this->input->post(null, true);
		// var_dump($post);
		// exit;
		$lc_currency = $this->Configuration->fetch_local_currency()['valueInt'];
		$auto_nb = $this->Transaction->set_next_auto_number($transType);
		$this->Transaction->set_field('id', '');
		$this->Transaction->set_field('auto_no', $auto_nb);
		$this->Transaction->set_field('trans_date', $post["trans_date"]);
		$this->Transaction->set_field('account_id', 1);
		$this->Transaction->set_field('account2_id', 1);
		$this->Transaction->set_field('currency_id', $lc_currency);
		$this->Transaction->set_field('currency_rate', 1);
		$this->Transaction->set_field('trans_type', $transType);
		$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
		$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
		$saved = $this->Transaction->insert();
		if ($saved) {
			//insert trans_items and sizes
			$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($post["from"], $id, $post["qty"], $post["sizes"], $post["cost"], -1);
			$this->Transaction->save_transaction_items_and_sizes_for_product_transfer($post["to"], $id, $post["qty"], $post["sizes"], $post["cost"], 1);
			//update cost
			$this->load->model('Transaction_item');
			$last_trans_date = $this->Transaction->fetch_last_trans_date_of_purchase_or_transfer_of_item($id);
			$last_trans_item_id = $this->Transaction->fetch_last_purchase_or_transfer_of_item_using_trans_date($id, $last_trans_date["trans_date"]);
			$last = $this->Transaction_item->fetch_trans_item_data($last_trans_item_id["transaction_item_id"]);
			$this->Transaction->update_cost_and_price_in_tr($id, $last["net_cost"]);

			redirect("items/warehouses/" . $id);
		}
	}

	public function add_opening_item($id)
	{
		$this->load->model('Transaction');
		$this->session->unset_userdata('previous_url');
		$this->session->set_userdata('previous_url', 'items/edit/' . $id);
		$op_id = $this->Transaction->fetch_OP_trans_id_for_item($id);
		if ($op_id === NULL) {
			$transType = "OI";
			$post = $this->input->post(['trans', 'transItems', 'submitBtn'], true);
			if (($this->Transaction->set_next_auto_number($transType))) {
				$this->Transaction->set_field('auto_no', $this->Transaction->set_next_auto_number($transType));
			}
			if ($post['submitBtn']) {
				$this->load->model('Configuration');
				$local_currency = $this->Configuration->fetch_local_currency()['valueInt'];
				$this->Transaction->set_fields($post['trans']);
				$this->Transaction->set_field('account_id', 1);
				$this->Transaction->set_field('account2_id', 1);
				$this->Transaction->set_field('currency_id', $local_currency);
				$this->Transaction->set_field('currency_rate', 1);
				$this->Transaction->set_field('trans_type', $transType);
				$this->Transaction->set_field('fiscal_year_id', $this->violet_auth->get_fiscal_year_id());
				$this->Transaction->set_field('user_id', $this->violet_auth->get_user_id());
				$saved = $this->Transaction->insert();
				if ($saved) {
					$this->load->model('Item');
					$qty_cost_array = $this->Transaction->get_array_of_qty_and_cost_of_each_item_in_trans($post['transItems']);
					$this->Item->update_open_qty($qty_cost_array);
					$this->Item->update_qty_in_op($qty_cost_array);
					$this->Transaction->save_opening_items_trans_items_and_sizes($post['transItems'], 1);
					redirect('items/edit/' . $id);
				} elseif ($this->Transaction->is_valid()) {
					redirect('items/edit/' . $id);
				}
			}
			$data = $this->_load_related_models_for_OP($transType, $id);
			$data['item_id'] = $id;
			$this->load->view('templates/header', [
				'_moreCss' => ['js/air-datepicker/css/datepicker.min'],
				'_page_title' => $data['transTypeText']
			]);
			$this->load->view('opening_items/form', $data);
			$this->load->view('templates/footer', [
				'_moreJs' => [
					'air-datepicker/js/datepicker.min',
					'air-datepicker/js/i18n/datepicker.en',
					'jquery.autocomplete.min',
					'items/opening_items'
				]
			]);
		} else {
			redirect('opening_items/edit/' . $op_id["id"]);
		}
	}

	private function _load_related_models_for_OP($transType, $item_id)
	{
		$data = [];
		$this->load->model(['Currency']);
		$this->load->model(['Configuration']);
		$data['sizes'] = explode(",", $this->Configuration->fetch_sizes()["valueStr"]);
		$data['transTypeText'] = 'Add New ' . $this->Transaction->get_transaction_types_list()[$transType];
		$data['transType'] = $this->Transaction->get_transaction_types_list()[$transType];
		// $currency_id = $this->Currency->fetch_currency_id_by_code("€")["id"];
		// $data['currency_rate'] = $this->Currency->fetch_currency_rate($currency_id)["currency_rate"];
		// $data['system_currency_code'] = $this->Currency->fetch_currency_code($system_currency_id)["currency_code"];
		$this->load->model('Warehouse');
		$w1 = $this->Warehouse->load_warehouses_list_for_OP($item_id);
		$w2 = $this->Warehouse->load_warehouses_ids_list();
		$result = array_diff($w2, $w1);
		$w = [];
		foreach ($result as $r) {
			$res = $this->Warehouse->fetch_warehouse_and_shelf($r);
			array_push($w, $res["warehouse"]);
		}
		$data['warehouses_list'] = array_combine($w, $w);
		$data['trans_date'] = date("d-m-Y");
		$data['records'] = [];
		return $data;
	}

	public function get_max_qty_for_each_warehouse_shelf()
	{
		$item_id = $this->input->post('item_id');
		$qty = $this->input->post('qty');
		$warehouse = $this->input->post('warehouse');
		$shelf = $this->input->post('shelf');
		$this->load->model(['Warehouse']);
		$warehouse_id = $this->Warehouse->get_warehouse_id_by_warehouse_and_shelf($warehouse, $shelf)["id"];
		$qty_max = $this->Warehouse->load_item_all_warehouses_and_shelfs($warehouse_id, $item_id)["qty"];
		echo ($qty_max);
	}

	public function check_if_barcode_exists()
	{
		$barcode = $this->input->post('barcode');
		$result = $this->Item->check_barcode($barcode);
		echo ($result["count"]);
	}

	public function get_transaction_type()
	{
		$trans_id = $this->input->post('trans_id');
		$this->load->model(['Transaction']);
		$result = $this->Transaction->fetch_trans_type_by_trans_id($trans_id);
		echo ($result);
	}

	public function check_if_barcode_exists_on_item_update()
	{
		$barcode = $this->input->post('barcode');
		$item_id = $this->input->post('id');
		$item = $this->Item->fetch_item($item_id)[0];
		$main_item_id = $item['main_item_id'];
		$result = $this->Item->check_barcode_on_item_updat($barcode, $main_item_id)["count"];
		echo ($result);
	}

	public function get_item_cost_LC()
	{
		$item_id = $this->input->post('item_id');
		$cost = $this->Item->fetch_item_cost($item_id)[0]["cost"];
		echo ($cost);
	}

	public function get_item_qty()
	{
		$item_id = $this->input->post('item_id');
		// $qty = $this->Item->fetch_qty_by_item_id($item_id)["qty"];
		$this->load->model(['Transaction']);
		$qty = $this->Transaction->calculate_available_item_qty($item_id);
		echo ($qty);
	}

	public function calculate_cost_lc_by_purch_cost()
	{
		$this->load->model(['Currency']);
		$currency_id = $this->Currency->fetch_currency_id_by_code("€")["id"];
		$currency_rate = $this->Currency->fetch_currency_rate($currency_id)["currency_rate"];
		$purchase_cost = $this->input->post('purchase_cost');
		$cost_lc = $purchase_cost * $currency_rate;
		echo ($cost_lc);
	}

	public function add_item_by_modal()
	{
		$form_data = $this->input->post('form_data');
		$inputs = [];
		foreach ($form_data as $d) {
			$inputs[$d["name"]] = $d["value"];
		}
		$this->Item->set_fields($inputs);
		$this->Item->set_field('open_qty', 0);
		$this->Item->set_field('qty', 0);
		if ($inputs["profit"] === "") {
			$this->Item->set_field('profit', 0);
		}
		if ($inputs["price"] === "") {
			$this->Item->set_field('price', 0);
			$this->Item->set_field('price_ttc', 0);
		}
		if (floatval($inputs["profit"]) > 0) {
			$this->Item->set_field('price', $inputs["cost"] * (1 + ($inputs["profit"] / 100)));
			$this->Item->set_field('price_ttc', ($inputs["cost"] * (1 + ($inputs["profit"] / 100))) * (1 + ($inputs["TVA"] / 100)));
		}
		$saved = $this->Item->insert();
		var_dump($saved);
	}

	public function delete_item_image()
	{
		$image_name = $this->input->post('image_name');
		$item_id = $this->input->post('item_id');
		$this->Item->delete_item_image_by_item_id($image_name, $item_id);
		$filename =  'assets/uploads/' . $image_name;
		$r = unlink($filename);
		$images = $this->Item->load_all_item_images($item_id);
		$count = 1;
		foreach ($images as $i) {
			$this->Item->update_product_image_order_nb($i['id'], $count);
			$count++;
		}
	}

	public function bulk_product_sale_price_edit()
	{
		$item_ids = $this->input->post('ids');
		$price = $this->input->post('price');
		$operation = $this->input->post('operation');
		if ($operation === "=") {
			foreach ($item_ids as $id) {
				$TVA = $this->Item->fetch_TVA_of_item($id)["TVA"];
				$price_ttc = doubleval($price) * (1 + (doubleval($TVA) / 100));
				$this->Item->update_item_price_and_price_ttc($id, $price, $price_ttc);
			}
		} else {
			foreach ($item_ids as $id) {
				$TVA = $this->Item->fetch_TVA_of_item($id)["TVA"];
				$price_old = $this->Item->fetch_price_of_item($id)["price"];
				$price_new = doubleval($price_old);
				if ($operation === "+") {
					$price_new = $price_new + doubleval($price);
				}
				if ($operation === "-") {
					$price_new = $price_new - doubleval($price);
				}
				if ($operation === "*") {
					$price_new = $price_new * doubleval($price);
				}
				if ($operation === "/") {
					$price_new = $price_new / doubleval($price);
				}
				$price_ttc = doubleval($price_new) * (1 + (doubleval($TVA) / 100));
				$this->Item->update_item_price_and_price_ttc($id, $price_new, $price_ttc);
			}
		}
	}

	public function bulk_product_cost_edit()
	{
		$item_ids = $this->input->post('ids');
		$cost = $this->input->post('cost');
		$operation = $this->input->post('operation');
		if ($operation === "=") {
			foreach ($item_ids as $id) {
				$item = $this->Item->load_product_data($id);
				$TVA = $item["TVA"];
				$profit = $item["profit"];
				if (doubleval($profit) > 0) {
					$price = doubleval($cost) * (1 + (doubleval($profit) / 100));
					$price_ttc = doubleval($price) * (1 + (doubleval($TVA) / 100));
					$this->Item->update_item_cost_price_and_price_ttc($id, $cost, $price, $price_ttc);
				} else {
					$this->Item->update_item_cost($id, $cost);
				}
			}
		} else {
			foreach ($item_ids as $id) {
				$item = $this->Item->load_product_data($id);
				$TVA = $item["TVA"];
				$profit = $item["profit"];
				$cost_old = $item["cost"];
				$cost_new = doubleval($cost_old);
				if ($operation === "+") {
					$cost_new = $cost_new + doubleval($cost);
				}
				if ($operation === "-") {
					$cost_new = $cost_new - doubleval($cost);
				}
				if ($operation === "*") {
					$cost_new = $cost_new * doubleval($cost);
				}
				if ($operation === "/") {
					$cost_new = $cost_new / doubleval($cost);
				}
				if (doubleval($profit) > 0) {
					$price = doubleval($cost_new) * (1 + (doubleval($profit) / 100));
					$price_ttc = doubleval($price) * (1 + (doubleval($TVA) / 100));
					$this->Item->update_item_cost_price_and_price_ttc($id, $cost_new, $price, $price_ttc);
				} else {
					$this->Item->update_item_cost($id, $cost_new);
				}
			}
		}
	}

	public function all()
	{
		if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Item->load_all_items_data_tables());
		} else {
			$this->session->unset_userdata('previous_url');
			$this->session->set_userdata('previous_url', 'items/all');
			// $this->pageTitle = $this->lang->line('items');
			$data['records'] = $this->Item->paginate_items();
			$operations	= ["=", "+", "-", "*", "/"];
			$data['operations'] = array_combine($operations, $operations);
			$data['stock_cost'] = $this->Item->calculate_stock_total_cost()["stock_cost"];
			$this->load->model('Configuration');
			$categories = $this->Configuration->fetch_categories()["valueStr"];
			$categories = explode(",", $categories);
			$data['categories'][0] = '';
			foreach ($categories as $c) {
				$data['categories'][$c] = $c;
			}
			$sub_categories = $this->Configuration->fetch_sub_categories()["valueStr"];
			$sub_categories = explode(",", $sub_categories);
			$data['sub_categories'][0] = '';
			foreach ($sub_categories as $c) {
				$data['sub_categories'][$c] = $c;
			}
			$data['gender'] = array('Female' => 'Female', 'Male' => 'Male', 'Unisex' => 'Unisex', 'gender_free' => 'Gender Free',);
			$data['gender_list'] = array('' => '', 'Female' => 'Female', 'Male' => 'Male', 'Unisex' => 'Unisex', 'gender_free' => 'Gender Free',);
			$colors = $this->Configuration->fetch_colors()["valueStr"];
			$colors = explode(",", $colors);
			$data['colors'][0] = '';
			foreach ($colors as $c) {
				$data['colors'][$c] = $c;
			}
			$this->load->model('Tag');
			$tags =  $this->Tag->load_all_tags();
			$data['tags'][0] = '';
			foreach ($tags as $c) {
				$data['tags'][$c['id']] = $c['tag'];
			}
			$data['title'] = $this->lang->line('products');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'css/bootstrap-select.min', 'css/jquery-tag-this']
			]);
			$this->load->view('items/all', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'jquery.tagthis', 'bootstrap-select.min', 'items/all']]);
		}
	}

	public function bulk_product_publish_edit()
	{
		$item_ids = $this->input->post('ids');
		$publish = $this->input->post('publish');
		// var_dump($item_ids);
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_publish($i, $publish);
		}
		echo $res;
	}

	public function update_item_image_order_nb()
	{
		$order_nb = $this->input->post('order_nb');
		$image_id = $this->input->post('image_id');
		$item_id = $this->input->post('item_id');
		$old_order_nb = $this->input->post('old_order_nb');
		$image_to_edit = $this->Item->load_image_by_item_id_and_order_nb($item_id, $order_nb);
		$this->Item->update_product_image_order_nb($image_to_edit['id'], $old_order_nb);
		$this->Item->update_product_image_order_nb($image_id, $order_nb);
	}

	public function bulk_product_stock_clearance_edit()
	{
		$item_ids = $this->input->post('ids');
		$stock_clearance = $this->input->post('stock_clearance');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_stock_clearance($i, $stock_clearance);
		}
		echo $res;
	}

	public function bulk_product_cool_storage_edit()
	{
		$item_ids = $this->input->post('ids');
		$cool_storage = $this->input->post('cool_storage');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_cool_storage($i, $cool_storage);
		}
		echo $res;
	}
	public function bulk_product_flammable_handling_edit()
	{
		$item_ids = $this->input->post('ids');
		$flammable_handling = $this->input->post('flammable_handling');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_flammable_handling($i, $flammable_handling);
		}
		echo $res;
	}
	public function bulk_product_fragile_edit()
	{
		$item_ids = $this->input->post('ids');
		$fragile = $this->input->post('fragile');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_fragile($i, $fragile);
		}
		echo $res;
	}
	public function bulk_product_size_guidance_edit()
	{
		$item_ids = $this->input->post('ids');
		$size_guidance = $this->input->post('size_guidance');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_size_guidance($i, $size_guidance);
		}
		echo $res;
	}
	public function bulk_product_category_edit()
	{
		$item_ids = $this->input->post('ids');
		$category = $this->input->post('category');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_category($i, $category);
		}
		echo $res;
	}

	public function bulk_product_sub_category_edit()
	{
		$item_ids = $this->input->post('ids');
		$sub_category = $this->input->post('sub_category');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_sub_category($i, $sub_category);
		}
		echo $res;
	}
	public function bulk_product_variant1_edit()
	{
		$item_ids = $this->input->post('ids');
		$variant1 = $this->input->post('variant1');
		if ($variant1 == "NULL" || $variant1 == '') {
			$variant1 = NULL;
		}
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_variant1($i, $variant1);
		}
		echo $res;
	}

	public function bulk_product_color_edit()
	{
		$item_ids = $this->input->post('ids');
		$color = $this->input->post('color');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_color($i, $color);
		}
		echo $res;
	}

	public function bulk_product_gender_edit()
	{
		$item_ids = $this->input->post('ids');
		$gender = $this->input->post('gender');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_gender($i, $gender);
		}
		echo $res;
	}

	public function bulk_product_old_price_edit()
	{
		$item_ids = $this->input->post('ids');
		$old_price = $this->input->post('old_price');
		foreach ($item_ids as $i) {
			$res = $this->Item->update_product_old_price($i, $old_price);
		}
		echo $res;
	}

	public function bulk_product_add_new_tags()
	{
		$item_ids = $this->input->post('ids');
		$tags = $this->input->post('tags');
		$this->load->model('Tag');
		foreach ($item_ids as $i) {
			$item_tags = $this->Tag->load_item_tags($i);
			foreach ($tags as $t) {
				if (!in_array($t, $item_tags)) {
					$res = $this->Tag->insert_item_tag($t, $i);
				}
			}
		}
		echo $res;
	}

	public function lookup_items_by_category_landing_page_editor($category)
	{
		$data['categories'] = ['', 'shoes', 'Bags & Wallets', 'Hats', 'Sunglasses', 'Perfume', 'Clothing', 'Bracelets', 'Hair & Skin Products', 'Socks', 'Other'];
		$this->load->model('Item');
		$this->_render_json(
			$this->Item->search_suggestions_new(trim($this->input->get('query', true)), $data['categories'][$category])
		);
	}
	public function delete_item_size_chart()
	{
		$image_name = $this->input->post('image_name');
		$item_id = $this->input->post('item_id');
		$this->Item->delete_item_size_chart_by_item_id($image_name, $item_id);
		$filename =  'assets/uploads/' . $image_name;
		unlink($filename);
	}
}
