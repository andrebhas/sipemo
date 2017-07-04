<?php 

class M_harga_mobil extends CI_Model{
	function tampil_data(){
		$query=$this->db->query("SELECT * 
						FROM detail_harga_mobil
						JOIN harga_mobil on harga_mobil.id_harga_mobil = detail_harga_mobil.id_harga_mobil");
        return $query->result();
	}

	function sub_harga_mobil(){
		$query=$this->db->query("SELECT * FROM`harga_mobil");
        return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}