<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji extends CI_Controller 
{

    public function __construct()
    {
        parent::__construct();
            
        $this->load->helper('url', 'form');
        $this->load->library('pagination');
        $this->load->model('Gaji_model');
    }


    public function index()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $data = [];
            $total = $this->Gaji_model->getTotal();
    
            if ($total > 0) {
                $limit = 2;
                $start = $this->uri->segment(3, 0);
    
                $config = [
                    'base_url' => base_url() . 'gaji/index',
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
                   'results' => $this->Gaji_model->list($limit, $start),
                   'nama'=> $this->Gaji_model->nama_pegawai(),
                   'namaDivisi'=> $this->Gaji_model->nama_divisi(),
                    'links' => $this->pagination->create_links()
                ];


                
            }
    
            $this->load->view('gaji/index', $data);
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
                'namaPegawai'=> $this->Gaji_model->nama_pegawai(),
                'namaDivisi'=> $this->Gaji_model->nama_divisi()
              
            ];
            $this->load->view('gaji/create', $data);
        }
        else
        {
            redirect(base_url('login'));
        }
     
    }

    public function penggajian()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $NIK = $this->input->post('NIK');
            $Bulan = $this->input->post('bulan');
            $Tahun = $this->input->post('tahun');
            $data = [
                'jamkerja' => $this->Gaji_model->jamkerja($NIK),
                'Divisi'=> $this->Gaji_model->nama_divisi(),
                'pegawai' => $this->Gaji_model->Pegawai($NIK),
                'nilai'=> $this->Gaji_model->nilai($NIK, $Bulan, $Tahun)
             ];
    
            $this->load->view('gaji/hitung', $data);
    
        }
        else
        {
            redirect(base_url('login'));
        }

        
        
    }

    public function show($idgaji)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $penilaian = $this->Gaji_model->show($idgaji);
            $data = [
                'nama'=> $this->Gaji_model->nama_pegawai(),    
                'data' => $penilaian,
            ];

            $this->load->view('gaji/show', $data);
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
                'cari' => $this->Gaji_model->cari(),
                'nama'=> $this->Gaji_model->nama_pegawai()
             ];
            
            $this->load->view('gaji/cari', $data);
        }
        else
        {
            redirect(base_url('login'));
        }        

       
    }

    public function hapus($idgaji)
    {
        $penilaian = $this->Gaji_model->delete($idgaji);
        redirect('gaji');
    }


    public function edit($id_jam)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $jam = $this->Gaji_model->show($id_jam);
            $nama = $this->Gaji_model->nama_pegawai();
            $data = [
            'data' => $jam, 
            'nama' => $nama,
            'error' => ''

            ];
            $this->load->view('gaji/edit', $data);
        }
        else
        {
            redirect('gaji/tambah');
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
            'sakit'=> $this->input->post('sakit'),
            'setengah_hari'=> $this->input->post('setengah_hari'),
            'jumlah_jam'=> $jjk,
            'jumlah_setengah'=> $jjs,
            'total_jam'=> $total
        );
         
        $perintah = $this->Gaji_model->update($id_jam,$data);

        if($perintah)
        {
            redirect('gaji');
        }
        else
        {
            redirect('gaji/tambah');
        }
    
    }

    public function hitungGaji()
    { 
        // Perhitungan Gaji Pokok
        $jmlhMasuk = $this->input->post('jumlahHariKerja');
        $gapok = $this->input->post('gapokDivisi');
        $stghHari = $this->input->post('jumlahSetengahHari');
        $sakit = $this->input->post('jumlahSakit');

        $gajiMasuk = $jmlhMasuk * 8 * $gapok;
        $gajiSetengah = $stghHari * 4 * $gapok;
        $gajiSakit = $sakit * 8 * $gapok;

        if ($this->input->post('divisi') == 7 || $this->input->post('divisi') == 10 )
        {
            $totalGapok = $gajiMasuk + $gajiSetengah + $gajiSakit + 200000;
        }
        else
        {
            $totalGapok = $gajiMasuk + $gajiSetengah + $gajiSakit;
        }
        
        
        // Perhitungan Gaji Lembur
        $jamLembur = $this->input->post('lembur');
        
        $gajiLembur = $jamLembur * $gapok;

        // Perhitungan Gaji Tambahan
        $gajiTambahan = $this->input->post('gaNilai');

        // Perhitungan Gaji Kotor 
        $gajiKotor = $totalGapok + $gajiLembur +$gajiTambahan;

        // Perhitungan Gaji Bersih
        $gajiBersih = $gajiKotor - 80000;

        $data = array(
            'pegawai' => $this->input->post('pegawai'), 
            'divisi' => $this->input->post('divisi'), 
            'idgaji' => $this->input->post('id_gaji'),
            'bulan'=>$this->input->post('bulan'),
            'tahun'=>$this->input->post('tahun'),
            'total_gapok'=> $totalGapok,
            'total_gajilembur'=> $gajiLembur,
            'total_tambahan' => $gajiTambahan,
            'total_gajikotor' => $gajiKotor,
            'total_gajiBersih' => $gajiBersih,
        );

        $perintah = $this->Gaji_model->tambahGaji($data);

        if($perintah)
        {
            redirect('gaji');
        }
        else
        {
            redirect('gaji/hitung');
        }



    }
}
