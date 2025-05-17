<?php


defined('BASEPATH') or die('No direct script access allowed');

class NewsletterModel extends MY_Model
{
    protected $table = 'newsletter_subscribers';
    protected $primaryKey = 'id';
    protected $allowedFields = ['email', 'created_at'];
    public $timestamps = true;

        public function __construct()
    {
        parent::__construct();
    }

    public function add_email($email)
    {
        // Check for duplicates
        $this->db->where('email', $email);
        $query = $this->db->get('newsletter_subscribers');

        if ($query->num_rows() > 0) {
            return false; // already exists
        }

        return $this->db->insert('newsletter_subscribers', ['email' => $email]);
    }
}
