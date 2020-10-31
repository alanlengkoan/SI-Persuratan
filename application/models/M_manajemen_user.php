<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_manajemen_user extends CI_Model
{

    public function GetAllDataUser()
    {
        $this->db->select('*');
        $this->db->from('users');
        $data = $this->db->get();
        return $data->result();
    }

    public function GetAllDataProfil()
    {
        $this->db->select('*');
        $this->db->from('users_level');
        $data = $this->db->get();
        return $data->result();
    }

    public function GetAllDataJabatan()
    {
        $this->db->select('*');
        $this->db->from('jabatan');
        $data = $this->db->get();
        return $data->result();
    }

    public function GetAllInstansi()
    {
        $this->db->select('*');
        $this->db->from('instansi');
        $data = $this->db->get();
        return $data->result();
    }
}
