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
        $table = $this->alamat->getAlamat();
        $config = pagination('http://localhost/crm/alamat/index/',$table->num_rows(),20);

		$this->pagination->initialize($config);
		$data['start']      = $this->uri->segment(3);
        $data['title']      = 'Alamat';
        $data['alamats']    = $this->alamat->getTableLimit($config['per_page'],$data['start'])->result();
		$this->load->view('page/alamat/tampil',$data);
	}
	public function tambah()
	{

        $data['title']  = 'Tambah Alamat';
        $data['pelanggan']  = $this->alamat->getTable('opportunities')->result();
        $data['sbus']   =  $this->alamat->getTable('sbu')->result();
        $data['prov']   = $this->alamat->getTable('provinces')->result();
		$this->load->view('page/alamat/tambah',$data);
	}
    public function ambil_data()
    {
        $table = $_POST['table'];
        $id = $_POST['id'];
        $column = $_POST['column'];
        $options = $this->alamat->getData($table,array($column=>$id))->result();
        foreach($options as $option){
            echo  "<option value='$option->id'>$option->name</option>";
        }
    }
    public function insert()
    {
        // Form Validation
        var_dump($_POST);
        $this->form_validation->set_rules('nama','','required');
        $this->form_validation->set_rules('pelanggan','','required');
        $this->form_validation->set_rules('kategori','','required');
        $this->form_validation->set_rules('tipe','','required');
        $this->form_validation->set_rules('sbu','','required');
        $this->form_validation->set_rules('provinsi','','required');
        $this->form_validation->set_rules('kabupaten','','required');
        $this->form_validation->set_rules('kecamatan','','required');
        $this->form_validation->set_rules('jalan','','required');

        if($this->form_validation->run()==true){
            $prov = $this->alamat->getData('provinces',array('id'=>$_POST['provinsi']))->result();
            $kab = $this->alamat->getData('regencies',array('id'=>$_POST['kabupaten']))->result();
            $kec = $this->alamat->getData('districts',array('id'=>$_POST['kecamatan']))->result();
            $_POST['status_alamat'];
            $alamat = $this->alamat->getTable('addreess')->result();
            $no = (date('y')*10000000)+$alamat[0]->ID_ADDRESS.$_SESSION['ID_USER'];
            $addr = $_POST['jalan'].' , Kecamatan '.$kec[0]->name.', Kabupaten ,'.$kab[0]->name.',Provinsi '.$prov[0]->name.' , Indonesia'.' , '.$_POST['kode'];
            $no_adr = 'ADR-'.$no;
            if(empty($_POST['status_alamat'])){
                $status = 'Inactive';
            }else{
                $status = 'Active';
            }
            $data = array(
                'NO_ADDRESS'    => $no_adr,
                'ID_OPPORTUNITY'=> $_POST['pelanggan'],
                'NAMA'          => $_POST['nama'],
                'KATEGORI'      => $_POST['kategori'],
                'TIPE'          => $_POST['tipe'],
                'KORDINAT'      => $_POST['koordinat'],
                'CABANG_SBU'    => $_POST['sbu'],
                'NEGARA'        => 'Indonesia',
                'PROVINSI'      => $prov[0]->name,
                'KABUPATEN'     => $kab[0]->name,
                'KECAMATAN'     => $kec[0]->name,
                'JALAN'         => $_POST['jalan'],
                'KODE_POST'     => $_POST['kode'],
                'ALAMAT'        => $addr,
                'CRM_STATUS'    => $status,
                'CREATED_BY'    => $_SESSION['ID_USER'],
                'CRM_STATUS'    => $status,
            );
            var_dump($data);
            $this->alamat->insert('addreess',$data);
            $this->session->set_flashdata('message',"<div class='alert alert-success'>Alamat berhasil ditambahkan</div>");                        
            redirect('alamat');
        }else{
            $this->session->set_flashdata('message',"<div class='alert alert-danger'>Terjadi kesalahanmohon coba lagi</div>");                        
            redirect('alamat');
        }
    }
    public function delete($id)
    {
        $this->alamat->delete('addreess',array('ID_ADDRESS' => $id));
        $this->session->set_flashdata('message',"<div class='alert alert-success'><strong>Berhasil!</strong>Data alamat berhasil dihapus.</div>");                        
        redirect('alamat');

    }
    public function edit($id)
    {
        $data['title']  = "Edit Alamat";
        $data['pelanggan']  = $this->alamat->getTable('opportunities')->result();
        $data['sbus']   = $this->alamat->getTable('sbu')->result();
        $data['prov']   = $this->alamat->getTable('provinces')->result();
        $data['alamat'] = $this->alamat->getData('addreess',array('ID_ADDRESS'=>$id))->result();
        $this->load->view('page/alamat/edit',$data);
    }
    public function update($id)
    {
        $this->form_validation->set_rules('nama','','required');
        $this->form_validation->set_rules('pelanggan','','required');
        $this->form_validation->set_rules('kategori','','required');
        $this->form_validation->set_rules('tipe','','required');
        $this->form_validation->set_rules('sbu','','required');

        if($this->form_validation->run()==true){
            $alamat = $this->alamat->getTable('addreess')->result();
            $no = (date('y')*10000000)+$alamat[0]->ID_ADDRESS.$_SESSION['ID_USER'];
            $no_adr = 'ADR-'.$no;

            var_dump($_POST);
            if(empty($_POST['status_alamat'])){
                $status = 'Inactive';
            }else{
                $status = 'Active';
            }

            $data = array(
                'NO_ADDRESS'    => $no_adr,
                'ID_OPPORTUNITY'=> $_POST['pelanggan'],
                'NAMA'          => $_POST['nama'],
                'KATEGORI'      => $_POST['kategori'],
                'TIPE'          => $_POST['tipe'],
                'KORDINAT'      => $_POST['koordinat'],
                'CABANG_SBU'    => $_POST['sbu'],
                'KODE_POST'     => $_POST['kode'],
                'CRM_STATUS'    => $status,
                'CREATED_BY'    => $_SESSION['ID_USER'],
                'CRM_STATUS'    => $status,
            );
            var_dump($data);
            $this->alamat->update('addreess',$data,array('ID_ADDRESS'=>$id));
            $this->session->set_flashdata('message',"<div class='alert alert-success'><strong>Berhasil!</strong>Alamat berhasil diganti</div>");        
            redirect('alamat');
           
        }else{
            $this->session->set_flashdata('message',"<div class='alert alert-danger'>Terjadi kesalahanmohon coba lagi</div>");                        
            redirect('alamat');
        }
    }
    public function check()
    {
        $date = new DateTime();

        echo $date->format('Y/m/d H:i:s');
        // $this->load->view('awal');
    }
}
