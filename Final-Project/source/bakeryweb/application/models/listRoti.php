<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class listRoti extends CI_Model {

    public function getDatajenis(){
        $query = $this->db->query("SELECT *FROM jenisroti ORDER BY id_jenisRoti ASC");

        return $query->result();
    }

    public function getNamaRoti($jenisroti){
        $nama = $this->db->get_where('namaroti', ['id_jenisRoti'=>$jenisroti])->row_array();
        $hasil = $nama['nama_namaRoti'];
        return $hasil;
    }

    public function get_list_roti($jenisroti){
        $this->db->where('id_jenisRoti', $jenisroti);
        $result = $this->db->get('namaroti')->result(); // Tampilkan semua data kota berdasarkan id provinsi
        
        return $result; 
    }
}
  