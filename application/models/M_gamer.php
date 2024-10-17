<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gamer extends CI_Model
{
    public function AllData()
    {
        return $this->db->get('games')->result_array();
    }

    public function tambah()
    {
        $data =[
            "nama" =>$this->input->post('nama', true),
            "harga" =>$this->input->post('harga', true),
            "size" =>$this->input->post('size', true),
        ];
        $this->db->insert('games', $data);
    }

    public function GetGamesbyNama($nama)
    {
        return $this->db->get_where('games', ['no' =>$nama])->row_array();
    }

    public function GetGamesbyNo($no)
    {
        return $this->db->get_where('games', ['no' =>$no])->row_array();
    }

    public function Find()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->or_like('nama', $keyword);
        $this->db->or_like('harga', $keyword);
        return $this->db->get('games')->result_array();
    }

    public function UbahData()
    {
        $data =[
            "nama" =>$this->input->post('nama', true),
            "harga" =>$this->input->post('harga', true),
            "size" =>$this->input->post('size', true),
        ];
        $this->db->where('no', $this->input->post('no'));
        return $this->db->update('games', $data);
    }
    
    public function HapusData($no)
    {
        $this->db->where('no', $no);
        return $this->db->delete('games');
    }

}