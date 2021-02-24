<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function index()
	{
		$this->load->view('page/users/tambah');
		
	}
	public function blank()
	{
		$this->load->view('blank');

	}
}
