<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jamkerja extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
            
        $this->load->helper('url', 'form');
        $this->load->library('pagination');
        $this->load->model('Jamkerja_model');
    }


    public function index()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $data = [];
            $total = $this->Jamkerja_model->getTotal();
    
            if ($total > 0) {
                $limit = 2;
                $start = $this->uri->segment(3, 0);
    
                $config = [
                    'base_url' => base_url() . 'jamkerja/index',
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
                   'results' => $this->Jamkerja_model->list($limit, $start),
                   'nama'=> $this->Jamkerja_model->nama_pegawai(),
                    'links' => $this->pagination->create_links
                    ()
                ];
            }
    
            $this->load->view('jamkerja/index', $data);
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
                'namaPegawai'=> $this->Jamkerja_model->nama_pegawai(),
            ];
            $this->load->view('jamkerja/create', $data);
        }
        else
        {
            redirect(base_url('login'));
        }
     
    }

    public function input()
    {
        $p1 = $this->input->post('hari_kerja');
        $p3 = $this->input->post('jam_lembur');
        $p2 = $this->input->post('setengah_hari');
        $jjk = $p1 * 8;
        $jjs = $p2 * 4;
        $total = $jjk - $jjs + $p3;
        $data = array(
            'id_jam' => $this->input->post('id_jam'),
            'pegawai'=>$this->input->post('namaPegawai'),
            'bulan'=>$this->input->post('bulan'),
            'tahun'=>$this->input->post('tahun'),
            'hari_kerja'=> $this->input->post('hari_kerja'),
            'tidak_masuk'=> $this->input->post('tidak_masuk'),
            'jam_lembur'=> $this->input->post('jam_lembur'),
            'setengah_hari'=> $this->input->post('setengah_hari'),
            'jumlah_jam'=> $jjk,
            'jumlah_setengah'=> $jjs,
            'total_jam'=> $total
        );
         
        $perintah = $this->Jamkerja_model->insert($data);

        if($perintah)
        {
            redirect('jamkerja');
        }
        else
        {
            redirect('jamkerja/tambah');
        }
    }

    public function show($id_jam)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $penilaian = $this->Jamkerja_model->show($id_jam);
            $data = [
                'nama'=> $this->Jamkerja_model->nama_pegawai(),    
                'data' => $penilaian,
            ];

            $this->load->view('jamkerja/show', $data);
        }
        else
        {
            redirect(base_url('login'));
        }        
    }

    public function cariData()
    {
        $data = [
            'cari' => $this->Jamkerja_model->cari(),
            'nama'=> $this->Jamkerja_model->nama_pegawai()
         ];
        
		$this->load->view('jamkerja/cari', $data);
    }

    public function hapus($id_jam)
    {
        $penilaian = $this->Jamkerja_model->delete($id_jam);
        redirect('jamkerja');
    }


    public function edit($id_jam)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $jam = $this->Jamkerja_model->show($id_jam);
            $nama = $this->Jamkerja_model->nama_pegawai();
            $data = [
            'data' => $jam, 
            'nama' => $nama,
            'error' => ''

            ];
            $this->load->view('jamkerja/edit', $data);
        }
        else
        {
            redirect('jamkerja/tambah');
        }
        
    }

    public function update($id_jam)
    {
        $p1 = $this->input->post('hari_kerja');
        $p3 = $this->input->post('jam_lembur');
        $p2 = $this->input->post('setengah_hari');
        $jjk = $p1 * 8;
        $jjs = $p2 * 4;
        $total = $jjk - $jjs + $p3;
        $data = array(
            
            'pegawai'=>$this->input->post('pegawai'),
            'bulan'=>$this->input->post('bulan'),
            'tahun'=>$this->input->post('tahun'),
            'hari_kerja'=> $this->input->post('hari_kerja'),
            'tidak_masuk'=> $this->input->post('tidak_masuk'),
            'jam_lembur'=> $this->input->post('jam_lembur'),
            'setengah_hari'=> $this->input->post('setengah_hari'),
            'jumlah_jam'=> $jjk,
            'jumlah_setengah'=> $jjs,
            'total_jam'=> $total
        );
         
        $perintah = $this->Jamkerja_model->update($id_jam,$data);

        if($perintah)
        {
            redirect('jamkerja');
        }
        else
        {
            redirect('jamkerja/tambah');
        }
    
    }
}