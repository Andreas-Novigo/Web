<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model
{
    public function AllData()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function UbahData($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('mahasiswa', $data);
    }
    
    public function HapusData($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('mahasiswa');
    }

}