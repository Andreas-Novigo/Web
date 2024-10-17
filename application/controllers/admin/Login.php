<?php


class Login extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Halaman Login';
        $this->load->view('admin/templates/admin_header', $data);
        $this->load->view('admin/login', $data);
        $this->load->view('admin/templates/admin_footer');
    }

    public function proses()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $akun = $this->db->get_where('akun', ['email' =>$email])->row_array();
        if ($akun){
            if (password_verify($password, $akun['password'])){
                $data = [
                    'email' => $akun['email'],
                    'password' => $akun['password'],
                ];
                $this->session->set_userdata($data);
                redirect('Beranda');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
                redirect('admin/login');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
            redirect('admin/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('password');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda Logout silahkan Login kembali</div>');
        redirect('admin/login');
    }
}

?>