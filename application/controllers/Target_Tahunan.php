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
		$saleses = $this->model->getData('users',array ('ID_ROLE' => 2,'ID_SBU'=> $_SESSION['ID_SBU']));
		$target = $this->model->getData('annual_target_sbu', array('ID_SBU' => $_SESSION['ID_SBU']));

		// var_dump($target->num_rows());
		if ($target->num_rows() == 0) {
		// 	echo 'kosong';
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
			$data['period'] = $this->model->getPeriode();
			$data['periode']= date('Y');
			$data['title']	 = 'Target Tahunan';
			$data['saleses'] = $this->model->tampilSalesSBUTarget(array('annual_target_sbu.ID_SBU' => $_SESSION['ID_SBU']))->result();
			$this->load->view('page/target tahunan/annual', $data);
			// var_dump($saleses->result());
		}

		// 	$data['title'] = "Target Tahunan Pusat";
		// 	$data['saleses']= $sales->result();
		// 	$this->load->view('page/target tahunan/annual',$data);
	}

	public function edit_target()
	{
		// var_dump($_POST);
		// form validation
		$this->form_validation->set_rules('nominal', 'Nominal', 'required');
		$this->form_validation->set_rules('tahun', 'Tahun Periode', 'required');
		$this->form_validation->set_rules('sales', 'Sales', 'required');

		if ($this->form_validation->run() == true) {
			$nominal = str_replace('Rp. ', '', $_POST['nominal']);
			$nominal = str_replace('.', '', $nominal);
			$nominal = str_replace(',00', '', $nominal);
			$int_nominal = (int)$nominal;

			$where = array(
				'PERIODE' => $_POST['tahun'],
				'ID_SALES' => $_POST['sales']
			);
			$this->model->update('annual_target_sbu', array('ANNUAL_TARGET' => $int_nominal), $where);
			var_dump($where);
			$this->session->set_flashdata('message', "<div class='alert alert-success'><strong>Berhasil !</strong> target berhasil ubah.</div>");
			redirect('target_tahunan');
		} else {
			$this->session->set_flashdata('message', "<div class='alert alert-danger'><strong>Gagal !</strong> Terjadi kesalahan coba lagi.</div>");
			redirect('target_tahunan');
		}
	}

	public function periode($tahun)
	{
		if($tahun=='tambah'){
			// form vallidation
			$this->form_validation->set_rules('tahun','Periode Tahun','required');
			$this->form_validation->set_rules('check','Check','required');
			
			// proses tambah periode  dan target setiap sales
			$per = $this->model->getPeriode();
			// var_dump($per);
			if($this->form_validation->run()==true and in_array($tahun,$per)){
				// load database
				$sales = $this->model->getData('users',array ('ID_ROLE' => 2,'ID_SBU' => $_SESSION['ID_SBU']));
				foreach($sales as $s){
					$data = array (
						'PERIODE' => $_POST['tahun'],
						'ID_SALES'=> $s->ID_USER,
						'ID_SBU'  => $s->ID_SBU
					);
					var_dump($data);
				}
			}elseif(!in_array($tahun,$per)){
				$this->session->set_flashdata('message', "<div class='alert alert-danger'><strong>Gagal !</strong> Periode Tahun Tersedia.</div>");
				redirect('target_tahunan');
			}else{
				$this->session->set_flashdata('message', "<div class='alert alert-danger'><strong>Gagal !</strong> Terjadi kesalahan coba lagi.</div>");
				redirect('target_tahunan');
			}
		}else{
			$data['period']  = $this->model->getPeriode()->result();
			$data['periode'] = $tahun;
			$data['title']	 = 'Target Tahunan';
			$data['saleses'] = $this->model->tampilSalesSBUTarget(array('annual_target_sbu.ID_SBU' => $_SESSION['ID_SBU']))->result();
			$this->load->view('page/target tahunan/annual', $data);
		}
	}

}
