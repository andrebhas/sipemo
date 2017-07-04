<?php 


class C_warna extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_warna');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['warna']=$this->m_warna->tampil_data();
	 	$this->load->view('member/v_table_warna', $data);
	} 
 }