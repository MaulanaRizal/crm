<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Opportunity extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_opportunity');
	}

	public function index(){
		$data['opportunities'] = $this->m_opportunity->show()->result();
		$this->load->view('page/opportunity/index', $data);
	}

	public function tambahOpportunity(){
		$dataDB = $this->m_opportunity->cekNo_Opportunity();
		$noUrut = substr($dataDB, 3, 4);
		$noOpportunitySekarang = $noUrut + 1;
		$data = array('NO_OPPORTUNITY' => $noOpportunitySekarang);
		$this->load->view('page/opportunity/tambah', $data);
	}

	public function simpan(){
		$data = array(
			'KATEGORI' => $this->input->post('kategori'),
			'CRM_STATUS' => $this->input->post('status'),
			'SBU' => $this->input->post('sbu'),
			'PEMILIK' => $this->input->post('pemilik'),
			'NO_OPPORTUNITY' => $this->input->post('no_opportunity'),
			'TOPIC' => $this->input->post('topic'),
			'NAMA_PELANGGAN' => $this->input->post('nama_pelanggan'),
			'TANGGAL' => $this->input->post('tanggal'),
			'TANGGAL_TARGET' => $this->input->post('tanggal_target'),
			'TIPE_SURVEY' => $this->input->post('tipe_survey'),
			'WAKTU_PEMESANAN' => $this->input->post('waktu_pemesanan'),
			'PENDAPATAN' => $this->input->post('rupiah1'),
			'ANGGARAN' => $this->input->post('rupiah2'),
			'PROSES_PEMESANAN' => $this->input->post('proses_pemesanan'),
			'DESKRIPSI' => $this->input->post('deskripsi'),
			'SITUASI_SEKARANG' => $this->input->post('situasi_sekarang'),
			'KEBUTUHAN_PELANGGAN' => $this->input->post('kebutuhan_pelanggan'),
			'SOLUSI' => $this->input->post('solusi')
		);
		$this->m_opportunity->insert('opportunities', $data);
		$this->session->set_flashdata('message', 'Data berhasil disimpan');
		redirect('opportunity');	
	}

	// public function tambah(){
	// 	$data = array(
	// 		'SBU_REGION' => $this->input->post('sbu_region'),
	// 		'DESKRIPSI' => $this->input->post('deskripsi')
	// 	);
	// 	$this->sbu->insert('sbu', $data);
	// 	$this->session->set_flashdata('message','Data berhasil dimasukan');
	// 	redirect('sbu');
	// }

	public function updateOpportunity(){
		$this->load->view('page/opportunity/update');
	}
}
?>