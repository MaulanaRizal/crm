<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class M_login extends CI_Model {

	public function __construct(){
		parent::__construct();
    }

	function login($table,$where)
	{
		// code...
		return $this->db->get_where($table,$where);
	}

	function getData($varUser, $varPassword)
	{
		$getField = array('username' => $varUser, 'password' => $varPassword);

		$query = $this->db->get_where('pengguna', $getField);

		return $query->row();
	}

}
?>