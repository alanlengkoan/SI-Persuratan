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

    public function data_profil()
    {
        $this->db->select('*');
        $this->db->from('users_level');
        $data = $this->db->get();
        return $data->result();
    }

    public function update_status_aktif_users()
    {
        $post = $this->input->post(NULL, TRUE);
        $update_data = array(
            'status_aktif' => $post['status_aktif'],

        );

        $this->db->where('id_users', $post['id_users']);
        $this->db->update('users', $update_data);
        $response = [
            'status' => true,
            'token' => $this->security->get_csrf_hash(),

        ];

        echo json_encode($response);
    }
}
