<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SBU extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sbu', 'sbu');	
	}
	public function tambah(){
		$data = array(
			'ID_SBU' => $POST['sbu'],
			'SBU_REGION' => $POST['sbu_region'],
			'DESKRIPSI' => $POST['deskripsi']
		);
		$this->sbu->insert('sbu', $data);
		$this->session->set_flashdata('message','Data berhasil dimasukan');
		redirect('user/sbu');
	}
} 

?>