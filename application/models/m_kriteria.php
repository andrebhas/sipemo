<?php 

class M_kriteria extends CI_Model{
	function tampil_data(){
		$query=$this->db->query("SELECT * FROM kriteria");
        return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function delete ($id_kriteria){
            $this->db->where('id_kriteria',$id_kriteria);   
            $this->db->delete('kriteria'); //query delete kriteria
             
        }

    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	
    public function md_getNilaikategori_kendaraan() { 
        $query = $this->db->query("SELECT * FROM kategori_kendaraan");
        return $query;
    }
    public function md_getNilaiharga_mobil() { 
        $query = $this->db->query("SELECT DISTINCT id_harga_mobil FROM `detail_harga_mobil`");
        return $query;
    }
    public function md_getNilaikapasitas_penumpang() { 
        $query = $this->db->query("SELECT * FROM kapasitas_penumpang");
        return $query;
    }
    public function md_getNilaipurna_jual($harga_m) { 
        $query = $this->db->query("SELECT DISTINCT id_purna_jual FROM `detail_purna_jual` WHERE `harga` < ".$harga_m." ORDER BY `harga` desc LIMIT 2");
        return $query->result_array();
    }

    function get_range_harga($id_harga_mobil)
    {
        $this->db->where('id_harga_mobil',$id_harga_mobil);
        $query = $this->db->get('detail_harga_mobil');
        return $query->result();
    }

    function get_range_purna($id_purna_jual)
    {
        $this->db->where('id_purna_jual',$id_purna_jual);
        $query = $this->db->get('detail_purna_jual');
        return $query->result();
    }			
}