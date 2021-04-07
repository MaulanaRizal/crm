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
        $SBU = $this->model->getTable('sbu');
        $ANNUAL = $this->model->getData('annual_target', array('PERIODE' => $periode));
        if (!($SBU->num_rows() == $ANNUAL->num_rows())) {
            $tables = $this->model->sbuannual($periode)->result();
            foreach ($tables as $table) {
                if (!isset($table->ANNUAL_TARGET)) {
                    $data = array(
                        'PERIODE'=> $periode,
                        'SBU'    => $table->ID_SBU
                    );
                    $this->model->insert('annual_target',$data);
                }
            }
        } else {
            // echo 'sudah jadi';
            $data['saleses'] = $this->model->getSalesSBU($periode)->result();
            $data['sbus']    = $tables = $this->model->sbuannual($periode)->result();
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
            $data['target']  = $this->model->getData('target_periode', array('PERIODE' => $periode))->result();
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
        // form_validation
        $this->form_validation->set_rules('target', 'Nominal Target', 'required');
        $this->form_validation->set_rules('terbilang', 'Terbilang ', 'required');
        $this->form_validation->set_rules('check-target', 'Check Nominal Sudah Benar', 'required');
        if ($this->form_validation->run()) {
            $nom = $_POST['target'];
            echo '<br><br><br>';
            $nom = str_replace('Rp. ', '', $nom);
            $nom = str_replace(',00', '', $nom);
            $nom = str_replace('.', '', $nom);
            var_dump(intval($nom));
            $data = array(
                'NOMINAL'   => $nom,
                'TERBILANG' => $_POST['terbilang'],
                'PERIODE'   => intval($_POST['periode'])
            );
            $this->session->set_flashdata('message', "<div class='alert alert-success'>Target berhasil ditetapkan.</div>");
            $this->model->insert('target_periode', $data);
            redirect('target_tahunan_pusat');
            // echo ' Berhasil Masuk';
        } else {
            $this->session->set_flashdata('message', "<div class='alert alert-danger'>Terjadi kesalahan, silahkan coba input kembali.</div>");
            redirect('target_tahunan_pusat');
        }
    }
}
