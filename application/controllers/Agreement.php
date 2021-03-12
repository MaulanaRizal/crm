<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agreement extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_agreement', 'agreement');	
	}
	public function index()
	{
		$data['title'] = 'Agreement';
		$this->load->view('page/agreement/tampil',$data);
	}
	public function tambah(){
		$data['title'] = 'Tambah Agreement';
		$this->load->view('page/agreement/tambah',$data);
	}
	public function updateAgreement(){
		$this->load->view('page/agreemnet/update');
	}
}
?>