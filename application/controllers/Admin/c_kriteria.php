<?php 


class C_kriteria extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_kriteria');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['kriteria']=$this->m_kriteria->tampil_data();
	 	$this->load->view('admin/v_table_kriteria', $data);
	}

	function tambah(){
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
		$this->load->view('admin/v_input_kriteria');
	}

	function tambah_aksi(){
		$kriteria = $this->input->post('kriteria');
		$bobot = $this->input->post('bobot');
		$normalisasi = $this->input->post('normalisasi');

		$data = array(
			'kriteria' => $kriteria,
			'bobot' => $bobot,
			'normalisasi' => $normalisasi,
			);
		$this->m_kriteria->input_data($data,'kriteria');
		redirect('admin/c_kriteria');
	}

	public function delete(){
    $id_kriteria = $this->input->post("id_kriteria3");
    
      $this->m_kriteria->delete($id_kriteria);
       
          redirect('c_kriteria');
      }

	public function update($id_kriteria){
	$where = array('id_kriteria' => $id_kriteria);
	$data['kriteria'] = $this->m_kriteria->edit_data($where,'kriteria')->result();
	$this->load->view('admin/menubar');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/v_edit_bobot',$data);
		 
        }
    public function update_aksi(){
    
	$id_kriteria= $this->input->post('id_kriteria');
    $kriteria= $this->input->post('kriteria');
    $bobot= $this->input->post('bobot');
    $normalisasi = $bobot / 100;

	$data = array(   
               'kriteria'=> $kriteria,
               'bobot' => $bobot,
               'normalisasi' => $normalisasi,
	);

	$where = array(
		'id_kriteria' => $id_kriteria
	);

	$this->m_kriteria->update_data($where,$data,'kriteria');
	redirect('admin/c_kriteria');
	}

 }