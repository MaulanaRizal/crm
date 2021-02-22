<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    // public function __construct()
    // {
        
    // }

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}
	public function manage_menu()
	{
		$this->load->view('admin/menu');
	}
}
