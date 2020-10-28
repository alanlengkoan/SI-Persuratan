<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
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
            'halaman'    => 'Dashboard',
            'breadcrumb' => breadcrumb(admin_url()),
            'content'    => 'admin/dashboard/view',
            'css'        => '',
            'js'         => ''
        ];

        $this->load->view('admin/base', $data);
    }
}
