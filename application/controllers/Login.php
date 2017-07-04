<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('login_form');
    }

    public function validate()
    {
        $this->form_validation->set_rules('username', 'Username');
        $this->form_validation->set_rules('password', 'Password', 'min_length[8]',
            array('required' => 'You must provide a %s.')
        );

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_error');
        } else {
            $this->load->view('login_success');
        }
    }
}