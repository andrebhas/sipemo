<?php 


class C_data_mobil extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data_mobil');
		$this->load->model('m_kriteria');
		$this->load->model('m_hitung');
		$this->load->helper('url');

	}

	function index(){	 	
	 	$this->load->view('admin/menubar');
	 	$this->load->view('admin/sidebar');
	 	$data['data_mobil']=$this->m_data_mobil->tampil_data();
	 	$this->load->view('admin/table_mobil', $data);
	}

	function tambah(){
		$this->load->view('admin/forms');
	}

	function tambah_aksi(){
		$nama_mobil = $this->input->post('nama_mobil');
		$fitur_keamanan = $this->input->post('fitur_keamanan');
		$fitur_kelengkapan = $this->input->post('fitur_kelengkapan');
		$ukuran_cc = $this->input->post('ukuran_cc');
		$transmisi = $this->input->post('transmisi');
		$warna = $this->input->post('warna');
		$user = $this->input->post('id_user');

		$harga_mobil = $this->input->post('id_harga_mobil');
		$kategori_kendaraan = $this->input->post('id_kategori_kendaraan');
		$kapasitas_penumpang = $this->input->post('id_kapasitas_penumpang');
		$purna_jual = $this->input->post('id_purna_jual');
		
		//(nilai harga mobil normalisasi kriteria)

		$hasil_kali_harga_mobil = $this->m_hitung->getNilaiSmart("harga_mobil",$harga_mobil)->hasil;
		$hasil_kali_kategori_kendaraan = $this->m_hitung->getNilaiSmart("kategori_kendaraan",$kategori_kendaraan)->hasil;
		$hasil_kali_kapasitas_penumpang = $this->m_hitung->getNilaiSmart("kapasitas_penumpang",$kapasitas_penumpang)->hasil;
		$hasil_kali_purna_jual = $this->m_hitung->getNilaiSmart("purna_jual",$purna_jual)->hasil;
        

        $nilaiSmart = $hasil_kali_harga_mobil + $hasil_kali_kategori_kendaraan + $hasil_kali_kapasitas_penumpang + $hasil_kali_purna_jual ;


		$data = array(
			'nama_mobil' => $nama_mobil,
			'fitur_keamanan' => $fitur_keamanan,
			'fitur_kelengkapan' => $fitur_kelengkapan,
			'ukuran_cc' => $ukuran_cc,
			'transmisi' => $transmisi,
			'warna' => $warna,
			'id_user' => $user,
			'id_harga_mobil' =>$harga_mobil,
			'id_kategori_kendaraan' =>$kategori_kendaraan,
			'id_kapasitas_penumpang' =>$kapasitas_penumpang,
			'id_purna_jual' =>$purna_jual,
			'nilai_smart' => $nilaiSmart
			);
		$this->m_data_mobil->input_data($data,'smart_mobil');
		redirect('admin/c_data_mobil');
	}

	public function update($id_smart_mobil){
	$update_mobil = $this->m_data_mobil->getId($id_smart_mobil);
	if ($update_mobil){
		$data = array(
			'nama_mobil' => $update_mobil->nama_mobil,
			'fitur_keamanan' => $update_mobil->fitur_keamanan,
			'fitur_kelengkapan' => $update_mobil->fitur_kelengkapan,
			'ukuran_cc' => $update_mobil->ukuran_cc,
			'transmisi' => $update_mobil->transmisi,
			'warna' => $update_mobil->warna,
			'id_user' => $update_mobil->id_user,
			'id_harga_mobil' =>$update_mobil->id_harga_mobil,
			'id_kategori_kendaraan' =>$update_mobil->id_kategori_kendaraan,
			'id_kapasitas_penumpang' =>$update_mobil->id_kapasitas_penumpang,
			'id_purna_jual' =>$update_mobil->id_purna_jual,
			'nilai_smart' => $update_mobil->nilai_smart,
			'id_smart_mobil' =>$id_smart_mobil
			);
		$data['kategori_kendaraan']=$this->m_kriteria->md_getNilaikategori_kendaraan();
		$data['harga_mobil']=$this->m_kriteria->md_getNilaiharga_mobil();
		$data['kapasitas_penumpang']=$this->m_kriteria->md_getNilaikapasitas_penumpang();
		//$data['purna_jual']=$this->m_kriteria->md_getNilaipurna_jual();

		$this->load->view('admin/menubar');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_edit_data_mobil',$data);
	 }
    }

    public function update_aksi($id_smart_mobil){
    	$nama_mobil = $this->input->post('nama_mobil');
		$fitur_keamanan = $this->input->post('fitur_keamanan');
		$fitur_kelengkapan = $this->input->post('fitur_kelengkapan');
		$ukuran_cc = $this->input->post('ukuran_cc');
		$transmisi = $this->input->post('transmisi');
		$warna = $this->input->post('warna');
		$user = $this->input->post('id_user');

		$harga_mobil = $this->input->post('id_harga_mobil');
		$kategori_kendaraan = $this->input->post('id_kategori_kendaraan');
		$kapasitas_penumpang = $this->input->post('id_kapasitas_penumpang');
		$purna_jual = $this->input->post('id_purna_jual');

		$hasil_kali_harga_mobil = $this->m_hitung->getNilaiSmart("harga_mobil",$harga_mobil)->hasil;
		$hasil_kali_kategori_kendaraan = $this->m_hitung->getNilaiSmart("kategori_kendaraan",$kategori_kendaraan)->hasil;
		$hasil_kali_kapasitas_penumpang = $this->m_hitung->getNilaiSmart("kapasitas_penumpang",$kapasitas_penumpang)->hasil;
		$hasil_kali_purna_jual = $this->m_hitung->getNilaiSmart("purna_jual",$purna_jual)->hasil;
        
        $nilaiSmart = $hasil_kali_harga_mobil + $hasil_kali_kategori_kendaraan + $hasil_kali_kapasitas_penumpang + $hasil_kali_purna_jual ;

        $data = array(
			'nama_mobil' => $nama_mobil,
			'fitur_keamanan' => $fitur_keamanan,
			'fitur_kelengkapan' => $fitur_kelengkapan,
			'ukuran_cc' => $ukuran_cc,
			'transmisi' => $transmisi,
			'warna' => $warna,
			'id_user' => $user,
			'id_harga_mobil' =>$harga_mobil,
			'id_kategori_kendaraan' =>$kategori_kendaraan,
			'id_kapasitas_penumpang' =>$kapasitas_penumpang,
			'id_purna_jual' =>$purna_jual,
			'nilai_smart' => $nilaiSmart
			);
        $this->m_data_mobil->update($id_smart_mobil,$data);
        redirect('admin/c_data_mobil','refresh');
    }

	public function delete(){
    $id_smart_mobil = $this->input->post("id_smart_mobil");
    
      $this->m_data_mobil->delete($id_smart_mobil);
       
          redirect('admin/c_data_mobil');
      }

	public function perangkingan(){
		$this->load->view('member/menubar');
	 	$this->load->view('member/sidebar');
	 	$data['pemilih']=$this->m_hitung->md_getRangking();
	 	$this->load->view('member/v_perangkingan', $data);
	}
 }