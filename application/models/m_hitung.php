<?php
class M_hitung extends CI_Model {
    function __construct(){
        parent::__construct();
    }

    public function getNilaiSmart($table, $id_kriteria){
    	$sql = "SELECT (a.nilai * (SELECT normalisasi from kriteria b where b.id_kriteria = a.id_kriteria)) as hasil from $table a where a.id_".$table." = '$id_kriteria' ";
    	$query = $this->db->query($sql);
    	return $query->row();
   
    }

    public function perangkingan($nilai_smart,$harga_mobil,$kategori_kendaraan,$kapasitas_penumpang,$purna_jual){
    	$sql = "SELECT *, (nilai_smart - ".$nilai_smart.") as nilai_akhir
from smart_mobil
join harga_mobil on harga_mobil.id_harga_mobil = smart_mobil.id_harga_mobil
join kategori_kendaraan on kategori_kendaraan.id_kategori_kendaraan = smart_mobil.id_kategori_kendaraan
join kapasitas_penumpang on kapasitas_penumpang.id_kapasitas_penumpang = smart_mobil.id_kapasitas_penumpang
join purna_jual on purna_jual.id_purna_jual = smart_mobil.id_purna_jual
where (nilai_smart - ".$nilai_smart.") in (SELECT (nilai_smart - ".$nilai_smart.") as nilai_banding
                            FROM smart_mobil GROUP BY nilai_banding HAVING COUNT(nilai_banding)  > 1)
and kategori_kendaraan.id_kategori_kendaraan =  '".$kategori_kendaraan."' order by nilai_akhir desc";
        $query = $this->db->query($sql);
    	return $query->result();
    }

    public function getNamaKriteria($table,$id_kriteria){
        $sql = "SELECT * FROM ".$table." WHERE id_".$table." = '".$id_kriteria."'";
        $query = $this->db->query($sql);
        return $query->row();
    }

    public function getNilaiNormalisasi($id_kriteria){
        $sql = "SELECT * FROM kriteria where id_kriteria = '".$id_kriteria."'";
        $query = $this->db->query($sql);
        return $query->row();
    }

    

	
}