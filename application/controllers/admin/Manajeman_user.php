<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manajeman_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'halaman'    => 'Manajemen User',
            'breadcrumb' => breadcrumb(admin_url()),
            'content'    => 'admin/manajeman_user/view',
            'css'        => '',
            'js'         => ''
        ];

        $this->load->view('admin/base', $data);
    }
}
