<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_profil');
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Profil User',
            'breadcrumb' => breadcrumb(admin_url()),
            'profil'     => $this->m_profil->get_data_profil(),
            'edit_data'       => $this->m_profil->get_edit_profil(),
            'content'    => 'admin/manajemen_user/profil',
            'css'        => 'admin/manajemen_user/css/profil',
            'js'         => 'admin/manajemen_user/js/profil',
        ];
        $this->load->view('admin/base', $data);
    }

    public function simpan_data()
    {
        $this->m_profil->insert_data_profil();
    }

    public function edit()
    {
        $data = [
            'halaman'    => 'Profil User',
            'breadcrumb' => breadcrumb(admin_url()),
            'profil'     => $this->m_profil->get_data_profil(),
            'edit_data'       => $this->m_profil->get_edit_profil(),
            'content'    => 'admin/manajemen_user/profil',
            'css'        => 'admin/manajemen_user/css/profil',
            'js'         => 'admin/manajemen_user/js/profil',
        ];
        $this->load->view('admin/base', $data);
    }
}
