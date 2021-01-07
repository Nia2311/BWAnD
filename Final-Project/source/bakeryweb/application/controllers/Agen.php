<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agen extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('listRoti');
        $this->load->model('KirimRoti');
        $this->load->library('form_validation');
        $this->load->model('riwayat');
        if($this->session->userdata('id') == NULL){
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Silahkan Login Kembali </div>');
            redirect('login/login_armada');
        }
    }

    public function index(){
        $this->kirimData();
    }

    public function kirimData(){
        $data['jenisroti'] = $this->listRoti->getDatajenis();
        
        $this->load->view('agen/header_agen.php', $data);
        $this->load->view('agen/kirim_data.php', $data);
        $this->load->view('agen/footer_agen.php', $data);
    }

    public function riwayat_agen(){
        $tanggal['tanggal'] = $this->riwayat->tanggal();
        $this->load->view('agen/header_agen.php', $tanggal);
        $this->load->view('agen/riwayat_agen.php', $tanggal);
        $this->load->view('agen/footer_agen.php', $tanggal);
    }

    public function tampil_riwayat(){
        $tanggal = $this->input->post('tanggal');
        $id_karyawan = $this->session->userdata('id');
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

    public function list_roti(){
        $jenisroti = $this->input->post('id_jenisRoti');
        $namaroti = $this->listRoti->get_list_roti($jenisroti);

        $lists = "<option selected disabled> - Pilih -</option>";
        foreach($namaroti as $data){
            $lists .= "<option value='".$data->nama_namaRoti."'>".$data->nama_namaRoti."</option>";
        }
        $callback = array('list_roti'=>$lists); 
        echo json_encode($callback); 
    }

    public function tambahroti(){
        $roti = $this->input->post('roti');
        $jenisroti = $this->input->post('jenisRoti');
        $jumlah = $this->input->post('jumlah');

        $this->form_validation->set_rules('roti','Roti','trim|required');
        $this->form_validation->set_rules('jenisRoti','Jenis Roti','trim|required');
        $this->form_validation->set_rules('jumlah','Jumlah','trim|required');

        if($this->form_validation->run()==false){
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert"> Mohon Isi data Terlebih Dahulu </div>');
            redirect('Agen/kirimData');
        }else{
            $tabel = [
                'roti' => $roti,
                'jenisRoti' => $jenisroti,
                'jumlah' => $jumlah
            ];
            $_SESSION['tabel'][] = $tabel;
            
            $temp_tabel = $this->session->tabel;
            foreach($temp_tabel as $key => $value){
                $total[] = $value['jumlah'];
            }
            $totalroti = array_sum($total);
            $_SESSION['tabel'] = array_values($_SESSION['tabel']);
            $_SESSION['total'] = $totalroti;
            $this->session->set_flashdata('message', '<div class="alert alert-primary alert-dismissible fade show" role="alert">
            <strong>Berhasil ditambah !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('agen/kirimData');
        }
    }

    public function kirim_tb_pemesanan(){
        if(empty($this->session->tabel)==True){
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert"> Mohon Isi data Terlebih Dahulu </div>');
            redirect('agen/kirimData');
        }else{
            $data['tanggal'] = date("Y-m-d");
            $data['cabang'] = $this->session->userdata('cabang');
            $data['id_karyawan'] = $this->session->userdata('id');
            $data['total_pemesanan'] = $this->session->userdata('total');
            $this->KirimRoti->addroti($data, 'tb_pemesanan');

            $this->kirim($data['tanggal']);
            $this->session->unset_userdata('tabel');
            $this->session->unset_userdata('jumlahTabel');
            $this->session->unset_userdata('total');
            redirect('agen/kirimData');
        }
    }

    public function kirim($tanggal){
        $all = $_SESSION;
        $cabang = $this->session->userdata('cabang');
        switch($cabang){
            case "Bantar gebang":
                $cabang = 'bantar_gebang';
                break;
            case "non-mitra":
                $cabang = 'non_mitra';
                break;
            default:
                break;
        }
        for($key=0; $key < count($all['tabel']); $key++){
            $dataroti['id_karyawan'] = $all['id'];
            $dataroti['roti'] = $all['tabel'][$key]['roti'];
            $dataroti['jumlah'] = $all['tabel'][$key]['jumlah'];
            $dataroti['id_pemesanan']= $this->KirimRoti->getroti($dataroti['id_karyawan'], $tanggal);
            $dataroti['tanggal'] = $tanggal;

            $data2['tanggal'] = $tanggal;
            $data2['id_karyawan'] = $this->session->userdata('id');
            $data2['roti'] = $all['tabel'][$key]['roti'];
            $data2['jumlah'] = $all['tabel'][$key]['jumlah'];
            $this->KirimRoti->addroti($data2, $cabang);

            $this->KirimRoti->addroti($dataroti, 'tb_roti');
        }
    }

    public function hapus($index){
        
        unset($_SESSION['tabel'][$index]);
        $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Berhasil dihapus !</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        $temp_tabel = $this->session->tabel;
        foreach($temp_tabel as $key => $value){
            $total[] = $value['jumlah'];
        }
        $_SESSION['tabel'] = array_values($_SESSION['tabel']);
        $totalroti = array_sum($total);
        $_SESSION['total'] = $totalroti;
        redirect('agen/kirimData');
    }

}
