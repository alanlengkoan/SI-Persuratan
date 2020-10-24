<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asal extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Asal Surat',
            'breadcrumb' => breadcrumb(admin_url()),
            'content'    => 'admin/asal/view',
            'css'        => 'admin/asal/css/view',
            'js'         => 'admin/asal/js/view',
        ];

        $this->load->view('admin/base', $data);
    }
}
