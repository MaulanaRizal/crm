<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Opportunity extends CI_Controller{
	public function index(){
		$this->load->view('page/opportunity/indexOpportunity');
	}
	public function tambah(){
		$this->load->view('page/opportunity/tambahOpportunity');
	}
}
?>