<?php

defined('BASEPATH') or die('No direct script access allowed');

class Landing_page extends MY_Model
{

    protected $modelName = 'Landing_page';
    protected $_table = 'landing_page';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'category', 'item_id'];
    protected $allowedNulls = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function load_all_landing_page_items_by_category($category)
    {
        $this->db->select('landing_page.*, items.barcode, items.description, product_images.image_name');
        $this->db->from('landing_page');
        $this->db->join('items', 'items.id = landing_page.item_id', 'inner');
        $this->db->join('product_images', 'items.id = product_images.item_id', 'left');
        $this->db->group_by('landing_page.id, items.id');
        $this->db->where('landing_page.category', $category);
        $this->db->where('(product_images.order_nb = 0 or product_images.order_nb = 1 or product_images.order_nb is NULL)');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function update_landing_page_item_id($item_id, $id)
    {
        $data = array(
            'item_id' => $item_id
        );
        $this->db->where('id', $id);
        return $this->db->update('landing_page', $data);
    }

    public function check_if_item_exists($item_id){
        $this->db->select('landing_page.*');
        $this->db->from('landing_page');
        $this->db->where('landing_page.item_id', $item_id);
        return $this->db->get()->row_array();
    }

    public function load_all_landing_page_sections()
    {
        $this->db->select('reordenig_sections.*');
        $this->db->from('reordenig_sections');
        $this->db->order_by('reordenig_sections.order_nb', 'ASC');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function load_all_landing_page_sections_by_category($category)
    {
        $this->db->select('reordenig_sections.*');
        $this->db->from('reordenig_sections');
        $this->db->where('reordenig_sections.cat_name', $category);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function load_landing_page_sections_by_section_number($section_nb)
    {
        $this->db->select('reordenig_sections.*');
        $this->db->from('reordenig_sections');
        $this->db->where('reordenig_sections.order_nb', $section_nb);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function update_landing_page_sections($section_id,$order_nb)
    {
        $data = array(
            'order_nb' => $order_nb
        );
        $this->db->where('id', $section_id);
        return $this->db->update('reordenig_sections', $data);
    }
    public function load_section($id){
        $this->db->select('sections.*');
        $this->db->from('sections');
        $this->db->where('sections.id', $id);
        return $this->db->get()->row_array();
    }
}
