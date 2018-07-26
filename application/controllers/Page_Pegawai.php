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
        $this->load->model('Gaji_model');
    }


    public function index()
    {
        if($this->session->userdata('previlege') == 'pegawai')
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

    public function jamKerja()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $this->load->view('Page_Pegawai/jamKerja');
        }
        else
        {
            redirect(base_url('login'));
        }
            
    }

    public function biodata()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $NIK = $this->session->userdata('NIK');
            $divisi = $this->session->userdata('divisi');

            $dataPegawai = $this->Page_Pegawai_model->dataPegawai($NIK);
            $dataDivisi = $this->Page_Pegawai_model->dataDivisi();

            $data = [
                'dataPegawai' => $dataPegawai,
                'dataDivisi' => $dataDivisi
            ];

            $this->load->view('Page_Pegawai/biodata', $data);
        }
        else
        {
            redirect(base_url('login'));
        }
    }

    public function laporanjamKerja()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $NIK = $this->session->userdata('NIK');

            $dataJamKerja = $this->Page_Pegawai_model->jamKerja($NIK);
            $data = [
                'dataJamKerja' => $dataJamKerja
            ];

            

            $this->load->view('Page_Pegawai/laporanJamKerja', $data);
        }
        else
        {
            redirect(base_url('login'));
        }
            
    }

    public function penilaian()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $this->load->view('Page_Pegawai/penilaian');
        }
        else
        {
            redirect(base_url('login'));
        }   

            
    }

    public function laporanPenilaian()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $NIK = $this->session->userdata('NIK');

            $dataPenilaian = $this->Page_Pegawai_model->penilaian($NIK);
            $data = [
                'dataPenilaian' => $dataPenilaian
            ];

            $this->load->view('Page_Pegawai/laporanPenilaian', $data);
        }
        else
        {
            redirect(base_url('login'));
        }   

            
    }

    public function gaji()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $NIK = $this->session->userdata('NIK');
            $dataGaji = $this->Gaji_model->Datagaji($NIK);
            $data = [
                'nama'=> $this->Gaji_model->nama_pegawai(),
                'dataGaji' => $dataGaji
             ];             

            $this->load->view('Page_Pegawai/gaji', $data);

        }
        else
        {
            redirect(base_url('login'));
        }   

            
    }

    public function laporanGaji()
    {

        if($this->session->userdata('previlege') == 'pegawai')
        {
            $NIK = $this->session->userdata('NIK');
            //$bulan = $this->input->post('bulan');
            //$tahun = $this->input->post('tahun');

            $dataGaji = $this->Page_Pegawai_model->gaji($NIK);
            $data = [
                'dataGaji' => $dataGaji
            ];

            $this->load->view('Page_Pegawai/laporanGaji', $data);
        }
        else
        {
            redirect(base_url('login'));
        }   

            
    }

    
}


