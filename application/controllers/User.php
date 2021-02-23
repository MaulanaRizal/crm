<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    // public function __construct()
    // {
        
    // }
	public function dashboard()
	{
		$this->load->view('page/dashboard');
	}
	public function manage_menu()
	{
		$this->load->view('page/menu');
	}
	public function users()
	{
		$this->load->view('page/users/table_user');
	}
	public function annual_target()
	{
		$this->load->view('page/annual');
	}
}
