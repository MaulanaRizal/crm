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
		$data = array (
			'CRM_EMAIL' =>$_POST['email']
		);
		$check = $this->model->getData('users',$data)->row();		
		if(isset($check)){
			// echo 'Tersedia';
			$this->session->set_flashdata('message','Email sudah tersedia. Silahkan masukan email yang lain');
			redirect('pengguna');
		}else{
			if(isset($_POST['status'])==true){
				$status = true;
			} else {
				$status = false;
			}
			$data = array(
				'ID_SBU' 		=> $_POST['sbu'],
				'ID_ROLE'		=> $_POST['role'],
				'CRM_EMAIL'		=> $_POST['email'],
				'CRM_PASSWORD'	=> $_POST['password'],
				'NAMA_LENGKAP'	=> $_POST['nama'],
				'TELEPON'		=> $_POST['telepon'],
				'CRM_STATUS'	=> $status
			);
			$this->model->insert('users',$data);
			$this->session->set_flashdata('message','Data berhasil dimasukan');
			redirect('user/users');
			// echo 'Tidak Tersedia';
		}
	}
	public function edit($id)
	{
		$where = array (
			'ID_USER' =>$id
		);
		$data['roles'] 	= $this->model->getTable('ROLES')->result();
		$data['sbu'] 	= $this->model->getTable('SBU')->result();
		$data['user']	= $this->model->getData('users',$where)->result();
		$data['id']		= $id;
		$this->load->view('page/users/edit',$data);
	}
	public function update($id)
	{
			if(isset($_POST['status'])==true){
				$status = true;
			} else {
				$status = false;
			}
			$data = array(
				'ID_SBU' 		=> $_POST['sbu'],
				'ID_ROLE'		=> $_POST['role'],
				'CRM_PASSWORD'	=> $_POST['password'],
				'NAMA_LENGKAP'	=> $_POST['nama'],
				'TELEPON'		=> $_POST['telepon'],
				'CRM_EMAIL'		=> $_POST['email'],
				'CRM_STATUS'	=> $status
			);
			$this->model->update('users',$data,$id);
			$this->session->set_flashdata('message','Data berhasil diubah');
			redirect('user/users');
			// echo 'Tidak Tersedia';
		
	}
	public function delete($id)
	{
		// echo $id;
		$this->model->delete('users',$id);
		$this->session->set_flashdata('message','Data berhasil dihapus');
		redirect('user/users');
	}
}
