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
        var_dump($_POST);

        $data = array(
            'MEN_ID_MENU' => $_POST['parent'],
            'ICON'        => $_POST['icon'],
            'NAMA_MENU'   => $_POST['menu'],
            'LINK'        => $_POST['link']
        );
        $this->model->insert('menus', $data);
        redirect('user/manage_menu');
    }
    public function blank()
    {
        $this->load->view('blank');
    }
}
