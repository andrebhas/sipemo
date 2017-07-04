<?php 


class C_kategori_kendaraan extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kategori_kendaraan');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['kategori_kendaraan']=$this->m_kategori_kendaraan->tampil_data();
	 	$this->load->view('admin/v_table_kategori_kendaraan', $data);
	}

	function tambah(){
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
		$this->load->view('admin/v_input_kategori');
	}

	function tambah_aksi(){
		$nama_kategori = $this->input->post('nama_kategori');
		$nilai_kategori = $this->input->post('nilai_kategori');

		$data = array(
			'nama_kategori' => $nama_kategori,
			'nilai_kategori' => $nilai_kategori,
			);
		$this->m_kategori_kendaraan->input_data($data,'kategori_kendaraan');
		redirect('admin/c_kategori_kendaraan');
	}

	public function delete(){
    $id_kategori = $this->input->post("id_kategori3");
    
      $this->m_kategori_kendaraan->delete($id_kategori);
       
          redirect('c_kategori_kendaraan');
      }

	public function update($id_kategori_kendaraan){
	$where = array('id_kategori_kendaraan' => $id_kategori_kendaraan);
	$data['kategori_kendaraan'] = $this->m_kategori_kendaraan->edit_data($where,'kategori_kendaraan')->result();
	$this->load->view('admin/menubar');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/v_edit_nilai_kategori',$data);
		 
        }
    public function update_aksi(){
    
	$id_kategori= $this->input->post('id_kategori');
    $nama_kategori= $this->input->post('nama_kategori');
    $nilai_kategori= $this->input->post('nilai_kategori');

	$data = array(   
               'nama_kategori'=> $nama_kategori,
               'nilai_kategori' => $nilai_kategori,
	);

	$where = array(
		'id_kategori' => $id_kategori
	);

	$this->m_kategori_kendaraan->update_data($where,$data,'kategori_kendaraan');
	redirect('admin/c_kategori_kendaraan');
	}
 
 }