<?php
/**
 * summary
 */
class tes Extends CI_Controller
{
    public function index()
    {
        $data['judul']= 'halaman percobaan';
        $this->load->view('templates/header',$data);
        $this->load->view('tes/index',);
        $this->load->view('templates/footer');
    }
}
?>