<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        $this->load->model('Divisi_model');
    }

    public function index()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $divisi = $this->Divisi_model->listDevisi();
            $data = ['title' => 'Pemrograman Web Framework :: Data Divisi Pegawai','divisi' => $divisi];
            $total = $this->Divisi_model->getTotal();

            if ($total > 0) 
            {
                $limit = 10;
                $start = $this->uri->segment(3, 0);

                $config = [
                    'base_url' => base_url() . 'divisi/index',
                    'total_rows' => $total,
                    'per_page' => $limit,
                    'uri_segment' => 3,

                // Bootstrap 3 Pagination
                    'first_link' => '&laquo;',
                    'last_link' => '&raquo;',
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
                    'results' => $this->Divisi_model->list($limit, $start),
                    'links' => $this->pagination->create_links(),
                ];
            }
                 $this->load->view('divisi/index', $data);
        }
        else
        {
            redirect(base_url('login'));
        }
    }


    public function create()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $this->load->view('divisi/create');
        }
        else
        {
            redirect(base_url('login'));
        }
    }

    public function store()
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $data = [
                'nama' => $this->input->post('nama'),
                'gapok'=> $this->input->post('gapok'),
                
            ];
            $rules = [
            [
                'field' => 'nama',
                 'label' => 'Nama',
                 'rules' => 'trim|required'
            ]
            ];
            // Untuk rule sederhana bisa dengan menggunakan
            // $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
            $this->form_validation->set_rules($rules);

            if ($this->form_validation->run()) {
                $result = $this->Divisi_model->insert($data);
                if ($result) {
                redirect('divisi');
                }
            } else {
                redirect('divisi/create');
            }
        }
        else
        {
            redirect(base_url('login'));
        }

           
                
    }

    public function show($id_divisi)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $divisi = $this->Divisi_model->show($id_divisi);
            $data = [
                'data' => $divisi
             ];
             $this->load->view('divisi/show', $data);
        }
        else
        {
          redirect(base_url('login'));
        }   
    }

    public function edit($id_divisi)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $divisi = $this->Divisi_model->show($id_divisi);
            $data = ['data' => $divisi];
            $this->load->view('divisi/edit', $data);
        }
        else
        {
            redirect(base_url('login'));
        }

    }

    public function update($id_divisi)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $id_divisi = $this->input->post('id_divisi');
            $data = array( 
           'nama' => $this->input->post('nama'),
           'gapok'=> $this->input->post('gapok'),
            );

            $this->Divisi_model->update($id_divisi, $data);
            redirect('divisi');
        }
        else
        {
            redirect(base_url('login'));
        }
      
    }

    public function destroy($id_divisi)
    {
        if($this->session->userdata('previlege') == 'admin')
        {
            $this->Divisi_model->delete($id_divisi);
            redirect('divisi');
        }
        else
        {
            redirect(base_url('login'));
        }
      
    }


}



/* End of file Jabatan.php */



/* End of file Controllername.php */
