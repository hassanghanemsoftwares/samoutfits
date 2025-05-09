<?php

defined('BASEPATH') or die('No direct script access allowed');

/**
 * @property Item $Item
 * @property Tag $Tag
 */

class Tags extends MY_Controller
{

    public $Transaction = NULL;
    public $Tag = NULL;

    public function __construct()
    {
        parent::__construct();
        // $this->pageTitle = $this->lang->line('tags');
        $this->load->model('Tag');
    }

    public function index(){
        if ($this->input->is_ajax_request()) {
			$this->_render_json($this->Tag->load_tags_data_tables());
		} else {
            $data['records'] = $this->Tag->paginate_tags();
			$data['title'] = $this->lang->line('tags');
			$this->load->view('templates/header', [
				'_page_title' => $data['title'],
				'_moreCss' => ['css/dataTables.bootstrap.min', 'css/fixedHeader.dataTables.min', 'js/air-datepicker/css/datepicker.min']
			]);
			$this->load->view('tags/index', $data);
			$this->load->view('templates/footer', ['_moreJs' => ['jquery.dataTables.min', 'dataTables.bootstrap.min', 'air-datepicker/js/datepicker.min', 'air-datepicker/js/i18n/datepicker.en', 'dataTables.datetime.format', 'tags/index']]);
		}
    }

    public function add(){
        $post = $this->input->post(null, true);
        if($post){
            $this->Tag->set_field('tag', $post['tag']);
            $saved =  $this->Tag->insert();
            if($saved){
                $this->session->set_flashdata('message', $this->lang->line('added_Successfully'));
            }else{
                $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
            }
        }else{
            $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
        }
        redirect('tags/index');
    }

    public function delete($id){
        if ($this->Tag->delete($id)) {
            $this->session->set_flashdata('message', $this->lang->line('deleted_Successfully'));
        }else{
            $this->session->set_flashdata('message_error', $this->lang->line('Sorry_Something_Went_Wrong'));
        }
        redirect('tags/index');
    }
}
