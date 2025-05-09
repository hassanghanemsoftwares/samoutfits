<?php

/**
 * @property MY_Controller $ci
 * @property string $current_url
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
		$userLang = $this->ci->input->cookie(LANG_COOKIE_NAME, true);
		if (empty($userLang)) {
			// set default lang coockie value
			$this->ci->input->set_cookie(LANG_COOKIE_NAME, $systemLang, time() + LANG_COOKIE_LIFE);
		} elseif ($systemLang  !== $userLang) {
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
	}

	private function check_logged_in_user()
	{
		$controller = $this->ci->uri->rsegment(1);
		$action = $this->ci->uri->rsegment(2);
		$login_uri = $this->ci->violet_auth->get_login_uri();
		if($controller === "accounts"){
			if (!$this->ci->violet_auth->is_logged_in() && $login_uri !== $this->current_url){
				redirect($login_uri);
			}
		}
	}
}
