<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SBU extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sbu', 'sbu');	
	}
	public function index(){
		$data["sbu"] = $this->sbu->show()->result();
		$this->load->view('page/sbu/tampil', $data);
	}
	public function tambah(){
		$this->form_validation->set_rules('sbu_region', 'SBU_REGION', 'required');
		$this->form_validation->set_rules('deskripsi', 'DESKRIPSI', 'required');
		if($this->form_validation->run() == false){
			echo validation_errors();
		}
		else{
			$data = array(
				'SBU_REGION' => $this->input->post('sbu_region'),
				'DESKRIPSI' => $this->input->post('deskripsi')
			);
			$this->sbu->insert('sbu', $data);
			$this->session->set_flashdata('message','Data berhasil dimasukan');
		}
	}
	public function ubah(){
		$id_sbu = $this->input->post('id_sbu');
		$data = array(
			'SBU_REGION' => $this->input->post('sbu_region'),
			'DESKRIPSI' => $this->input->post('deskripsi') 
		);
		$this->sbu->update($data, $id_sbu);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('sbu');
	}
	public function hapus(){
		$id_sbu = $this->input->post('id_sbu');
		$this->sbu->delete($id_sbu);
		redirect('sbu');
	}
} 
?>