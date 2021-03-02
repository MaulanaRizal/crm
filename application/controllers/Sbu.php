<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SBU extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sbu', 'sbu');	
	}
	public function tambah(){
		$data = array(
			'SBU_REGION' => $this->input->post('sbu_region'),
			'DESKRIPSI' => $this->input->post('deskripsi')
		);
		$this->sbu->insert('sbu', $data);
		$this->session->set_flashdata('message','Data berhasil dimasukan');
		redirect('user/sbu');
	}
	public function ubah(){
		$id_sbu = $this->input->post('id_sbu');
		$data = array(
			'SBU_REGION' => $this->input->post('sbu_region'),
			'DESKRIPSI' => $this->input->post('deskripsi') 
		);
		$this->sbu->update($data, $id_sbu);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('user/sbu');
	}
	public function hapus(){
		$id_sbu = $this->input->post('id_sbu');
		$this->sbu->delete($id_sbu);
		redirect('user/sbu');
	}
} 
?>