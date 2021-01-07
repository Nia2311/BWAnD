<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produksi extends CI_Controller {

    public function dashboard_produksi(){	
        $this->load->view('produksi/dashboard_produksi');
    }

}
