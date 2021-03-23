<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Npwp extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        check_not_login();
        $this->load->model('m_npwp', 'model');

    }
    public function index()
    {
        $data['title'] = 'NPWP';
        $data['npwp']= $this->model->getTable('npwp')->result();
        $this->load->view('page/npwp/tampil',$data);
    }
    public function tambah()
    {
        $data['npwp']= $this->model->getTable('npwp')->result();
        $data['title'] = 'Tambah NPWP';
        $this->load->view('page/npwp/tambah',$data);
    }
    public function insert()
    {
        // var_dump($_POST);
        // form validation
        $this->form_validation->set_rules('no_pajak','Nomor Pajak','required');
        $this->form_validation->set_rules('pemilik','Pemilik NPWP','required|integer');
        $this->form_validation->set_rules('alamat','Alamat','max_length[1000]');

        if($this->form_validation->run()==true){
            $data = array (
                'NO_PAJAK'      =>  $_POST['no_pajak'], 
                'ID_OPPORTUNITY'=>  $_POST['pemilik'], 
                'NAMA_NPWP'     =>  $_POST['nama'],
                'NPWP_TERKAIT'  =>  $_POST['npwp_terkait'],
                'IS_PRIMARY'    =>  $_POST['isPrimary'],
                'ALAMAT'        =>  $_POST['alamat'],
            );
            $this->model->insert('npwp',$data);
            $this->session->set_flashdata('message',"<div class='alert alert-success'>Berhasil Menambahkan data NPWP baru.</div>");
            redirect('npwp');
        }else{
            $this->session->set_flashdata('message',"<div class='alert alert-danger'>Terjadi masalah coba lagi</div>");
            redirect('npwp');
        }
    }
}
