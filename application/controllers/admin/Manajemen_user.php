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
            'profil'     => $this->m_manajemen_user->GetAllDataProfil(),
            'instansi'   => $this->m_manajemen_user->GetAllInstansi(),
            'jabatan'    => $this->m_manajemen_user->GetAllDataJabatan(),
            'content'    => 'admin/manajemen_user/view',
            'css'        => 'admin/manajemen_user/css/view',
            'js'         => 'admin/manajemen_user/js/view',
        ];

        $this->load->view('admin/base', $data);
    }


    public function get()
    {
        $post   = $this->input->post(NULL, TRUE);

        $result = $this->crud->gda('users', ['id_users', $post['id_users']]);
        // debug($result);
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
    public function add()
    {
        $post   = $this->input->post(NULL, TRUE);
        // debug($post);
        $data = [
            'username'          => $post['username'],
            'nama'              => $post['nama_lengkap'],
            'id_users_profil'   => $post['user_profil'],
            'id_instansi'       => $post['instansi'],
            'id_jabatan'        => $post['jabatan'],
            'password'          => md5($post['password']),

        ];

        $this->db->trans_start();
        $this->crud->i('users', $data);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
        }

        // untuk reponse
        $this->_response($response);
    }
    // untuk update data
    public function upd()
    {
        $post   = $this->input->post(NULL, TRUE);
        debug($post);
        $data = [
            'username'          => $post['username'],
            'nama'              => $post['nama_lengkap'],
            'id_users_profil'   => $post['user_profil'],
            'id_instansi'       => $post['instansi'],
            'id_jabatan'        => $post['jabatan'],
            'password'          => md5($post['password']),

        ];

        $this->db->trans_start();
        $this->crud->u('users', $data, ['id_users' => $post['id_users']]);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Update!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Update!', 'type' => 'success', 'button' => 'Ok!'];
        }

        // untuk reponse
        $this->_response($response);
    }

    // untuk ubah status
    public function updStatusAktif()
    {
        $post = $this->input->post(NULL, TRUE);
        $data = array(
            'status_aktif' => $post['status_aktif'],

        );
        $this->db->trans_start();
        $this->crud->u('users', $data, ['id_users' => $post['id_users']]);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Update!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Update!', 'type' => 'success', 'button' => 'Ok!'];
        }

        // untuk reponse
        $this->_response($response);
    }
}
