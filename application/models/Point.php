<?php

defined('BASEPATH') or die('No direct script access allowed');

class Point extends MY_Model
{
    protected $modelName = 'Point';
    protected $_table = 'points';
    protected $_listFieldName = 'id';
    protected $_fieldsNames = ['id', 'user_id', 'order_id', 'points', 'expiry_date'];
    protected $_dateFields = ['expiry_date'];
    protected $allowedNulls = [];

    public function __construct()
    {
        parent::__construct();
    }

}
