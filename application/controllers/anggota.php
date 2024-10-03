<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function index()
    {
        $data['anggota'] = $this->M_anggota->AllData();
        $data['judul'] = 'Halaman Anggota';
        $this->form_validation->set_rules('id','id','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('steam','steam','required');
        if($this->form_validation->run()==false){
        $this->load->view('templates/header',$data);
        $this->load->view('Anggota/index', $data);
        $this->load->view('templates/footer');
        }else {
            $data = [
                'id' => $this->input->post('id'),
                'nama' => $this->input->post('nama'),
                'steam' => $this->input->post('steam'),
            ];
            $this->db->insert('mahasiswa',$data);
            redirect('Anggota');
        }
    }

    public function ubah() {
        $id = $this->input->post('id', true);
        $data = [
            'nama' => $this->input->post('nama', true),
            'steam' => $this->input->post('steam', true),
        ];
    
        $this->load->model('M_anggota');
        $this->M_anggota->UbahData($id, $data);
        redirect('Anggota');
    }
    
    public function hapus($id)
    {
        $this->M_anggota->HapusData($id);
        redirect('Anggota');
    }
}
?>