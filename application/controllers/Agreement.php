<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agreement extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_agreement', 'model');	
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
	public function insert()
	{
		// echo "----------> array POST : <br>";
		// var_dump($_POST);
		$data = array (
			'NO_AGREEMENT' 		=> '',
			'TANGGAL_AGREEMENT' => $_POST['agr_date'],
			'TANGGAL_MULAI' 	=> $_POST['agr_mulai'],
			'TANGGAL_BERAKHIR'	=> $_POST['agr_selesai'],
			'IS_RENEWAL' 		=> $_POST['isRenewal'],
			'JENIS_TAGIHAN' 	=> $_POST['agr_bill'],
			'TANGGAL_POTONG' 	=> $_POST['agr_cut'],
			'TIPE_PERIODE' 		=> $_POST['agr_period'],
			'PERIODE' 			=> $_POST['agr-period-jml'],
			'PER_PERIODE' 		=> $_POST['agr_period'],
			'JANGKA_WAKTU' 		=> $_POST['agr_waktu'],
			'AGREEMENT_TEKS' 	=> $_POST['agr_isi'],
			'HUKUMAN' 			=> $_POST['agr_hukuman'],
			'AKUN_BANK' 		=> '',
			'REKENING' 			=> '',
			'CRM_STATUS' 		=> $_POST['crm_status'],
			'SBU_OWNER'			=> $_POST['crm_sbu'],
			'ID_USER '			=> $_POST['crm_owner'],
			'DESKRIPSI'			=> $_POST['crm_deskrip'],
		);
		// echo "----------> array data : <br>";
		var_dump($data);
		$this->model->insert('agreements',$data);
		$this->session->set_flashdata('message',"<div class='alert alert-success'><strong>Berhasil!</strong>Ageement berhasil ditambahkan</div>");                        

	}
	
}
?>