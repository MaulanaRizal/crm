<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Lead extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_lead');
	}

	public function index(){
		$lead = $this->m_lead->show();
		$config = pagination('http://localhost/crm/lead/index/', $lead->num_rows(),20);
		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		$data['title'] = 'Lead';
		$data['lead'] = $this->m_lead->getTableLimit($config['per_page'],$data['start'])->result();		
		$this->load->view('page/lead/tampil', $data);
	}

	public function tambahLead(){
		$this->load->view('page/lead/tambah');
	}

	public function simpan(){
		$this->form_validation->set_rules('topic', 'topic', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('telepon', 'telepon', 'required|is_unique[leads.TELEPON]');
		if ($this->form_validation->run() == false) {
			$this->load->view('page/lead/tambah');
		}
		else{
			$data = array(
				'SUMBER_LEAD' => $this->input->post('sumber_lead'),
				'RATING' => $this->input->post('rating'),
				'CRM_STATUS' => $this->input->post('status'),
				'ID_USER' => $this->input->post('crm_owner'),
				'PEMILIK' => $this->input->post('pemilik'),
				'TOPIC' => $this->input->post('topic'),
				'NAMA' => $this->input->post('nama'),
				'PEKERJAAN' => $this->input->post('pekerjaan'),
				'TELEPON' => $this->input->post('telepon'),
				'COORDINAT' => $this->input->post('coordinat'),
				'ALAMAT' => $this->input->post('alamat'),
				'PENAWARAN' => $this->input->post('penawaran'),
				'PENAWARAN_KEMBALI' => $this->input->post('penawaran_kembali')
			);
			$this->m_lead->insert('leads', $data);
			redirect('lead');
		}
	}

	public function updateLead(){
		$this->load->view('page/lead/update');
	}

	public function hapus(){
		$id_lead = $this->input->post('id_lead');
		$this->m_lead->delete($id_lead);
		redirect('lead');
	}
}
?>