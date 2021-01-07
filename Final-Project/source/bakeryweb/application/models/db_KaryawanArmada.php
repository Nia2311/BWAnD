<?php

    class db_KaryawanArmada extends CI_Model{
        public function akun(){
            $query = $this->db->select('*')->get('karyawanarmada');
            return $query;
        }
    }