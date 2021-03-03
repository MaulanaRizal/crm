<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_menu', 'model');
    }
    public function tambah()
    {
        $data = array(
            'MEN_ID_MENU' => $_POST['parent'],
            'ICON'        => $_POST['icon'],
            'NAMA_MENU'   => $_POST['menu'],
            'LINK'        => $_POST['link']
        );
        $this->model->insert('menus', $data);
        redirect('user/manage_menu');
    }
    
    public function deleteMenu($id)
    {
            $this->model->delete($id);
            redirect('user/manage_menu');
    }
    public function edit($id)
    {
        $where = array (
            'ID_MENU' => $id
        );
        $data['data'] = $this->model->getData('Menus',$where)->result();
		$data['menu'] = $this->model->getTable('Menus')->result();
        $this->load->view('page/menu/edit',$data);
    }
    public function update($id)
	{
        $data = array(
            'MEN_ID_MENU' => $_POST['parent'],
            'ICON'        => $_POST['icon'],
            'NAMA_MENU'   => $_POST['menu'],
            'LINK'        => $_POST['link']
        );
			$this->model->update('menus',$data,$id);
			$this->session->set_flashdata('message','Data berhasil diubah');
			redirect('user/manage_menu');
			// echo 'Tidak Tersedia';		
	}
    public function updateAccess()
    {
        var_dump($_POST);
    }
}
