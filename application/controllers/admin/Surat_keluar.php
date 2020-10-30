<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keluar extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Surat Keluar',
            'breadcrumb' => breadcrumb(admin_url()),
            'content'    => 'admin/surat_keluar/view',
            'css'        => '',
            'js'         => ''
        ];

        $this->load->view('admin/base', $data);
    }
}
