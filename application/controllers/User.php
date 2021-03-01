<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_users','users');
		$this->load->model('m_menu','menu');

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
		// function createTree($data,$parent)
		// {
		// 	foreach($data as $node){
		// 		if($node->MEN_ID_MENU==$parent){
		// 			$tree[] = array(
		// 				'nama' => $node->NAMA_MENU,
		// 				'child'=> createTree($data,$node->ID_MENU)
		// 			);	
		// 		}
		// 	}	
		// 	return $tree;
		// }

		// $nav = $this->menu->getTable('Menus')->result();
		// $tree = array(
		// 	'nama'	=> 'Dashboard',
		// 	'child'	=> createTree($nav,1)
		// );
		// var_dump($tree);
		
 		
		$data['menu'] = $this->menu->getTable('Menus')->result();
		$this->load->view('page/menu',$data);
	}
	public function users()
	{
		$data['user'] = $this->users->getTable('users')->result();
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
