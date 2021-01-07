<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Model {
    
    function akun_login(){
        return $this->db->get('tb_akun');
    }

}

/* End of file akun.php */