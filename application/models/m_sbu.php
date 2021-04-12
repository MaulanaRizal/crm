<?php 

/**
 * 
 */
class M_sbu extends CI_Model{
    public $NO_SBU;
	
	public function __construct(){
		parent::__construct();
	}
	public function show(){
		$data = $this->db->query("select * from sbu");
		return $data;
	}
    public function getTableLimit($limit,$offset){  
        $this->db->select();
        $this->db->from('sbu');
        $this->db->limit($limit,$offset);
        return $this->db->get();
    }

    public function kode(){
        $this->db->select('RIGHT(sbu.NO_SBU,2) as no_sbu', FALSE);
        $this->db->order_by('no_sbu','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sbu');  //cek dulu apakah ada sudah ada kode di tabel.    
        if($query->num_rows() <> 0){      
            //cek kode jika telah tersedia    
            $data = $query->row();      
            $kode = intval($data->no_sbu) + 1; 
        }
        else{      
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
            $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);    
            $kodetampil = "SBU"."-".$batas;  //format kode
            return $kodetampil;  
    }

	public function insert($table, $data){
        $this->db->insert($table, $data);
    }
    public function search($keyword){
        $data = $this->db->query("select * from sbu where SBU_OWNER like '$keyword' or SBU_REGION like '$keyword'");
        return $data;
    }
    public function delete($id_sbu){
    	$hasil = $this->db->query("delete from sbu where ID_SBU = '$id_sbu'");
    	return $hasil;
    }
    public function update($data, $id_sbu){
    	$this->db->where('id_sbu',$id_sbu);
    	$this->db->update('sbu', $data);
    	return true;
    }
}
?>