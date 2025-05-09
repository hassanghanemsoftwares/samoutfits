<?php

defined('BASEPATH') or die('No direct script access allowed');

class Tag extends MY_Model
{

    protected $modelName = 'Tag';
    protected $_table = 'tags';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'tag'];
    protected $allowedNulls = [];

    public function __construct()
    {
        parent::__construct();
    }

    public function paginate_tags()
    {
        $query = [
            'select' => "id, tag",
            'order_by' => ['id', 'DESC']
        ];
        return parent::paginate($query, ['urlPrefix' => '']);
    }

    public function load_tags_data_tables()
    {
        $dt = [
            'columns' => [
                'tags.tag', 'tags.id'
            ],
            'search_in' => ['tags.tag']
        ];
        return parent::load_datatables_pagedata($dt);
    }

    public function load_all_tags()
    {
        $query = [
            'select' => "id, tag",
            'order_by' => ['id', 'DESC']
        ];
        return $this->load_all($query);
    }

    public function load_item_tags($item_id)
    {
        $query = [
            'select' => "tags.id, tags.tag",
            'join' => ['item_tags', 'item_tags.tag_id = tags.id', 'inner'],
            'where' => ['item_tags.item_id', $item_id],
            'order_by' => ['id', 'DESC']
        ];
        return $this->load_all($query);
    }

    public function insert_item_tags($tags, $id)
    {
        foreach ($tags as $tag) {
            if ($tag) {
                $data = array(
                    'item_id' => $id,
                    'tag_id' => $tag,
                );
                $this->db->insert('item_tags', $data);
            }
        }
    }

    public function delete_all_item_tags($id)
    {
        return $this->db->delete('item_tags', array('item_id' => $id));
    }

    public function insert_item_tag($tag_id, $item_id)
    {
        $data = array(
            'item_id' => $item_id,
            'tag_id' => $tag_id,
        );
        $this->db->insert('item_tags', $data);
    }
}
