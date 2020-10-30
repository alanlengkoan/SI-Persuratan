<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // untuk load model
        $this->load->model('m_profil');
        $this->load->model('crud');

        // untuk cek session
        checking_session($this->session->userdata());
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Profil User',
            'breadcrumb' => breadcrumb(admin_url()),
            'profil'     => $this->m_profil->getAll(),
            'edit_data'  => $this->m_profil->getById(),
            'content'    => 'admin/manajemen_user/profil',
            'css'        => 'admin/manajemen_user/css/profil',
            'js'         => 'admin/manajemen_user/js/profil',
        ];
        $this->load->view('admin/base', $data);
    }

    // untuk simpan data dan update data
    public function add()
    {
        $post   = $this->input->post(NULL, TRUE);
        $cek    = cek_duplikat('db', 'users_level', 'id_users_level', 'id_users_level', $post['id_user_level']);
        if ($cek > 0) {
            $data = [
                'level'     => $post['level'],
                'deskripsi' => $post['deskripsi'],
                'hak_akses' => $post['akses_menu'],
            ];
            $this->db->trans_start();
            $this->crud->u('users_level', $data, ['id_users_level' => $post['id_user_level']]);
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $response = ['title' => 'Gagal!', 'text' => 'Gagal Update', 'type' => 'error', 'button' => 'Ok!'];
            } else {
                $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Update', 'type' => 'success', 'button' => 'Ok!'];
            }
        }
        if ($cek == 0) {
            $data = [
                'level'     => $post['level'],
                'deskripsi' => $post['deskripsi'],
                'hak_akses' => $post['akses_menu'],
            ];
            $this->db->trans_start();
            $this->crud->i('users_level', $data);
            $this->db->trans_complete();

            if ($this->db->trans_status() === FALSE) {
                $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan', 'type' => 'error', 'button' => 'Ok!'];
            } else {
                $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan', 'type' => 'success', 'button' => 'Ok!'];
            }
        }

        //Untuk Response
        $this->_response($response);
    }

    // untuk halaman edit
    public function get()
    {
        $data = [
            'halaman'    => 'Profil User',
            'breadcrumb' => breadcrumb(admin_url()),
            'profil'     => $this->m_profil->getAll(),
            'edit_data'  => $this->m_profil->getById(),
            'content'    => 'admin/manajemen_user/profil',
            'css'        => 'admin/manajemen_user/css/profil',
            'js'         => 'admin/manajemen_user/js/profil',
        ];
        $this->load->view('admin/base', $data);
    }
}
