<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_alamat', 'model');
    }


	public function index()
	{
		// load database
		$reg = $this->model->getTable('regencies');

		$config = pagination('http://localhost/crm/welcome/index/',$reg->num_rows(),10);

		$this->pagination->initialize($config);
		$data['start'] = $this->uri->segment(3);
		$data['title'] = 'Uji Coba';
		$data['datas'] = $this->model->getTableLimit('regencies',$config['per_page'],$data['start'])->result() ;
		$this->load->view('awal',$data);
		
	}
	public function table($id)
	{
		$data['id'] = 
		$data['title'] = 'Uji Coba';
		$data['datas'] = $this->model->getTableLimit('regencies',20,0)->result();
		$data['paging']	= $this->model->getTable('regencies')->num_rows()/20;
		$this->load->view('awal',$data);

	}
}
