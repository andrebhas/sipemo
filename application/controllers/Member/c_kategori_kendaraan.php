<?php 


class C_kategori_kendaraan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kategori_kendaraan');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['kategori_kendaraan']=$this->m_kategori_kendaraan->tampil_data();
	 	$this->load->view('member/v_table_kategori_kendaraan', $data);
	}

	public function delete(){
    $id_kategori = $this->input->post("id_kategori3");
    
      $this->m_kategori_kendaraan->delete($id_kategori);
       
          redirect('c_kategori_kendaraan');
      }
 }