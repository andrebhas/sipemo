<?php 


class C_transmisi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_transmisi');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['transmisi']=$this->m_transmisi->tampil_data();
	 	$this->load->view('member/v_table_transmisi', $data);
	} 
 }