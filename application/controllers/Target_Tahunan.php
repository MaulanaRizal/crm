<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Target_Tahunan extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_Target_Tahunan_Pusat', 'model');
    }

	public function index()
	{

		$data['title'] = "Target Tahunan Pusat";
		$this->load->view('page/target tahunan/annual',$data);
	}
	public function add()
	{

	}
}
