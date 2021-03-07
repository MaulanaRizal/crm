<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Target_Tahunan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_Target_Tahunan', 'target');
    }

	public function index()
	{
		$data['targets'] = $this->target->tampilTable($_SESSION['ID_SBU'])->result();
		$data['title'] = "Target Tahunan";
		$this->load->view('page/annual',$data);
	}
	public function add()
	{
		$where = array(
			'ID_SBU' => $_SESSION['ID_SBU'],
			'PERIODE' => $_POST['periode']
		);
		$row = $this->target->getData('annual_target',$where)->num_rows();
		// var_dump($row);
		if($_POST['periode']>date('Y') or $row<1){
			$data = array(
				'ID_SBU' => $_SESSION['ID_SBU'],
				'PERIODE' => $_POST['periode'],
				'ANNUAL_TARGET' => $_POST['target'],
				'CRM_STATUS'		=> "Ongoing"
			);
			$this->target->insert('annual_target',$data);
			redirect('target_tahunan');
		}else{
			$this->session->set_flashdata('message',"<div class='alert alert-danger'><strong>Gagal!</strong>periode yang dimasukan sudah berlangsung</div>");                        
			redirect('target_tahunan');
		}
	}
}
