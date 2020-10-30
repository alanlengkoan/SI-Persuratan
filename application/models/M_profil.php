<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_profil extends CI_Model
{


    public function getAll()
    {
        $this->db->select('*');
        $this->db->from('users_level');
        $data = $this->db->get();
        return $data->result();
    }

    public function getById()
    {
        $id_user_level = $this->input->get('id');
        $profil = $this->db->get_where('users_level', array('id_users_level' => $id_user_level));
        foreach ($profil->result() as $row) {
            $data = [
                'id_level'  => $row->id_users_level,
                'level'     => $row->level,
                'deskripsi' => $row->deskripsi,
                'hak_akses' => $row->hak_akses,
            ];
        }

        if (empty($data)) {
            $data = [
                'id_level'  => '',
                'level'     => '',
                'deskripsi' => '',
                'hak_akses' => '',
            ];
        }
        return $data;
    }
}
