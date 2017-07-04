<?php 

class M_purna_jual extends CI_Model{
	function tampil_data(){
		$query=$this->db->query("SELECT * 
						FROM detail_purna_jual
						JOIN purna_jual on purna_jual.id_purna_jual = detail_purna_jual.id_purna_jual");
        return $query->result();
	}
	function sub_purna_jual(){
		$query=$this->db->query("SELECT * FROM purna_jual");
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