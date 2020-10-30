<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_jabatan extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM jabatan")->result();
        return $result;
    }
}
