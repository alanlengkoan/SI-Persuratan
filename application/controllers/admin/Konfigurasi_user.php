<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konfigurasi_user extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'halaman' => 'Dashboard',
            'css'     => '',
            'content' => 'admin/konfigurasi_user/view',
            'js'      => ''
        ];

        $this->load->view('admin/base', $data);
    }
}
