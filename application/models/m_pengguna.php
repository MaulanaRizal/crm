<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_pengguna extends CI_Model {

	public function __construct(){
		parent::__construct();
    }
    public function getTable($table)
    {
        $data = $this->db->get($table);
        return $data;
    }
    public function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }

}
?>