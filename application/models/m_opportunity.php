<?php
class M_opportunity extends CI_Model{
	public function __construct(){
		parent::__construct();
	}

	public function show(){
		$data = $this->db->query("select * from opportunities");
		return $data;
	}
}
?>