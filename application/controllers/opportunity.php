<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Opportunity extends CI_Controller{
	public function tambahOpportunity(){
		$this->load->view('page/opportunity/tambah');
	}
	public function updateOpportunity(){
		$this->load->view('page/opportunity/update');
	}
}
?>