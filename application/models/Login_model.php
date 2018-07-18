<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{

    public function cekAdmin($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('admin');
        return $query;
    }

    

}
