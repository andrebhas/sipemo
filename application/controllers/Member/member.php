<?php
 
class member extends CI_Controller {
    
    public function __construct() {
        //$this->load->helper('text');
    parent::__construct();    
    $this->load->model('m_kriteria');
    }
    public function index() {
    	$data['kategori_kendaraan']=$this->m_kriteria->md_getNilaikategori_kendaraan();
		$data['harga_mobil']=$this->m_kriteria->md_getNilaiharga_mobil();
		$data['kapasitas_penumpang']=$this->m_kriteria->md_getNilaikapasitas_penumpang();
		$data['purna_jual']=$this->m_kriteria->md_getNilaipurna_jual();
	 	$this->load->view('member/menubar');
        $this->load->view('member/dashboard',$data);
    }


}
?>