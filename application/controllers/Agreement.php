<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agreement extends CI_Controller{
	public function tambahAgreement(){
		$this->load->view('page/agreement/tambah');
	}
	public function updateAgreement(){
		$this->load->view('page/agreemnet/update');
	}
}
?>