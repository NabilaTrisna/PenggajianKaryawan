<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function _construct()
    {
        parent::_construct();
        $this->load->library('pdf');
    }


    public function pdf()
    {
        $data = [
            "title" => 'Contoh',
            "data" => [
                ["kolom1" => "kolom1", "kolom2" => "kolom2" ],
                ["kolom1" => "kolom1", "kolom2" => "kolom2" ],
                ["kolom1" => "kolom1", "kolom2" => "kolom2" ],
            ]
            ];

            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->load_view('laporan', $data, 'laporan-contoh.pdf');
    }

    public function html()
    {
        $data = [
            "title" => "Contoh",
        ];

        $this->load->view('laporan', $data);
    }
}