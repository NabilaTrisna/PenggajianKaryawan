<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_Pegawai extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
            
        $this->load->helper('url', 'form');
        $this->load->library('pagination');
        $this->load->model('Page_Pegawai_model');
    }


    public function index()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $this->load->view('Page_pegawai/index');
        }
        else
        {
            $this->load->view('login');
        }
    }


}


