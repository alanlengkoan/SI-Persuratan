<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_sifat extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM sifat")->result();
        return $result;
    }
}
