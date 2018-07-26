<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gaji_model extends CI_Model 
{
    public function list($limit, $start)
    {
        //$this->db->limit($limit, $start);
        //$query = $this->db->get('pegawai');
        $query = $this->db->get('gaji', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('gaji');
    }

    public function nama_pegawai()
    {
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function nama_divisi()
    {
        $query = $this->db->get('divisi');
        return $query->result();
    }
    public function Datagaji($NIK)
    {
        $this->db->where('pegawai', $NIK);
        $query = $this->db->get('gaji');
        return $query->result();
    }

    public function tambahGaji($data = [])
    {

        $result = $this->db->insert('gaji', $data);
        return $result;       
    }

    public function dataPegawai($NIK)
    {
        $this->db->where('NIK', $NIK);
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function gaji($NIK)
    {
        $tahun = $this->input->GET('tahun', TRUE);
        $bulan = $this->input->GET('bulan', TRUE);
		$data = $this->db->query("SELECT * from gaji where tahun like '%$tahun%' && pegawai = '$NIK' && bulan like '%$bulan%'");
		return $data->result();
    }

    public function show($idgaji)
    {
        $this->db->where('idgaji', $idgaji);
        $query = $this->db->get('gaji');
        return $query->row();
    } 

    public function cari()
	{
        $cari = $this->input->GET('cari', TRUE);
        $filter = $this->input->GET('filter', TRUE);
		$data = $this->db->query("SELECT * from gaji where bulan like '%$cari%' && tahun like '%$filter%' ");
		return $data->result();
    }
    
    public function delete($idgaji)
    {
        $this->db->where('idgaji', $idgaji);
        $query = $this->db->delete('gaji');
        return $query;
    }

    public function update($idgaji, $data=[])
    {
        $this->db->where('idgaji', $idgaji);
        $this->db->update('gaji', $data);
        //$query = $this->db->update('pegawai');
        return result;
    }

    public function jamkerja($NIK)
    {
        $this->db->where('pegawai', $NIK);
        $query = $this->db->get('jamkerja');
        return $query->row();
    }

   
    public function Pegawai($NIK)
    {
        $this->db->where('NIK', $NIK);
        $query = $this->db->get('pegawai');
        return $query->row();
    }

    public function nilai($NIK, $Bulan, $Tahun)
    {
        $this->db->where('pegawai', $NIK);
        $this->db->where('bulan', $Bulan);
        $this->db->where('tahun', $Tahun);
        $query = $this->db->get('penilaian');
        return $query->row();
    }


}
    


