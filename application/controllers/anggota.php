<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Anggota';
        $data['anggota'] = $this->M_anggota->AllData();
        if($this->input->post('keyword')){
            $data['anggota'] = $this->M_anggota->Find();
        }
        $data['pangkat'] = $this->M_anggota->LevelSteam();
        $this->form_validation->set_rules('kode','kode','required|is_unique[mahasiswa.kode]');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('steam','steam','required|is_unique[mahasiswa.steam]');
        if($this->form_validation->run()==false){
        $this->load->view('templates/header',$data);
        $this->load->view('Anggota/index', $data);
        $this->load->view('templates/footer');
        }else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'steam' => $this->input->post('steam'),
                'pangkat' => $this->input->post('pangkat'),
            ];
            $this->db->insert('mahasiswa',$data);
            $this->session->set_flashdata('flash', ' ditambah');
            redirect('Anggota');
        }
    }

    public function ubah() {
        $id = $this->input->post('id');
        $data = [
            'kode' => $this->input->post('kode', true),
            'nama' => $this->input->post('nama', true),
            'steam' => $this->input->post('steam', true),
            'pangkat' => $this->input->post('pangkat', true),
        ];
    
        $this->load->model('M_anggota');
        $this->M_anggota->UbahData($id, $data);
        $this->session->set_flashdata('flash', ' diubah');
        redirect('Anggota');
    }
    
    public function hapus($id)
    {
        $this->M_anggota->HapusData($id);
        $this->session->set_flashdata('flash', ' dihapus');
        redirect('Anggota');
    }
}
?>