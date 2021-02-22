<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        
    }

	public function index()
	{
		$this->load->view('login');
	}
	public function login()
	{
		$this->load->view('awal');
	}
}
