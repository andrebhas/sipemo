<?php 

class M_merek_mobil extends CI_Model{
	function tampil_data(){
		$query=$this->db->query("SELECT * FROM merek_mobil");
        return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function delete ($id_merek_mobil){
            $this->db->where('id_merek_mobil',$id_merek_mobil);   
            $this->db->delete('merek_mobil'); //query delete merek mobil
             
        }

    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}