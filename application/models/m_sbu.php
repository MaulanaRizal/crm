<?php 

/**
 * 
 */
class M_sbu extends CI_Model{
	
	public function __construct(){
		parent::__construct();
	}
	public function show($table){
		$data = $this->db->query("select * from sbu");
		return $data;
	}
	public function insert($table, $data){
        $this->db->insert($table, $data);
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