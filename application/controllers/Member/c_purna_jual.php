<?php 


class C_purna_jual extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_purna_jual');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['purna_jual']=$this->m_purna_jual->tampil_data();
	 	$this->load->view('member/v_table_jual', $data);
	} 
 }