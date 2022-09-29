<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('UserLogin_model');
        $this->load->helper(array('url'));
    }

    public function index()
    {
        $this->session->unset_userdata('status');
        redirect('Login');
    }
}
