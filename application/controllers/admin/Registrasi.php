<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        // Aturan validasi diletakkan di awal sebelum pengecekan run()
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[akun.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[repassword]');
        $this->form_validation->set_rules('repassword', 'Konfirmasi Password', 'required|trim|matches[password]');

        // Cek validasi form
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Halaman Registrasi';
            $this->load->view('admin/templates/admin_header', $data);
            $this->load->view('admin/registrasi', $data);
            $this->load->view('admin/templates/admin_footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            ];

            $this->db->insert('akun', $data);
            $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Selamat, Anda berhasil registrasi!</div>');
            redirect('admin/login');
        }
    }
}
?>
