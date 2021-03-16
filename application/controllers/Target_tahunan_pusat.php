<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Target_tahunan_pusat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('m_target_tahunan_pusat', 'model');
    }
    public function index()
    {
        $sbu = $this->model->getDaftarSBU(date('Y'));
        // echo $data['target']->num_rows();
        if (empty($sbu->num_rows())) {
            $sbus = $this->model->getTable('sbu')->result();
            foreach ($sbus as $sbu) {
                // echo $sbu->SBU_REGION;
                $input = array(
                    'ID_SBU'    => $sbu->ID_SBU,
                    'PERIODE'   => date('Y')
                );
                $this->model->insert('annual_target', $input);
            }
            redirect('target_tahunan_pusat');
        } else {
            $data['sbus']   = $sbu->result();
            $data['title']  = 'Target Tahunan SB Pusat';
            $this->load->view('page/target tahunan/annual_pusat', $data);
        }
    }

    public function insert()
    {
        var_dump($_POST);
        $nominal = str_replace('Rp. ','',$_POST['nominal']);
        $nominal = str_replace('.','',$nominal);
        $nominal = str_replace(',','',$nominal);

        echo $nominal;
        $this->session->set_flashdata('message',"<div class='alert alert-success'><strong>Berhasil!</strong>Target tahunan untuk SBU ".$_POST['sbu'].", berhasil diubah</div>");
        $this->model->update('annual_target',array ('ANNUAL_TARGET' => $nominal),array('ID_ANNUAL'=>$_POST['id_annual']));
        // redirect('target_tahunan_pusat');
        }
}
