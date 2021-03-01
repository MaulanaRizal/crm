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
}
?>