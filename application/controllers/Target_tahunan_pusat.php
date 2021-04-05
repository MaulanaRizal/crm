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
        $periode = date('Y');
        $sbu = $this->model->getDaftarSBU($periode);
        // echo $data['target']->num_rows();
        if (empty($sbu->num_rows())) {
            $sbus = $this->model->getTable('sbu')->result();
            foreach ($sbus as $sbu) {
                // echo $sbu->SBU_REGION;
                $input = array(
                    'ID_SBU'    => $sbu->ID_SBU,
                    'PERIODE'   => $periode
                );
                $this->model->insert('annual_target', $input);
            }
            redirect('target_tahunan_pusat');
        } else {
            $data['saleses'] = $this->model->getSalesSBU($periode)->result();
            $data['sbus']    = $sbu->result();
            $data['target']  = $this->model->getData('target_periode',array('PERIODE'=>$periode))->result();
            $data['annual']  = $this->model->getPeriode()->result();
            $data['title']   = 'Target Tahunan SB Pusat Periode' . $periode;
            $data['period']  = $periode;
            $this->load->view('page/target tahunan/annual_pusat', $data);
        }
    }

    public function insert()
    {
        var_dump($_POST);
        $this->form_validation->set_rules('nominal', 'Nominal', 'required', array(
            'required' => 'Input yang dimasukan tidak dapat diubah menjadi angka'
        ));
        $nominal = str_replace('Rp. ', '', $_POST['nominal']);
        $nominal = str_replace('.', '', $nominal);
        $nominal = str_replace(',00', '', $nominal);
        $int_nominal = (int)$nominal;
        // echo $_POST['nominal'];
        // echo is_int($int_nominal);
        if ($int_nominal == 0 or $_POST['nominal'] == 'Rp. 0,00') {
            $this->session->set_flashdata('message', "<div class='alert alert-danger'><strong>Gagal!</strong> Input yang dimasukan tidak valid.</div>");
            $this->index();
        } else {
            $this->session->set_flashdata('message', "<div class='alert alert-success'><strong>Berhasil!</strong>Target tahunan untuk SBU " . $_POST['sbu'] . ", berhasil diubah</div>");
            $this->model->update('annual_target', array('ANNUAL_TARGET' => $int_nominal), array('ID_ANNUAL' => $_POST['id_annual']));
            if ($_POST['tahun_periode'] == null) {
                // echo 'masuk index';
                redirect('target_tahunan_pusat');
            } else {
                // echo 'tidak masuk index';
                redirect('target_tahunan_pusat/periode/' . $_POST['periode']);
            }
        }
    }
    public function periode($tahun)
    {
        $periode = $tahun;
        $sbu = $this->model->getDaftarSBU($periode);

        if (!empty($_POST['tahun_periode'])) {
            $check_tahun = $this->model->getData('annual_target', array('PERIODE' => $_POST['tahun_periode']))->num_rows();
        }
        // var_dump($check_tahun);
        if (!empty($_POST['check']) and $check_tahun == 0) {
            $sbus = $this->model->getTable('sbu')->result();
            foreach ($sbus as $sbu) {
                // echo $sbu->SBU_REGION;
                $input = array(
                    'ID_SBU'    => $sbu->ID_SBU,
                    'PERIODE'   => $_POST['tahun_periode']
                );
                $this->model->insert('annual_target', $input);
            }
            // echo 'masuk';
            $this->session->set_flashdata('message', "<div class='alert alert-success'><strong>Berhasil!</strong>Target tahunan berhasil di tambah</div>");

            redirect('target_tahunan_pusat/periode/' . $_POST['tahun_periode']);
        } elseif (!empty($_POST['check']) and $check_tahun != 0) {
            $this->session->set_flashdata('message', "<div class='alert alert-danger'><strong>Gagal!</strong>Periode sudah tersedia</div>");
            // echo 'masuk';
            redirect('target_tahunan_pusat/periode/' . $_POST['tahun_periode']);
        } else {
            // echo 'tidak masuk';
            $data['saleses'] = $this->model->getSalesSBU($periode)->result();
            $data['sbus']    = $sbu->result();
            $data['annual']  = $this->model->getPeriode()->result();
            $data['title']   = 'Target Tahunan SB Pusat Periode' . $periode;
            $data['period'] = $periode;
            $this->load->view('page/target tahunan/annual_pusat', $data);
        }
    }
    public function delete()
    {
        var_dump($_POST);
        // form validation
        $this->form_validation->set_rules('tahun', 'Tahun', 'required', array('required' => 'terjadi kesalahan'));

        // process delete
        if ($_POST['tahun'] == date('Y')) {
            $this->session->set_flashdata('message', "<div class='alert alert-danger'><strong>Gagal!</strong>Periode sedangberlangsung</div>");
            redirect('target_tahunan_pusat');
        } else {
            $this->model->delete('annual_target', array('PERIODE' => $_POST['tahun']));
            $this->session->set_flashdata('message', "<div class='alert alert-success'><strong>Berhasil!</strong>Periode tahun " . $_POST['tahun'] . " berhasil di hapus</div>");
            redirect('target_tahunan_pusat');
        }
    }

    public function add_periode()
    {
        # code...
        var_dump($_POST);
    }

}
