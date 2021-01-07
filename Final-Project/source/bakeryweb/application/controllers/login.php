<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {

    public function __construct(){
		parent::__construct();		
        $this->load->library('form_validation');
    }

    public function index(){
        $this->login_armada();
    }
    
    public function login_produksi(){
        $this->load->view('login/login_produksi');
    }

    public function login_armada(){
        $this->load->view('login/login_armada');
    }

    public function proses_login_armada(){	
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_akun',['nama'=>$nama])->row_array();
        $this->form_validation->set_rules('nama','Nama','trim|required');
        $this->form_validation->set_rules('password','Sandi','trim|required');

        if($this->form_validation->run()==false){
            redirect('login/login_armada');   
        }else{
            if($nama == $user['nama']){
                if($password == $user['password']){
                    $data = [
                        'id' => $user['id_karyawan'],
                        'nama' => $user['nama'],
                        'cabang' => $user['cabang']
                    ];
                    $this->session->set_userdata($data);
                    redirect('Agen/kirimData');

                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Password Salah ! </div>');
                    redirect('login/login_armada');    
                }
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Nama Salah ! </div>');
                redirect('login/login_armada');
            }
        }   
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('login/login_armada');
    }


}
