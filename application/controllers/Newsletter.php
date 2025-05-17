<?php
defined('BASEPATH') or exit ('No direct script access allowed');
/**
 * @property NewsletterModel $NewsletterModel

 */
class Newsletter extends MY_Controller
{
       function __construct()
    {
        parent::__construct();
        $this->load->model('NewsletterModel');
    }

    public function submit()
    {
         $email = $this->input->post('email', true);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->session->set_flashdata('error', 'Invalid email address.');
            redirect($_SERVER['HTTP_REFERER']);
        }

        $saved = $this->NewsletterModel->add_email($email);

        if ($saved) {
            $this->session->set_flashdata('success', 'Subscribed successfully!');
        } else {
            $this->session->set_flashdata('error', 'Email is already subscribed.');
            
        }

        redirect($_SERVER['HTTP_REFERER']);
    }
}
