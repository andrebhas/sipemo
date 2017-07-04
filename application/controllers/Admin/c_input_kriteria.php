<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_input_kriteria extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$this->load->view('admin/v_input_kriteria');
	}
	
}

