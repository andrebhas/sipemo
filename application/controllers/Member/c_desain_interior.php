<?php 


class C_desain_interior extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_desain_interior');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['desain_interior']=$this->m_desain_interior->tampil_data();
	 	$this->load->view('member/v_table_desain', $data);
	} 
 }