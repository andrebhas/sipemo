<?php 

class M_data_mobil extends CI_Model{
	function tampil_data(){
		$query=$this->db->query("SELECT * from smart_mobil
join harga_mobil on harga_mobil.id_harga_mobil = smart_mobil.id_harga_mobil
join kategori_kendaraan on kategori_kendaraan.id_kategori_kendaraan = smart_mobil.id_kategori_kendaraan
join kapasitas_penumpang on kapasitas_penumpang.id_kapasitas_penumpang = smart_mobil.id_kapasitas_penumpang
join purna_jual on purna_jual.id_purna_jual = smart_mobil.id_purna_jual
");
        return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function getId($id_smart_mobil){
		 $this->db->where('id_smart_mobil',$id_smart_mobil);  
		 $data = $this->db->get('smart_mobil');  
		 return $data->row();
	}

	public function update($where,$data){
		$this->db->where('id_smart_mobil',$where);
		$this->db->update('smart_mobil',$data);

	}

	public function delete ($id_smart_mobil){
            $this->db->where('id_smart_mobil',$id_smart_mobil);   
            $this->db->delete('smart_mobil'); //query delete data mobil
             
        }
}