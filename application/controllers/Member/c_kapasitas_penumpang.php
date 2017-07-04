<?php 


class C_kapasitas_penumpang extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kapasitas_penumpang');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['kapasitas_penumpang']=$this->m_kapasitas_penumpang->tampil_data();
	 	$this->load->view('member/v_table_kapasitas_penumpang', $data);
	} 
 }