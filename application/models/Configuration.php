<?php

/**
 * @property Account $Account Accounting Account Model
 */
class Configuration extends MY_Model
{

    protected $modelName = 'Configuration';
    protected $_table = 'configurations';
    protected $_listFieldName = 'name';
    protected $_fieldsNames = ['id', 'name', 'type', 'valueInt', 'valueStr'];
    protected $allowedNulls = ['valueInt', 'valueStr'];
    protected $variables = [];
    protected $keys = ['CompanyName', 'CompanyAddress', 'CompanyPhone', 'CompanyEmail', 'CompanyWebsite', 'CompanyLogo', 'Language', 'SystemCurrency', 'TestThree', 'sizes', 'status', 'source', 'categories', 'delivery_charge'];
    protected $numericFields = ['TestThree', 'Language', 'SystemCurrency'];
    private $serializedFields = [];
    protected $fileControls = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function fetch_sizes()
    {
        $this->db->select('valueStr');
        $this->db->from('configurations');
        $this->db->where('name', "sizes");
        $query = $this->db->get()->row_array();
        $result = explode(",",$query['valueStr']);
        $res = [];
        foreach($result as $q){
            $res[$q] = $q;
        }
        return $res;
    }

    public function fetch_colors()
    {
        $this->db->select('valueStr');
        $this->db->from('configurations');
        $this->db->where('name', "colors");
        $query = $this->db->get()->row_array();
        $result = explode(",",$query['valueStr']);
        $res = [];
        foreach($result as $q){
            $res[$q] = $q;
        }
        return $res;
    }

    public function fetch_delivery_charge()
    {
        $this->db->select('valueStr');
        $this->db->from('configurations');
        $this->db->where('name', "eco_delivery_charge");
        $query = $this->db->get()->row_array();
        return $query;
    }
}
