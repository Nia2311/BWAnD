<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model {
    
    function akun_login(){
        return $this->db->get('tb_akun');
    }

    function akun_admin(){
        return $this->db->get('admin');
    }

}

/* End of file akun.php */