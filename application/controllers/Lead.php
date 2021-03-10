<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends CI_Controller{
	public function index(){
		$this->load->view('page/lead/tampil');
	}

	public function tambahLead(){
		$this->load->view('page/lead/tambah');
	}

	public function updateLead(){
		$this->load->view('page/lead/update');
	}
}
?>