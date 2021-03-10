<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Opportunity extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_opportunity');
	}

	public function index(){
		$data['opportunity'] = $this->m_opportunity->show()->result();
		$this->load->view('page/opportunity/index', $data);
	}

	public function tambahOpportunity(){
		$this->load->view('page/opportunity/tambah');
	}

	public function updateOpportunity(){
		$this->load->view('page/opportunity/update');
	}
}
?>