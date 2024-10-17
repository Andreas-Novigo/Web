<?php
/**
 * summary
 */
class Beranda Extends CI_Controller
{
    public function index()
    {
        if(empty($this->session->userdata('email'))){
            redirect('admin/login');
        }
        $data['judul']= 'halaman beranda';
        $this->load->view('templates/header',$data);
        $this->load->view('beranda/index',);
        $this->load->view('templates/footer');
    }
}
?>