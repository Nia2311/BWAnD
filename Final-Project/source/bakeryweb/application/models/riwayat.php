<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Model {

    public function tanggal(){
        return $this->db->query("SELECT DISTINCT tanggal FROM tb_roti")->result();
    }

    public function tabel_riwayat_agen($id_karyawan, $tanggal){
        $this->db->where(['id_karyawan' => $id_karyawan, 'tanggal' => $tanggal]);
        $result = $this->db->get('tb_roti')->result(); // Tampilkan semua data kota berdasarkan id provinsi
        
        return $result; 
        
    }
    
}

/* End of file ModelName.php */
