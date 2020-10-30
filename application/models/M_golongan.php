<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_golongan extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM golongan")->result();
        return $result;
    }
}
