<?php 


class C_harga_mobil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_harga_mobil');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['harga_mobil']=$this->m_harga_mobil->tampil_data();
	 	$this->load->view('admin/v_table_harga', $data);
	}

	function tambah(){
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
		$data['sub_harga_mobil']=$this->m_harga_mobil->sub_harga_mobil();
		$this->load->view('admin/v_input_harga',$data);
	}

	function tambah_aksi(){
		$harga_mobil = $this->input->post('harga_mobil');
		$nilai = $this->input->post('nilai');

		$data = array(
			'harga' => $harga_mobil,
			'id_harga_mobil' => $nilai,
			);
		$this->m_harga_mobil->input_data($data,'detail_harga_mobil');
		redirect('admin/c_harga_mobil');
	}

	public function update($id_harga_mobil){
	$where = array('id' => $id_harga_mobil);
	$data['sub_harga_mobil']=$this->m_harga_mobil->sub_harga_mobil();
	$data['harga_mobil'] = $this->m_harga_mobil->edit_data($where,'detail_harga_mobil')->row();
	$this->load->view('admin/menubar');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/v_edit_nilai_harga',$data);
		 
        }
    public function update_aksi(){
    
	$id= $this->input->post('id_harga_mobil');
    $harga_mobil= $this->input->post('harga_mobil');
    $nilai= $this->input->post('nilai');

	$data = array(   
               'harga'=> $harga_mobil,
               'id_harga_mobil' => $nilai,
	);

	$where = array(
		'id' => $id
	);

	$this->m_harga_mobil->update_data($where,$data,'detail_harga_mobil');
	redirect('admin/c_harga_mobil');
	}
 
 }