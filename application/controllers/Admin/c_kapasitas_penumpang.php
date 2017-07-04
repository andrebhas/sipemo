<?php 


class C_kapasitas_penumpang extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kapasitas_penumpang');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['kapasitas_penumpang']=$this->m_kapasitas_penumpang->tampil_data();
	 	$this->load->view('admin/v_table_kapasitas_penumpang', $data);
	}

	function tambah(){
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
		$this->load->view('admin/v_input_kapasitas_penumpang');
	}

	function tambah_aksi(){
		$jumlah_kapasitas = $this->input->post('jumlah_kapasitas');
		$nilai_kapasitas = $this->input->post('nilai_kapasitas');

		$data = array(
			'jumlah_kapasitas' => $jumlah_kapasitas,
			'nilai_kapasitas' => $nilai_kapasitas,
			);
		$this->m_kapasitas_penumpang->input_data($data,'kapasitas_penumpang');
		redirect('admin/c_kapasitas_penumpang');
	}

	public function update($id_kapasitas_penumpang){
	$where = array('id_kapasitas_penumpang' => $id_kapasitas_penumpang);
	$data['kapasitas_penumpang'] = $this->m_kapasitas_penumpang->edit_data($where,'kapasitas_penumpang')->result();
	$this->load->view('admin/menubar');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/v_edit_nilai_kapasitas_penumpang',$data);
		 
        }
    public function update_aksi(){
    
	$id_kapasitas= $this->input->post('id_kapasitas');
    $jumlah_kapasitas= $this->input->post('jumlah_kapasitas');
    $nilai_kapasitas= $this->input->post('nilai_kapasitas');

	$data = array(   
               'jumlah_kapasitas'=> $jumlah_kapasitas,
               'nilai_kapasitas' => $nilai_kapasitas,
	);

	$where = array(
		'id_kapasitas' => $id_kapasitas
	);

	$this->m_kapasitas_penumpang->update_data($where,$data,'kapasitas_penumpang');
	redirect('admin/c_kapasitas_penumpang');
	}
 
 }