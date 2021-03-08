<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alamat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_alamat', 'alamat');
    }

	public function index()
	{
        $data['title'] = 'Alamat';

		$this->load->view('page/alamat/tampil',$data);
	}
	public function tambah()
	{
        $data['title']  = 'Tambah Alamat';
        $data['sbus']   =  $this->alamat->getTable('sbu')->result();
        $data['prov']   = $this->alamat->getProvinsi()->result();
		$this->load->view('page/alamat/tambah',$data);
	}
}
