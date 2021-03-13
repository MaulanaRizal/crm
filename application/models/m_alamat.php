<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_alamat extends CI_Model {

	public function __construct(){
		parent::__construct();
    }
    public function getTable($table)
    {
        $data = $this->db->get($table);
        return $data;
    }
    public function getTableLimit($limit,$offset)
    {  

        $this->db->select();
        $this->db->from('addreess');
        $this->db->join('users',"addreess.CREATED_BY=users.ID_USER");
        $this->db->limit($limit,$offset);
        return $this->db->get();
    }
    public function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }
    public function getData($table,$data)
    {
        $result = $this->db->get_where($table,$data);
        return $result;
    }
    public function update($table,$data,$id)
    {
        $this->db->update($table,$data,$id);
    }
    public function delete($table,$where)
    {
        $this->db->delete($table,$where);
    }
    public function getAlamat()
    {
        $db = $this->db->get('addreess');
        if($db->num_rows()==0){
            return $db;
        }else{
            return $this->db->query("SELECT addreess.*,users.NAMA_LENGKAP  FROM `addreess` INNER JOIN users where addreess.CREATED_BY=users.ID_USER ORDER BY addreess.CREATED_ON DESC");
        }
    }

}
?>