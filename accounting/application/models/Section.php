<?php

defined('BASEPATH') or die('No direct script access allowed');

class Section extends MY_Model
{

    protected $modelName = 'Section';
    protected $_table = 'sections';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'name', 'value', 'type'];
    protected $allowedNulls = ['type'];

    public function __construct()
    {
        parent::__construct();
    }

    public function load_all_sections(){
        $query = [
            'select' => "*",
            'order_by' => ['id', 'ASC']
        ];
        return $this->load_all($query);
    }

    public function update_section_value($id, $value){
        $data = [
			'value' => $value
		];
		$this->db->where('id', $id);
		return $this->db->update('sections', $data);
    }
}
