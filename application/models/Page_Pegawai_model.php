<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Page_Pegawai_model extends CI_Model 
{

    public function cekPegawai($username, $password)
    {
        $this->db->where('NIK', $username);
        $this->db->where('password', $password);
        $query = $this->db->get('pegawai');
        return $query;
    }

    public function dataPegawai($NIK)
    {
        $this->db->where('NIK', $NIK);
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function dataDivisi()
    {
        //$this->db->where('id_divisi', $divisi);
        $query = $this->db->get('divisi');
        return $query->result();
    }

    public function jamKerja($NIK)
    {
        $tahun = $this->input->GET('tahun', TRUE);
        $bulan = $this->input->GET('bulan', TRUE);
		$data = $this->db->query("SELECT * from jamkerja where tahun like '%$tahun%' && pegawai = '$NIK' && bulan like '%$bulan%'");
		return $data->result();
    }

    public function penilaian($NIK)
    {
        $tahun = $this->input->GET('tahun', TRUE);
        $bulan = $this->input->GET('bulan', TRUE);
		$data = $this->db->query("SELECT * from penilaian where tahun like '%$tahun%' && pegawai = '$NIK' && bulan like '%$bulan%'");
		return $data->result();
    }

    public function gaji($NIK)
    {
        $tahun = $this->input->GET('tahun', TRUE);
        $bulan = $this->input->GET('bulan', TRUE);
		$data = $this->db->query("SELECT * from gaji where tahun like '%$tahun%' && pegawai = '$NIK' && bulan like '%$bulan%'");
		return $data->result();
    }

}

