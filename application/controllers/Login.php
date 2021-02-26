<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_login','login');
    }
	public function index()
	{
		$where = array(
			'CRM_EMAIL'		=> $_POST['email'],
			'CRM_PASSWORD'	=> $_POST['password']
		);
		$login_status = $this->login->login('users',$where)->num_rows();
		// echo $login_status;
		if($login_status == 1 ){
			echo 'masuk';
			redirect('user/dashboard');
		}else{
			// echo 'gagal masuk';
			$this->session->set_flashdata('fail','username atau password salah');
			redirect('user');
		}
	}
	public function login()
	{
		$this->load->view('awal');
	}
}
