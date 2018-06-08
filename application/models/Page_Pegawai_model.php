<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_Pegawai_model extends CI_Model 
{

    public function cekPegawai($username, $password)
    {
        $this->db->where('NIK', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('pegawai');
        return $query;
    }

}

