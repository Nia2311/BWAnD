<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends CI_Controller {

    public function login_produksi(){	
        $this->load->view('login_produksi');
    }

    public function login_armada(){	
        $this->load->view('login_armada');
    }


}
