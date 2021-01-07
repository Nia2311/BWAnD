<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class KirimRoti extends CI_Model {

    public function addroti($data, $table){
        $this->db->insert($table, $data);
    }

    public function getroti($id_karyawan, $tanggal){
        $getroti = $this->db->get_where('tb_pemesanan', ['id_karyawan' => $id_karyawan, 'tanggal' => $tanggal])->row_array();
        
        $query = $getroti['id_pemesanan'];
        return $query;
    }

}

/* End of file KirimRoti.php */
