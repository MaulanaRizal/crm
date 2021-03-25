<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SBU extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sbu', 'sbu');	
	}
	public function index(){
		$sbu =  $this->sbu->show();
		// var_dump($sbu);
		$config = pagination('http://localhost/crm/sbu/index/',$sbu->num_rows(),10);

		$this->pagination->initialize($config);
		$data['start']	= $this->uri->segment(3);
		$data['title'] 	= 'Sbu';
		$data['sbu'] 	= $this->sbu->getTableLimit($config['per_page'],$data['start'])->result();
		log_message('error', 'Some variable did not contain a value.'); 
		$this->load->view('page/sbu/tampil', $data);
	}
		// $data["sbu"] = $this->sbu->show()->result();
		// $this->load->view('page/sbu/tampil', $data);
	public function tambah(){
		$this->form_validation->set_rules('sbu_region', 'wilayah sbu', 'required');
		if($this->form_validation->run() == false){
			$error = array(
				'sbu_error' => form_error('sbu_region')			
			);
			echo json_encode(['error' => $error]);
		}
		else{
			echo json_encode(['success' => 'Record added successfully.']);
			$data = array(
				'SBU_REGION' => $this->input->post('sbu_region'),
				'DESKRIPSI' => $this->input->post('deskripsi')
			);
			$this->sbu->insert('sbu', $data);
		}
	}
	public function ubah(){
		$this->form_validation->set_rules('sbu_region', 'wilayah SBU', 'required');
		if($this->form_validation->run() == false){
			$error = array(
				'sbu_error_edit' => form_error('sbu_region'),			
			);
			echo json_encode(['error' => $error]);
		}
		else{
			echo json_encode(['success' => 'Record added successfully.']);
			$id_sbu = $this->input->post('id_sbu');
			$data = array(
				'SBU_REGION' => $this->input->post('sbu_region'),
				'DESKRIPSI' => $this->input->post('deskripsi') 
			);
			$this->sbu->update($data, $id_sbu);
		}
	}

	public function cari(){
		$keyword = $this->input->post('keyword');
		$data = $this->sbu->search($keyword);
		$hasil = $this->load->view('page/sbu/view', array('sbu' => $data), true);
		$callback = array(
			'hasil' => $hasil
		);
		echo json_encode($callback);
	}

	public function hapus(){
		$id_sbu = $this->input->post('id_sbu');
		$this->sbu->delete($id_sbu);
		redirect('sbu');
	}
} 
?>