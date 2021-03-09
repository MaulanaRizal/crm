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
        $data['alamats']= $this->alamat->getAlamat()->result();
		$this->load->view('page/alamat/tampil',$data);
	}
	public function tambah()
	{
        $data['title']  = 'Tambah Alamat';
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
        // var_dump($_POST);
        
        $prov = $this->alamat->getData('provinces',array('id'=>$_POST['provinsi']))->result();
        $kab = $this->alamat->getData('regencies',array('id'=>$_POST['kabupaten']))->result();
        $kec = $this->alamat->getData('districts',array('id'=>$_POST['kecamatan']))->result();
        
        $no_adr = 'ADR-'.(date('y')*10000000)+$this->alamat->getTable('addreess')->num_rows().$_SESSION['ID_USER'] ;
        echo $no_adr.'<br>';
        $addr = $_POST['jalan'].' , Kecamatan '.$kec[0]->name.', Kabupaten ,'.$kab[0]->name.',Provinsi '.$prov[0]->name.' , Indonesia'.' , '.$_POST['kode'];
        echo $addr;
        $data = array(
            'NO_ADDRESS'    => $no_adr,
            'ID_OPPORTUNITY'=> $_POST['pelanggan'],
            'NAMA'          => $_POST['nama'],
            'KATEGORI'      => $_POST['kategori'],
            'TIPE'          => $_POST['tipe'],
            'KORDINAT'      => $_POST['koordinat'],
            'CABANG_SBU'    => $_POST['sbu'],
            'NEGARA'        => 'Indonesia',
            'PROVINSI'      => $_POST['provinsi'],
            'KABUPATEN'     => $_POST['kabupaten'],
            'KECAMATAN'     => $_POST['kecamatan'],
            'JALAN'         => $_POST['jalan'],
            'KODE_POST'     => $_POST['kode'],
            'ALAMAT'        => $addr
        );
        $this->alamat->insert('addreess',$data);
        redirect('alamat');
    }
    public function check()
    {
        $this->load->view('awal');
    }
}
