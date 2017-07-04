<?php 


class C_purna_jual extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_purna_jual');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['purna_jual']=$this->m_purna_jual->tampil_data();
	 	$this->load->view('admin/v_table_jual', $data);
	}

	function tambah(){
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
		$data['sub_purna_jual']=$this->m_purna_jual->sub_purna_jual();
		$this->load->view('admin/v_input_jual',$data);
	}

	function tambah_aksi(){
		$range_harga = $this->input->post('range_harga');
		$nilai = $this->input->post('nilai');

		$data = array(
			'harga' => $range_harga,
			'id_purna_jual' => $nilai,
		);
		$this->m_purna_jual->input_data($data,'detail_purna_jual');
		redirect('admin/c_purna_jual');
	}

	public function update($id){
	$data['sub_purna_jual']=$this->m_purna_jual->sub_purna_jual();
	$where = array('id' => $id);
	$data['purna_jual'] = $this->m_purna_jual->edit_data($where,'detail_purna_jual')->row();
	$this->load->view('admin/menubar');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/v_edit_nilai_jual',$data);
		 
        }
    public function update_aksi(){
    
	$id= $this->input->post('id_purna_jual');
    $range_harga= $this->input->post('range_harga');
    $id_purna_jual = $this->input->post('nilai');

	$data = array(   
        'harga'=> $range_harga,
        'id_purna_jual' => $id_purna_jual,
	);

	$where = array(
		'id' => $id
	);

	$this->m_purna_jual->update_data($where,$data,'detail_purna_jual');
	redirect('admin/c_purna_jual');
	}
 
 }