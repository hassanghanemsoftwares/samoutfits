<?php 
class No_permissions extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
	}
    public function index(){
        $page_title="No Permissions";
        $data['title'] =  $page_title;
		$this->load->view('templates/header', [
			'_moreCss' => ['js/air-datepicker/css/datepicker.min', 'css/bootstrap-select.min', 'css/bootstrap-select-country.min'],
			'_page_title' => $page_title
		]);
		$this->load->view('no_permissions/index', $data);
		$this->load->view('templates/footer', [
			'_moreJs' => [
				'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en',
				'bootstrap-select.min', 'bootstrap-select-country.min'
			]
		]);
    }
}

?>