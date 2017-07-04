<?php 


class C_data_mobil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('M_data_mobil');
		$this->load->model('m_hitung');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$id_user = $this->session->userdata('id_user');
	 	$data['data_mobil']=$this->m_hitung->md_getRangking($id_user);
	 	$this->load->view('member/tables', $data);
	}

	public function rangking(){
		$harga_mobil = $this->input->post('id_harga_mobil');
		$kategori_kendaraan = $this->input->post('id_kategori_kendaraan');
		$kapasitas_penumpang = $this->input->post('id_kapasitas_penumpang');
		$purna_jual = $this->input->post('id_purna_jual');

		$hasil_kali_harga_mobil = $this->m_hitung->getNilaiSmart("harga_mobil",$harga_mobil)->hasil;
		$hasil_kali_kategori_kendaraan = $this->m_hitung->getNilaiSmart("kategori_kendaraan",$kategori_kendaraan)->hasil;
		$hasil_kali_kapasitas_penumpang = $this->m_hitung->getNilaiSmart("kapasitas_penumpang",$kapasitas_penumpang)->hasil;
		$hasil_kali_purna_jual = $this->m_hitung->getNilaiSmart("purna_jual",$purna_jual)->hasil;
        
        $nilaiSmart = $hasil_kali_harga_mobil + $hasil_kali_kategori_kendaraan + $hasil_kali_kapasitas_penumpang + $hasil_kali_purna_jual ;

        $rangking = $this->m_hitung->perangkingan($nilaiSmart,$harga_mobil,$kategori_kendaraan,$kapasitas_penumpang,$purna_jual);

        $nama_harga_mobil = $this->m_hitung->getNamaKriteria('harga_mobil',$harga_mobil);
        $nama_kategori_kendaraan = $this->m_hitung->getNamaKriteria('kategori_kendaraan',$kategori_kendaraan);
        $nama_kapasitas_penumpang = $this->m_hitung->getNamaKriteria('kapasitas_penumpang',$kapasitas_penumpang);
        $nama_purna_jual = $this->m_hitung->getNamaKriteria('purna_jual',$purna_jual);

        $nilaiNormalisasi_harga_mobil = $this->m_hitung->getNilaiNormalisasi('K01')->normalisasi;
        $nilaiNormalisasi_kategori_kendaraan = $this->m_hitung->getNilaiNormalisasi('K02')->normalisasi;
        $nilaiNormalisasi_kapasitas_penumpang = $this->m_hitung->getNilaiNormalisasi('K03')->normalisasi;
        $nilaiNormalisasi_purna_jual = $this->m_hitung->getNilaiNormalisasi('K04')->normalisasi;

        $data = array(
        	'data_mobil' => $rangking,
        	'harga_mobil' => $harga_mobil,
        	'kategori_kendaraan' => $kategori_kendaraan,
        	'kapasitas_penumpang' => $kapasitas_penumpang,
        	'purna_jual' => $purna_jual,
        	'nama_harga_mobil' => $nama_harga_mobil,
        	'nama_kategori_kendaraan' => $nama_kategori_kendaraan,
        	'nama_kapasitas_penumpang' => $nama_kapasitas_penumpang,
        	'nama_purna_jual' => $nama_purna_jual,
        	'nilaiNormalisasi_harga_mobil' => $nilaiNormalisasi_harga_mobil,
        	'nilaiNormalisasi_kapasitas_penumpang' => $nilaiNormalisasi_kapasitas_penumpang,
        	'nilaiNormalisasi_kategori_kendaraan' => $nilaiNormalisasi_kategori_kendaraan,
        	'nilaiNormalisasi_purna_jual' => $nilaiNormalisasi_purna_jual,
        	'nilaiSmart' =>$nilaiSmart 
        	);
        $this->load->view('member/menubar');
        $this->load->view('member/v_detail_perangkingan',$data);
    }

    public function cetak($harga_mobil,$kategori_kendaraan,$kapasitas_penumpang,$purna_jual){
		$hasil_kali_harga_mobil = $this->m_hitung->getNilaiSmart("harga_mobil",$harga_mobil)->hasil;
		$hasil_kali_kategori_kendaraan = $this->m_hitung->getNilaiSmart("kategori_kendaraan",$kategori_kendaraan)->hasil;
		$hasil_kali_kapasitas_penumpang = $this->m_hitung->getNilaiSmart("kapasitas_penumpang",$kapasitas_penumpang)->hasil;
		$hasil_kali_purna_jual = $this->m_hitung->getNilaiSmart("purna_jual",$purna_jual)->hasil;
        

        $nilaiSmart = $hasil_kali_harga_mobil + $hasil_kali_kategori_kendaraan + $hasil_kali_kapasitas_penumpang + $hasil_kali_purna_jual ;

        $rangking = $this->m_hitung->perangkingan($nilaiSmart,$harga_mobil,$kategori_kendaraan,$kapasitas_penumpang,$purna_jual);
         $data = array(
        	'data_mobil' => $rangking
        	);
        $this->load->view('member/v_cetak', $data);
    }
 
 }