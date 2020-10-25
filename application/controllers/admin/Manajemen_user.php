<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajemen_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_manajemen_user');
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Manajemen User',
            'breadcrumb' => breadcrumb(admin_url()),
            'content'    => 'admin/manajemen_user/view',
            'css'        => 'admin/manajemen_user/css/view',
            'js'         => 'admin/manajemen_user/js/view',
        ];

        $this->load->view('admin/base', $data);
    }
}
