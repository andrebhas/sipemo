<?php 

class M_warna extends CI_Model{
	function tampil_data(){
		$query=$this->db->query("SELECT * FROM warna");
        return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function delete ($id_warna){
            $this->db->where('id_warna',$id_warna);   
            $this->db->delete('warna'); //query delete warna
             
        }

    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}