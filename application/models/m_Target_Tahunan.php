<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_Target_Tahunan extends CI_Model {

	public function __construct(){
		parent::__construct();
    }

    public function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }
    public function getData($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function tampilTable($id)
    {
        return $this->db->query("SELECT * FROM `annual_target` WHERE ID_SBU=$id ORDER BY `annual_target`.`PERIODE` DESC");
    }
}
?>