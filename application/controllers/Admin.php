<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $this->load->view('admin/index');
        }
        else
        {
            redirect(base_url('login'));
        }
        
    }
}
