<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_masuk extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();

        // untuk cek session
        checking_session($this->session->userdata());
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Surat Masuk',
            'breadcrumb' => breadcrumb(admin_url()),
            'content'    => 'admin/surat_masuk/view',
            'css'        => 'admin/surat_masuk/css/view',
            'js'         => 'admin/surat_masuk/js/view'
        ];

        $this->load->view('admin/base', $data);
    }
}
