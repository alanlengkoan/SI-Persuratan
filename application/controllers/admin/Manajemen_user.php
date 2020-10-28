<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemen_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // untuk load model
        $this->load->model('m_manajemen_user');

        // untuk cek session
        checking_session($this->session->userdata());
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Manajemen User',
            'breadcrumb' => breadcrumb(admin_url()),
            'data_user'  => $this->m_manajemen_user->data_user(),
            'content'    => 'admin/manajemen_user/view',
            'css'        => 'admin/manajemen_user/css/view',
            'js'         => 'admin/manajemen_user/js/view',
        ];

        $this->load->view('admin/base', $data);
    }
}
