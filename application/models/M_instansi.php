<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_instansi extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM instansi")->result();
        return $result;
    }
}
