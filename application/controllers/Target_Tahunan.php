<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_Tahunan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		check_not_login();
		$this->load->model('m_Target_Tahunan', 'model');
	}

	public function index()
	{
		// load needed databases
		$saleses = $this->model->tampilSalesSBUTarget(array('annual_target_sbu.ID_SBU' => $_SESSION['ID_SBU']));
		$target = $this->model->getData('annual_target_sbu', array('ID_SBU' => $_SESSION['ID_SBU']));

		if ($target->num_rows() == 0) {
			echo 'kosong';
			foreach ($saleses->result() as $sales) {
				$data = array(
					'ID_SALES' => $sales->ID_USER,
					'ID_SBU'  => $sales->ID_SBU,
					'PERIODE' => date('Y')
				);
				$this->model->insert('annual_target_sbu', $data);
			}
			redirect('target_tahunan');
		} else {
			$data['title']	  = 'Target Tahunan';
			$data['saleses'] = $saleses->result();
			$this->load->view('page/target tahunan/annual', $data);
			

			// var_dump($saleses->result());
		}

		// 	$data['title'] = "Target Tahunan Pusat";
		// 	$data['saleses']= $sales->result();
		// 	$this->load->view('page/target tahunan/annual',$data);
	}

	public function add()
	{
		$this->load->view('awal');
	}
}
