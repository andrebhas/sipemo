<?php
 
class admin extends CI_Controller {
 
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('username')=="") {
            redirect('admin/login');
        }
        $this->load->helper('text');
        $this->load->model('m_data_mobil');
        $this->load->model('m_hitung');
        $this->load->model('m_data_user');
    }
    public function index() {
	 	$this->load->view('admin/menubar');
        $this->load->view('admin/sidebar');
        $id_user = $this->session->userdata('id_user');
        $data['user']=$this->m_data_user->tampil_data_user($id_user);
        $this->load->view('admin/dashboard', $data);
		
	
    }
}
?>