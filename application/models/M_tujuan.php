<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_tujuan extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM tujuan")->result();
        return $result;
    }
}
