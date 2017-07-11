<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forms extends CI_Controller {
	 public function __construct()
      {
        parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_kriteria');
		$this->load->model('m_data_mobil');
		$this->load->model('m_hitung');
    }

	public function index()
	{
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['kategori_kendaraan']=$this->m_kriteria->md_getNilaikategori_kendaraan();
		$data['harga_mobil']=$this->m_kriteria->md_getNilaiharga_mobil();
		$data['kapasitas_penumpang']=$this->m_kriteria->md_getNilaikapasitas_penumpang();
		//$data['purna_jual']=$this->m_kriteria->md_getNilaipurna_jual();
		
	 	$this->load->view('admin/forms',$data);
	 	
	}

	public function perangkingan(){
		$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['pemilih']=$this->m_hitung->get_perhitungan();
	 	$this->load->view('member/v_perangkingan', $data);
	}

	
}