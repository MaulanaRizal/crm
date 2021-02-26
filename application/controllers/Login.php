<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    // public function __construct()
    // {
        
    // }

	public function index()
	{
		$this->session->set_userdata('email', $_POST['email']);
		redirect('user/dashboard');
	}
	public function login()
	{
		$this->load->view('awal');
	}
}
