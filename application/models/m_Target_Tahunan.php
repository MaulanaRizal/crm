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
    public function tampilSalesSBUTarget($where)
    {
        $this->db->select();
        $this->db->from('annual_target_sbu');
        $this->db->join('users','annual_target_sbu.ID_SALES=users.ID_USER');
        $this->db->where($where);
        return $this->db->get();
    }

}
?>