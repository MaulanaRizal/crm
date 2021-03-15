<?php
class M_opportunity extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function show(){
		$data = $this->db->query("select * from opportunities");
		return $data;
	}

	public function cekNo_Opportunity(){
		$sql = $this->db->query("select max(NO_OPPORTUNITY) as no_opportunity from opportunities");
		$hasil = $sql->row();
		return $hasil->no_opportunity;
	}

	public function insert($table, $data){
		$this->db->insert($table, $data);
	}
}
?>