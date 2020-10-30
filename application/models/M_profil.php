<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_profil extends CI_Model
{

    public function insert_data_profil()
    {
        $post = $this->input->post(NULL, TRUE);
        $cek  = $this->db->get_where('users_level', array('id_users_level', $post['id_user_level']))->num_rows();
        if ($cek > 0) {
            $update_data = [
                'level'     => $post['level'],
                'deskripsi' => $post['deskripsi'],
                'hak_akses' => $post['akses_menu'],
            ];
            $this->db->where('id_user_level', $post['id_user_level']);
            $this->db->update('users_level', $update_data);
            echo "data_update";
        }
        if ($cek == 0) {
            $insert_data = [
                'level'     => $post['level'],
                'deskripsi' => $post['deskripsi'],
                'hak_akses' => $post['akses_menu'],
            ];
            $this->db->insert('users_level', $insert_data);
            echo "data_insert";
        }
    }

    public function get_data_profil()
    {
        $this->db->select('*');
        $this->db->from('users_level');
        $data = $this->db->get();
        return $data->result();
    }

    public function get_edit_profil()
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
