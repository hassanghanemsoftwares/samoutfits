<?php

defined('BASEPATH') or die('No direct script access allowed');

class Keyword extends MY_Model
{

	protected $modelName = 'Keyword';
	protected $_table = 'keywords';
	protected $_listFieldName = 'id';
	protected $_fieldsNames = ['id', 'keyword', 'type'];
	protected $allowedNulls = [];

	public function __construct()
	{
		parent::__construct();
	}

    public function find_keywords_by_search($word){
        $this->db->select('keywords.*');
		$this->db->from('keywords');
        $this->db->like('keyword', $word, 'both');
        if(strtolower($word) == "shoes"){
        $this->db->where('type !=', 'tag');
        }
        $query = $this->db->get()->result_array();
		return $query;
    }
}