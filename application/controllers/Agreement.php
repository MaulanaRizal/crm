<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agreement extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_agreement', 'agreement');	
	}
	public function index()
	{
		$this->load->view('page/agreement/tampil');
	}
	public function tambahAgreement(){
		$this->load->view('page/agreement/tambah');
	}
	public function updateAgreement(){
		$this->load->view('page/agreemnet/update');
	}
}
?>