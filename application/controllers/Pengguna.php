<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_pengguna','model');
    }
	public function index()
	{
		// $data = $this->model->getTable('ROLES')->result();
		$data['roles'] 	= $this->model->getTable('ROLES')->result();
		$data['sbu'] 	= $this->model->getTable('SBU')->result();
		$this->load->view('page/users/tambah',$data);
		
	}
	public function tambah()
	{
		// var_dump($_POST);
		$data = array(
			'ID_SBU' 		=> $_POST['sbu'],
			'ID_ROLE'		=> $_POST['role'],
			'CRM_EMAIL'		=> $_POST['email'],
			'CRM_PASSWORD'	=> $_POST['password'],
			'NAMA_LENGKAP'	=> $_POST['nama'],
			'TELEPON'		=> $_POST['telepon'],
			'CRM_STATUS'	=> $_POST['status']
		);
		$this->model->insert('users',$data);
		$this->session->set_flashdata('message','Data berhasil dimasukan');
		redirect('user/users');
	}
}
