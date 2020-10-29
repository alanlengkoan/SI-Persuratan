<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk load model
        $this->load->model('crud');
        $this->load->model('m_jabatan');

        // untuk cek session
        checking_session($this->session->userdata());
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Jabatan',
            'breadcrumb' => breadcrumb(admin_url()),
            'content'    => 'admin/jabatan/view',
            'data'       => $this->m_jabatan->getAll(),
            'css'        => 'admin/jabatan/css/view',
            'js'         => 'admin/jabatan/js/view',
        ];

        $this->load->view('admin/base', $data);
    }

    // untuk ambil data by id
    public function get()
    {
        $post   = $this->input->post(NULL, TRUE);
        $result = $this->crud->gda('jabatan', ['kd' => $post['id']]);

        $data = [
            'id_jabatan' => $result['id_jabatan'],
            'kd'         => $result['kd'],
            'nama'       => $result['nama'],
            'keterangan' => $result['keterangan'],
            'token'      => $this->security->get_csrf_hash()
        ];

        // untuk reponse
        $this->_response($data);
    }

    // untuk simpan data
    public function add()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'kd'         => $post['inpkode'],
            'nama'       => $post['inpnama'],
            'keterangan' => $post['inpketerangan'],
            'ins'        => date('Y-m-d H:i'),
            'ins_id'     => $this->session->userdata('id'),
            'upd_id'     => $this->session->userdata('id'),
        ];

        $this->db->trans_start();
        $this->crud->i('jabatan', $data);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
        }

        // untuk reponse
        $this->_response($response);
    }

    // untuk ubah data
    public function upd()
    {
        $post = $this->input->post(NULL, TRUE);

        $data = [
            'nama'       => $post['inpnama'],
            'keterangan' => $post['inpketerangan'],
            'upd_id'     => $this->session->userdata('id'),
        ];

        $this->db->trans_start();
        $this->crud->u('jabatan', $data, ['kd' => $post['inpkode']]);
        $this->db->trans_complete();

        if ($this->db->trans_status() === FALSE) {
            $response = ['title' => 'Gagal!', 'text' => 'Gagal Simpan!', 'type' => 'error', 'button' => 'Ok!'];
        } else {
            $response = ['title' => 'Berhasil!', 'text' => 'Berhasil Simpan!', 'type' => 'success', 'button' => 'Ok!'];
        }

        // untuk reponse
        $this->_response($response);
    }
}