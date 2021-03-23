<?php
class M_lead extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function show(){
		$data = $this->db->query("SELECT * FROM leads INNER JOIN users on leads.ID_USER=users.ID_USER");
		return $data;
	}

	public function getTableLimit($limit,$offset){  
        $this->db->select();
        $this->db->from('leads');
        $this->db->limit($limit,$offset);
        return $this->db->get();
    }

	public function insert($table, $data){
		$this->db->insert($table, $data);
	}

	public function delete($id_lead){
    	$hasil = $this->db->query("delete from sbu where ID_LEADS = '$id_lead'");
    	return $hasil;
    }
}
?>