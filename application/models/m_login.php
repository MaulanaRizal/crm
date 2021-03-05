<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

Class M_login extends CI_Model {


	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('CRM_EMAIL', $post['email']);
		$this->db->where('CRM_PASSWORD', ($post['password']));
		$query = $this->db->get();
		return $query;
	}
	// public function get($id = null)
	// {
	// 	$this->db->from('users');
	// 	if ($id != null) {
	// 		$this->db->where('ID_USER', $id);
	// 	}
	// 	$query = $this->db->get();
	// 	return $query;
	// }
}
?>