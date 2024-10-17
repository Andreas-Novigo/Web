<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Games extends CI_Controller
{
    public function index()
    {
        if(empty($this->session->userdata('email'))){
            redirect('admin/login');
        }
        $data['judul'] = 'Halaman Anggota';
        $data['games'] = $this->M_gamer->AllData();
        if($this->input->post('keyword')){
            $data['games'] = $this->M_gamer->Find();
        }
        $this->load->view('templates/header',$data);
        $this->load->view('Games/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'tambah Data Game';
        $this->form_validation->set_rules('nama','nama','required|is_unique[games.nama]');
        $this->form_validation->set_rules('harga','harga','required');
        $this->form_validation->set_rules('size','size','required');
        if($this->form_validation->run()==false){
            $this->load->view('templates/header',$data);
            $this->load->view('Games/tambah', $data);
            $this->load->view('templates/footer');
        }else {
            $this->M_gamer->tambah();
            $this->session->set_flashdata('flash', ' ditambahkan');
            redirect('games');
        }
    }

    public function ubah($no) 
    {
        $data['judul'] = 'Ubah Data Game';
        $data['games'] = $this->M_gamer->GetGamesbyNo($no);

        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('harga','harga','required');
        $this->form_validation->set_rules('size','size','required');
        if($this->form_validation->run()==false){
            $this->load->view('templates/header',$data);
            $this->load->view('Games/ubah', $data);
            $this->load->view('templates/footer');
        }else {
            $this->M_gamer->UbahData($no);
            $this->session->set_flashdata('flash', ' telah di ubah');
            redirect('games');
        }
    }
    
    public function detail($nama)
    {
        $data['judul'] = 'Detail Data Game';
        $data['games'] = $this->M_gamer->GetGamesbyNama($nama);
        $this->load->view('templates/header',$data);
        $this->load->view('Games/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($no)
    {
        $this->M_gamer->HapusData($no);
        $this->session->set_flashdata('flash', ' dihapus');
        redirect('games');
    }
}
?>