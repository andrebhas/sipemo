<?php 


class C_ukuran_cc extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_ukuran_cc');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['ukuran_cc']=$this->m_ukuran_cc->tampil_data();
	 	$this->load->view('member/v_table_ukuran_cc', $data);
	} 
 }