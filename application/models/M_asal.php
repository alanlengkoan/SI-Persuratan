<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_asal extends CI_Model
{
    public function getAll()
    {
        $result = $this->db->query("SELECT * FROM asal")->result();
        return $result;
    }
}
