<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_Target_Tahunan_Pusat extends CI_Model {

	public function __construct(){
		parent::__construct();
    }
    public function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }
    public function getTable($table)
    {
        return $this->db->get($table);
    }
    public function getData($table,$where){
        return $this->db->get_where($table,$where);
    }
    public function getDaftarSBU($period)
    {
        $this->db->select('*');
        $this->db->from('annual_target');
        $this->db->join('sbu','ANNUAL_TARGET.ID_SBU=sbu.ID_SBU');
        $this->db->where('PERIODE',$period);
        return $this->db->get();
        // $this->db->query("SELECT * from ANNUAL_TARGET JOIN sbu on ANNUAL_TARGET.ID_SBU=sbu.ID_SBU");
    }
    public function update($table,$data,$where)
    {
        $this->db->where($where);
       $this->db->update($table,$data);
    }

}
?>