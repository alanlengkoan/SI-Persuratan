<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_manajemen_user extends CI_Model
{

    public function data_user()
    {
        $this->db->select('*');
        $this->db->from('users');
        $data = $this->db->get();
        return $data->result();
    }
}
