<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function __construct() 
	{
        parent::__construct();
		
		$this->load->library('session');
		$this->load->model('Login_model');
		$this->load->model('Page_Pegawai_model');
    }

	public function index()
	{
		if($this->session->userdata('previlege') == 'admin')
        {

            $this->load->view('admin/index');
		}
		else if($this->session->userdata('previlege') == 'pegawai')
        {
            $NIK = $this->session->userdata('NIK');

            $dataPegawai = $this->Page_Pegawai_model->dataPegawai($NIK);
            $data = [
                'dataPegawai' => $dataPegawai
            ];

            $this->load->view('Page_Pegawai/index', $data);
        }
        else
        {
            $this->load->view('login');
        }
	}

	public function login()
	{

		$usr = $this->input->post('username');
		$psw = $this->input->post('password');
		
		$cekAdmin = $this->Login_model->cekAdmin($usr, $psw);
		$cekPegawai = $this->Page_Pegawai_model->cekPegawai($usr, $psw);

		if ($cekAdmin->num_rows() > 0) 
		{
			//login berhasil, buat session
			foreach ($cekAdmin->result() as $qad) 
			{

				$session_set = array(           
					'username'      => $qad->username,                           
					'previlege'		=> $qad->previlege
				);
				//$data['admin'] = $this->session->userdata('admin');
				$this->session->set_userdata($session_set);
			}
			redirect(base_url('Admin'));
		} 
		else if($cekPegawai->num_rows() > 0)
		{
			//login berhasil, buat session
			foreach ($cekPegawai->result() as $qad) 
			{
			
				$session_set = array(                                 
					'previlege'		=> $qad->previlege,
					'NIK'			=> $qad->NIK,
					'divisi'		=> $qad->divisi
				);

				//$data['admin'] = $this->session->userdata('ser') //: GATAU LANJUTANNYA :")
				$this->session->set_userdata($session_set);
			}
			redirect(base_url('Page_Pegawai'));
		}
		else 
		{
			$this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
			redirect();
		}

	
	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
