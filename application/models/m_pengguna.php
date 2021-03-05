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
    public function getData($table,$data)
    {
        $result = $this->db->get_where($table,$data);
        return $result;
    }
    public function update($table,$data,$id)
    {
        $where = array(
            'ID_USER' => $id
        );
        $this->db->update($table,$data,$where);
    }
    public function delete($table,$id)
    {
        $data = array(
            'ID_USER' => $id
        );
        $this->db->delete($table,$data);
    }
    public function SBUandROLE($id)
    {
            $data = $this->db->query("SELECT * FROM users INNER JOIN sbu on users.ID_SBU=sbu.ID_SBU INNER JOIN roles on users.ID_SBU=roles.ID_ROLE where users.ID_USER = $id");
            return $data;
    }

}
?>