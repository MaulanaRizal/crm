<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Target_Tahunan extends CI_Controller {

	public function index()
	{
		$this->load->view('page/annual');
	}
}
