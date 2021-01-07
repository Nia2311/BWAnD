<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('tampil');
        $this->load->model('listRoti');
        $this->load->model('KirimRoti');
        $this->load->library('form_validation');
        $this->load->model('riwayat');
        if($this->session->userdata('nama') != "ADMIN"){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Silahkan Login Kembali </div>');
            redirect('login/login_produksi');
        }
    }
    
    public function index(){
        $this->dashboard_produksi();
    }

    public function tampilkan(){

        $this->tampil->ambil_roti();
        $this->tampil->ambil_cabang();

    }

    public function dashboard_produksi(){	
        $cabang['cabang']= $this->db->get('tb_cabang')->result();
        $cabang['listroti'] = $this->db->query("SELECT nama_namaroti FROM namaroti");
        $tanggal = date('Y-m-d');
        $cabang['pemesanan'] = $this->db->get('tb_pemesanan')->result_array();
        $this->load->view('produksi/dashboard_produksi');
        $this->load->view('produksi/pemesanan_hariini',$cabang);
        $this->load->view('produksi/footer_produksi');
    }

    public function armada(){	
        $this->load->view('produksi/dashboard_produksi');
        $this->load->view('produksi/armada');
        $this->load->view('produksi/footer_produksi');
    }

    public function kotaCabang(){	
        $this->load->view('produksi/dashboard_produksi');
        $this->load->view('produksi/kotaCabang');
        $this->load->view('produksi/footer_produksi');
    }

    public function riwayatt($id_karyawan){
        $tanggal['tanggal'] = $this->riwayat->tanggal();
        $tanggal['id'] = $id_karyawan;
        $this->load->view('produksi/dashboard_produksi');
        $this->load->view('produksi/riwayat',$tanggal);
        $this->load->view('produksi/footer_produksi');
    }

    public function tampil_riwayat($id_karyawan){
        $tanggal = $this->input->post('tanggal');
        $list = $this->riwayat->tabel_riwayat_agen($id_karyawan, $tanggal);
        $key=1;
        $oke = "";
        $mantap = 0;
        foreach($list as $value){
        $oke .=  "<tr>
            <td>".$key++."</td>
            <td>".$value->roti."</td>
            <td>".$value->jumlah."</td>
                </tr>";
                $yoks[] = $value->jumlah;
        $mantap = "<td><b>".array_sum($yoks)."</b></td>";
        }
        
        $panggil = array('data_tabel' => $oke, 'jumlah' => $mantap);
        echo json_encode($panggil);
        
    }


    public function dashboard_produksi(){	
        $this->load->view('produksi/dashboard_produksi');
    }


}
