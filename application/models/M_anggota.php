<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model
{
    public function AllData()
    {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function LevelSteam()
    {
        return $this->db->get('pangkat')->result_array();
    }

    public function Find()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('kode', $keyword);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('steam', $keyword);
        $this->db->or_like('pangkat', $keyword);
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