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
		//$data['purna_jual']=$this->m_kriteria->md_getNilaipurna_jual();
	 	$this->load->view('member/menubar');
        $this->load->view('member/dashboard',$data);
    }

    public function json_purna_jual($harga_m)
    {
        $pj = $this->m_kriteria->md_getNilaipurna_jual($harga_m);
        $i = 0;
        $dt = array();
        foreach ($pj as $row) {
            $range = $this->m_kriteria->get_range_purna($row['id_purna_jual']);
            foreach ($range as $r) {
                $ar_range[$row['id_purna_jual']][] = $r->harga;
            }
             array_push($dt,array(
                'id_purna_jual' => $row['id_purna_jual'],
                'min_purna' => min($ar_range[$row['id_purna_jual']]),
                'max_purna'=> max($ar_range[$row['id_purna_jual']]),
            ));
        }
        echo json_encode($dt);
    }

}
?>