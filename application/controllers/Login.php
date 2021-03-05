<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
    	check_already_login();
		$this->load->view('auth/login');
	}

	public function proses(){
		$post = $this->input->post(null, TRUE);
		if(isset($post['login'])){
			$this->load->model('m_login');
			$query = $this->m_login->login($post);
			if ($query->num_rows() > 0) {
				$row = $query->row();
				$data = $this->m_login->get($row->ID_USER)->row();
				$params = array(
					'ID_USER' => $data->ID_USER,
					'ID_ROLE' => $data->ID_ROLE,
					'ID_SBU' => $data->ID_SBU,
					'CRM_EMAIL' => $data->CRM_EMAIL,
					'NAMA_LENGKAP' => $data->NAMA_LENGKAP,
					'TELEPON' => $data->TELEPON,
					'CRM_ROLE' => $data->CRM_ROLE
				);
				$this->session->set_userdata($params);
				echo "<script>
					alert('Selamat, login berhasil');
					window.location='".site_url('user/dashboard')."';
				</script>";
			}
			else{
				echo "<script>
					alert('Login Gagal');
					window.location='".site_url('login')."';
				</script>";
			}
		}
	}

	public function logout()
	{
		$params = array('ID_USER', 'ID_ROLE');
		$this->session->unset_userdata($params);
		redirect('login');
	}
}
