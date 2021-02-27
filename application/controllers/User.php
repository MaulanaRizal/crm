<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_users','model');
    }
	public function index()
	{
		$this->load->view('auth/login');
	}
	public function dashboard()
	{
		$this->load->view('page/dashboard');
	}
	public function manage_menu()
	{
		$this->load->view('page/menu');
	}
	public function users()
	{
		$data['user'] = $this->model->getTable('users')->result();
		$this->load->view('page/users/tampil',$data);
	}
	public function annual_target()
	{
		$this->load->view('page/annual');
	}
	public function leads()
	{
		$this->load->view('page/lead/tampil');
	}
	public function opportunity()
	{
		$this->load->view('page/opportunity/indexOpportunity');
	}
	public function agreements()
	{
		$this->load->view('page/agreement/tampil');
	}	
	public function services()
	{
		$this->load->view('page/service');
	}
	public function sbu()
	{
		$this->load->view('page/sbu/tampil');
	}
}
