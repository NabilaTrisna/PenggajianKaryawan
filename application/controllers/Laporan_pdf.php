<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pdf extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
            
        $this->load->helper('url', 'form');
        $this->load->library('pagination');
        $this->load->model('Page_Pegawai_model');
    }

    public function gaji()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $this->load->view('Page_Pegawai/laporan');
        }
        else
        {
            redirect(base_url('login'));
        }   

            
    }


    public function laporan_pdf()
    {
        if($this->session->userdata('previlege') == 'pegawai')
        {
            $NIK = $this->session->userdata('NIK');

            $dataGaji = $this->Page_Pegawai_model->gaji($NIK);
            $dataPegawai = $this->Page_Pegawai_model->dataPegawai($NIK);
            $data = [
                'dataGaji' => $dataGaji,
                'dataPegawai' => $dataPegawai
            ];

            $this->load->view('Page_Pegawai/laporanGaji', $data);
    
            $this->load->library('pdf');
    
            $this->pdf->setPaper('A4', 'potrait');
            $this->pdf->filename = "laporanGaji.pdf";
            $this->pdf->load_view('Page_Pegawai/laporan_download', $data);
    
        }
        else
        {
            redirect(base_url('login'));
        }   

        
    
    }

}

/* End of file Controllername.php */
