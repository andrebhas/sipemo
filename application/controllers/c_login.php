<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_login extends CI_Controller {
 
    public function index()
    {
        $this->load->view('login');
         
    }
    public function cek_login() {
        $data = array('username' => $this->input->post('username', TRUE),
                        'password' =>$this->input->post('password', TRUE)
            );
        $this->load->model('m_login'); // load model_user
        $hasil = $this->m_login->cek_user($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['logged_in'] = 'Sudah Loggin';
                $sess_data['username'] = $sess->username;
                $sess_data['level'] = $sess->level;
                $sess_data['id_user'] = $sess->id_user;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('level')=='admin') {
                redirect('admin/admin');
            }
            elseif ($this->session->userdata('level')=='member') {
                redirect('member/member');
            }       
        }
        else {
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
    }

    function logout() {
        $array_items = array('logged_in', 'username', 'level', 'id_user');
        $this->session->unset_userdata($array_items);
        redirect('c_login','refresh');
    }
}
 