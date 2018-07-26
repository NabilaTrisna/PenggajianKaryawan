<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
            
        $this->load->helper('url', 'form');
        $this->load->library('pagination');
        $this->load->model('Penilaian_model');
    }

    public function index()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $data = [];
            $total = $this->Penilaian_model->getTotal();
    
            if ($total > 0) {
                $limit = 2;
                $start = $this->uri->segment(3, 0);
    
                $config = [
                    'base_url' => base_url() . 'penilaian/index',
                    'total_rows' => $total,
                    'per_page' => $limit,
                    'uri_segment' => 3,
    
                    // Bootstrap 3 Pagination
                    'first_link' => 'First',
                    'last_link' => 'Last',
                    'next_link' => 'Next',
                    'prev_link' => 'Prev',
                    'full_tag_open' => '<ul class="pagination">',
                    'full_tag_close' => '</ul>',
                    'num_tag_open' => '<li>',
                    'num_tag_close' => '</li>',
                    'cur_tag_open' => '<li class="active"><span>',
                    'cur_tag_close' => '<span class="sr-only">(current)</span></span></li>',
                    'next_tag_open' => '<li>',
                    'next_tag_close' => '</li>',
                    'prev_tag_open' => '<li>',
                    'prev_tag_close' => '</li>',
                    'first_tag_open' => '<li>',
                    'first_tag_close' => '</li>',
                    'last_tag_open' => '<li>',
                    'last_tag_close' => '</li>',
                ];
                $this->pagination->initialize($config);
                         
    
                $data = [
                   'results' => $this->Penilaian_model->list($limit, $start),
                   'nama'=> $this->Penilaian_model->nama_pegawai(),
                    'links' => $this->pagination->create_links
                    ()
                ];
            }
    
            $this->load->view('penilaian/index', $data);
        }
        else
        {
            redirect(base_url('login'));
        }
    }

    public function tambah()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $data = [
                'namaPegawai'=> $this->Penilaian_model->nama_pegawai(),
            ];
            $this->load->view('penilaian/create', $data);
        }
        else
        {
            redirect(base_url('login'));
        }
     
    }

    public function input()
    {
        $p1 = $this->input->post('penilaian1');
        $p2 = $this->input->post('penilaian2');
        $p3 = $this->input->post('penilaian3');
        $p4 = $this->input->post('penilaian4');
        $p5 = $this->input->post('penilaian5');
        $p6 = $this->input->post('penilaian6');
        $p7 = $this->input->post('penilaian7');
        $total = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7;
        $data = array(
            'id_penilaian' => $this->input->post('id_penilaian'),
            'pegawai'=>$this->input->post('namaPegawai'),
            'bulan'=>$this->input->post('bulan'),
            'tahun'=>$this->input->post('tahun'),
            'penilaian1'=> $this->input->post('penilaian1'),
            'penilaian2'=> $this->input->post('penilaian2'),
            'penilaian3'=> $this->input->post('penilaian3'),
            'penilaian4'=> $this->input->post('penilaian4'),
            'penilaian5'=> $this->input->post('penilaian5'),
            'penilaian6'=> $this->input->post('penilaian6'),
            'penilaian7'=> $this->input->post('penilaian7'),
            'total_penilaian'=> $total
        );
         
        $perintah = $this->Penilaian_model->insert($data);

        if($perintah)
        {
            redirect('Penilaian');
        }
        else
        {
            redirect('Penilaian/tambah');
        }
    }

    public function show($id_penilaian)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $penilaian = $this->Penilaian_model->show($id_penilaian);
            $data = [
                'nama'=> $this->Penilaian_model->nama_pegawai(),    
                'data' => $penilaian,
            ];

            $this->load->view('penilaian/show', $data);
        }
        else
        {
            redirect(base_url('login'));
        }        
    }

    public function cariData()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $data = [
                'cari' => $this->Penilaian_model->cari(),
                'nama'=> $this->Penilaian_model->nama_pegawai()
             ];
            
            $this->load->view('penilaian/cari', $data);
        }
        else
        {
            redirect('penilaian/tambah');
        }

        
    }

    public function hapus($id_penilaian)
    {
        $penilaian = $this->Penilaian_model->delete($id_penilaian);
        redirect('penilaian');
    }


    public function edit($id_penilaian)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $penilaian = $this->Penilaian_model->show($id_penilaian);
            $nama = $this->Penilaian_model->nama_pegawai();
            $data = [
            'data' => $penilaian, 
            'nama' => $nama,
            'error' => ''

            ];
            $this->load->view('penilaian/edit', $data);
        }
        else
        {
            redirect('penilaian/tambah');
        }
        
    }

    public function update($id_penilaian)
    {
        $id_penilaian = $this->input->post('id_penilaian');
        $p1 = $this->input->post('penilaian1');
        $p2 = $this->input->post('penilaian2');
        $p3 = $this->input->post('penilaian3');
        $p4 = $this->input->post('penilaian4');
        $p5 = $this->input->post('penilaian5');
        $p6 = $this->input->post('penilaian6');
        $p7 = $this->input->post('penilaian7');
        $total = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7;

            $data = array(
            'id_penilaian' => $this->input->post('id_penilaian'),
            'pegawai'=>$this->input->post('pegawai'),
            'bulan'=>$this->input->post('bulan'),
            'tahun'=>$this->input->post('tahun'),
            'penilaian1'=> $this->input->post('penilaian1'),
            'penilaian2'=> $this->input->post('penilaian2'),
            'penilaian3'=> $this->input->post('penilaian3'),
            'penilaian4'=> $this->input->post('penilaian4'),
            'penilaian5'=> $this->input->post('penilaian5'),
            'penilaian6'=> $this->input->post('penilaian6'),
            'penilaian7'=> $this->input->post('penilaian7'),
            'total_penilaian'=> $total
        );
         
        $perintah = $this->Penilaian_model->update($id_penilaian, $data);

        if($perintah)
        {
            redirect('penilaian');
        }
        else
        {
            redirect('penilaian/edit');
        }
    }


    
    


}


