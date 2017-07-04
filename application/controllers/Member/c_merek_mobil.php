<?php 


class C_merek_mobil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_merek_mobil');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['merek_mobil']=$this->m_merek_mobil->tampil_data();
	 	$this->load->view('member/v_table_merek_mobil', $data);
	}

	function tambah_aksi(){
		$nama_merek = $this->input->post('nama_merek');
		$nilai_merek_mobil = $this->input->post('nilai_merek_mobil');

		$data = array(
			'nama_merek' => $nama_merek,
			'nilai_merek_mobil' => $nilai_merek_mobil,
			);
		$this->m_merek_mobil->input_data($data,'merek_mobil');
		redirect('c_merek_mobil');
	}

	public function delete(){
    $id_merek_mobil = $this->input->post("id_merek_mobil3");
    
      $this->m_merek_mobil->delete($id_merek_mobil);
       
          redirect('c_merek_mobil');
      }

	public function update($id_merek_mobil){
	$where = array('id_merek_mobil' => $id_merek_mobil);
	$data['merek_mobil'] = $this->m_merek_mobil->edit_data($where,'merek_mobil')->result();
	$this->load->view('admin/menubar');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/v_edit_nilai_merek',$data);
		 
        }
    public function update_aksi(){
    
	$id_merek_mobil= $this->input->post('id_merek_mobil');
    $nama_merek= $this->input->post('nama_merek');
    $nilai_merek_mobil= $this->input->post('nilai_merek_mobil');

	$data = array(   
               'nama_merek'=> $nama_merek,
               'nilai_merek_mobil' => $nilai_merek_mobil,
	);

	$where = array(
		'id_merek_mobil' => $id_merek_mobil
	);

	$this->m_merek_mobil->update_data($where,$data,'merek_mobil');
	redirect('c_merek_mobil');
	}
 
 }