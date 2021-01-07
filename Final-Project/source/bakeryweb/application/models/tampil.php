<?php
defined('BASEPATH') or exit('No direct script access allowed');

class tampil extends CI_Model
{
    public function pemesanan_hariini($tanggal, $cabang, $roti)
    {
        $value = $this->db->get_where($cabang, ['tanggal' => $tanggal, 'roti' => $roti])->result_array();
        foreach ($value as $key => $nih) {
            $total[] = $nih['jumlah'];
        }
        return array_sum($total);
    }

    public function ambil_roti($id_roti)
    {
        $roti = $this->db->get_where('namaroti', ['id_namaroti' => $id_roti])->row_array();
        return $roti['nama_namaRoti'];
    }

    public function ambil_cabang($key)
    {
        $cabang = $this->db->get('tb_cabang')->result_array();
        return $cabang[$key]['cabang'];
    }
}

/* End of file ModelName.php */
