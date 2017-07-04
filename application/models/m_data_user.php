<?php 

class M_data_user extends CI_Model{
	function tampil_data_user(){
		$query=$this->db->query("SELECT * FROM user");
        return $query->result();
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function delete ($id_user){
            $this->db->where('id_user',$id_user);   
            $this->db->delete('user');
        }

    function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}