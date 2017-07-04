<?php 


class C_data_user extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_user');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['data_user']=$this->m_data_user->tampil_data_user();
	 	$this->load->view('admin/v_data_user', $data);
	}

	function tambah(){
		$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
		$this->load->view('admin/v_data_user');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');

		$data = array(
			'username' => $username,
			'password' => $password,
			'level' => $level
			);
		$this->m_data_user->input_data($data,'user');
		redirect('admin/c_table_user');
	}

	public function delete(){
    $id_user = $this->input->post("id_user3");
    
      $this->m_data_user->delete($id_user);
       
          redirect('admin/c_table_user');
      }

	public function update($id_user){
	$where = array('id_user' => $id_user);
	$data['data_user'] = $this->m_data_user->edit_data($where,'user')->result();
	$this->load->view('admin/menubar');
	$this->load->view('admin/sidebar');
	$this->load->view('admin/v_edit_user',$data);
		 
        }
    public function update_aksi(){
    
	$id_user= $this->input->post('id_user');
    $username= $this->input->post('username');
    $password= $this->input->post('password');
    $level= $this->input->post('level');
	$data = array(   
               'username'=> $username,
               'password' => $password,
               'level' => $level
               
	);

	$where = array(
		'id_user' => $id_user);

	$this->m_data_user->update_data($where,$data,'user');
	redirect('admin/c_data_user');
	}
 
 }