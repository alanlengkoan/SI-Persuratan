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

    public function GetDataJoinUsers($id)
    {
        // $result = [];
        $this->db->select('*');
        $this->db->from('users us');
        $this->db->join('users_level ul', 'ul.id_users_level = us.id_users_profil', 'left');
        $this->db->join('jabatan jb', 'jb.kd = us.id_jabatan', 'left');
        $this->db->join('instansi ins', 'ins.kd = us.id_instansi', 'left');
        $this->db->where('us.id_users', $id);
        $data = $this->db->get();
        // foreach ($data->result() as $row) {
        //     $result = [
        //         'id_users'        => $row->id_users,
        //         'id_users_profil' => $row->id_users_profil,
        //         'id_instansi'     => $row->id_instansi,
        //         'id_jabatan'      => $row->id_jabatan,
        //         'nama'            => $row->nama,
        //         'username'        => $row->username,
        //         'token'           => $this->security->get_csrf_hash(),
        //     ];
        // }
        return $data->result();
    }
}
