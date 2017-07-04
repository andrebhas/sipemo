<?php 


class C_keamanan_kelengkapan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_keamanan_kelengkapan');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['keamanan_kelengkapan']=$this->m_keamanan_kelengkapan->tampil_data();
	 	$this->load->view('member/v_table_keamanan_kelengkapan', $data);
	}
 }