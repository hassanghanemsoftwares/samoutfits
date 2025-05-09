<?php

/**
 * @property MY_Controller $ci
 * @property string $current_url
 * @property User $User
 */
class Violet_hook
{

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->current_url = "{$this->ci->uri->rsegment(1)}/{$this->ci->uri->rsegment(2)}";
	}

	private function load_user_language()
	{
		$systemLang = $this->ci->config->item('language');
		$this->ci->input->set_cookie('LANG_COOKIE_NAME');
		$userLang = $this->ci->input->cookie(LANG_COOKIE_NAME, true);
		if (empty($userLang)) {
			// set default lang coockie value
			$this->ci->input->set_cookie(LANG_COOKIE_NAME, $systemLang, time() + LANG_COOKIE_LIFE);
		} elseif ($systemLang !== $userLang) {
			$langFiles = array_keys($this->ci->lang->is_loaded);
			$this->ci->lang->is_loaded = [];
			$this->ci->config->set_item('language', $userLang);
			$this->ci->lang->load($langFiles);
		}
	}

	public function boot_up()
	{
		$this->load_user_language();
		$this->check_logged_in_user();
		if ($this->ci->violet_auth->is_logged_in())
			$this->check_selected_fiscal_year();
	}

	private function check_logged_in_user()
	{
		$controller = $this->ci->uri->rsegment(1);
		$action = $this->ci->uri->rsegment(2);
		$login_uri = $this->ci->violet_auth->get_login_uri();
		if (!$this->ci->violet_auth->is_logged_in() && $login_uri !== $this->current_url) {
			redirect($login_uri);
		} elseif ($this->ci->violet_auth->is_logged_in() && $login_uri === $this->current_url) {
			redirect('accounts/index');
		} elseif ($this->ci->violet_auth->is_logged_in() && $login_uri !== $this->current_url) {
			$url_permission_group = [
				//accounts start
				"accounts/index",
				"accounts/add",
				"accounts/edit",
				"accounts/activity",
				//accounts start
				//items start
				"items/index",
				"items/add",
				"items/edit",
				"barcodes/generate",
				//items end
				//sales start
				"sales/index",
				"sales/add",
				"sales/edit",
				"sales/archive",
				"pre_orders/index",
				"pre_orders/add",
				"pre_orders/edit",
				"return_sales/index",
				"return_sales/add",
				"return_sales/edit",
				//sales end
				"opening_items/index",
				"transfers/index",
				"quotations/index",
				"orders/index",
				"delivery_notes/index",
				"return_sales/index",
				//order purchases start
				"order_purchases/index",
				"order_purchases/add",
				"order_purchases/edit",
				"barcodes/bulk_print",
				"order_purchases/to_purchase",
				//order purchases end
				"return_purchases/index",
				//reports start
				"journal_accounts/index",
				"warehouses/reports",
				"reports/wakilni_data",
				"reports/daily_pickup",
				"reports/daily_sales",
				"reports/stock",
				"reports/multi_invoices",
				"order_purchases/op_inventory",
				//reports end
				// inventory start
				"warehouses/inventory",
				"order_purchases/inventory",
				//inventory end
				"configurations/index",
				"users/index",
				"users/choose_fiscal_year",
				//administration start
				"purchases/index",
				"purchases/add",
				"purchases/edit",
				"payments/index",
				"payments/add",
				"payments/edit",
				"receipts/index",
				"receipts/add",
				"receipts/edit",
				"sales/receive_cash",
				"reports/profits_per_date",
				"fiscal_years/index",
				"fiscal_years/add",
				"fiscal_years/edit",
				"currencies/index",
				"currencies/add",
				"currencies/edit",
				"warehouses/index",
				"warehouses/add",
				"warehouses/edit",
				"configurations/index",
				"tags/index",
				"tags/add",
				"tags/edit",
				"users/index",
				"users/add",
				"users/edit",
				"users/choose_fiscal_year",
				"users/edit_permissions",
				//administration end
				//ecommerce start
				"ecommerce/orders",
				"ecommerce/sales",
				"sales/check",
				"sales/exchange",
				"sales/return_sales",
				"ecommerce/coupons",
				"ecommerce/add_coupon",
				"ecommerce/edit_coupon",
				"ecommerce/inbox",
				"ecommerce/sent_messages",
				"ecommerce/create_message",
				"ecommerce/users",
				"ecommerce/sections",
				"ecommerce/landing_page",
				//ecommerce end
			];
			if (in_array($this->current_url, $url_permission_group)) {
				$user_id = $this->ci->violet_auth->get_user_id();
				$this->ci->load->model("User");
				$permission = $this->ci->User->check_user_permission($user_id, "{$controller}/{$action}")["count"];
				if ($permission === "0") {
					redirect('No_permissions/index');
				}
			}
		}
	}
	private function check_selected_fiscal_year()
	{
		$select_fiscal_year_uri = $this->ci->violet_auth->get_select_fiscal_year_uri();
		if (empty($this->ci->violet_auth->get_fiscal_year_id()) && $select_fiscal_year_uri !== $this->current_url) {
			redirect($select_fiscal_year_uri);
		}
	}
}


// $url_permission_group = [
// 	"accounts/index",
// 	"items/index",
// 	"opening_items/index",
// 	"transfers/index",
// 	"quotations/index",
// 	"orders/index",
// 	"delivery_notes/index",
// 	"return_sales/index",
// 	"sales/receive_cash",
// 	"order_purchases/index",
// 	"purchases/index",
// 	"return_purchases/index",
// 	"payments/index",
// 	"receipts/index",
// 	"journal_accounts/index",
// 	"warehouses/reports",
// 	"reports/wakilni_data",
// 	"reports/daily_pickup",
// 	"fiscal_years/index",
// 	"currencies/index",
// 	"warehouses/index",
// 	"configurations/index",
// 	"users/index",
// 	"users/choose_fiscal_year"
// ];