<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemen_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // untuk load model
        $this->load->model('m_manajemen_user');
        $this->load->model('crud');

        // untuk cek session
        checking_session($this->session->userdata());
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Manajemen User',
            'breadcrumb' => breadcrumb(admin_url()),
            'data_user'  => $this->m_manajemen_user->GetAllDataUser(),
            'content'    => 'admin/manajemen_user/view',
            'css'        => 'admin/manajemen_user/css/view',
            'js'         => 'admin/manajemen_user/js/view',
        ];

        $this->load->view('admin/base', $data);
    }


    public function get()
    {
        $post   = $this->input->post(NULL, TRUE);
        $result = $this->crud->gda('users', ['id_users', $post['id']]);

        $data = [
            'id_users'        => $result['id_users'],
            'id_users_profil' => $result['id_users_profil'],
            'id_instansi'     => $result['id_instansi'],
            'id_jabatan'      => $result['id_jabatan'],
            'nama'            => $result['nama'],
            'username'        => $result['username'],
        ];
        $this->_response($data);
    }

    // untuk simpan data
    public function simpan_data()
    {
        $this->m_manajemen_user->insert_data_users();
    }

    // untuk ubah status
    public function update_status()
    {
        $this->m_manajemen_user->update_status_aktif_users();
    }
}
