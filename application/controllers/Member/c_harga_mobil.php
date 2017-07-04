<?php 


class C_harga_mobil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_harga_mobil');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['harga_mobil']=$this->m_harga_mobil->tampil_data();
	 	$this->load->view('member/v_table_harga', $data);
	}
 }