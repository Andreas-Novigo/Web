<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model
{
    public function AllData()
    {
        return $this->db->get('mahasiswa')->result_array();
    }
}