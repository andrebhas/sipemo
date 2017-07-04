<?php 


class C_table_user extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_user');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['data_user']=$this->m_data_user->tampil_data_user();
	 	$this->load->view('admin/table_user', $data);
	} 
 }