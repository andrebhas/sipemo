<?php 

class M_desain_interior extends CI_Model{
	function tampil_data(){
		$query=$this->db->query("SELECT * FROM desain_interior");
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