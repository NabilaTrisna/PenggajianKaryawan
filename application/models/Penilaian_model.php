<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian_model extends CI_Model 
{
    public function list($limit, $start)
    {
        //$this->db->limit($limit, $start);
        //$query = $this->db->get('pegawai');
        $query = $this->db->get('penilaian', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('penilaian');
    }

    public function nama_pegawai()
    {
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function insert($data = [])
    {

        $result = $this->db->insert('penilaian', $data);
        return $result;       
    }

    public function show($id_penilaian)
    {
        $this->db->where('id_penilaian', $id_penilaian);
        $query = $this->db->get('penilaian');
        return $query->row();
    } 

    public function cari()
	{
        $cari = $this->input->GET('cari', TRUE);
        $filter = $this->input->GET('filter', TRUE);
		$data = $this->db->query("SELECT * from penilaian where bulan like '%$cari%' && tahun like '%$filter%' ");
		return $data->result();
    }
    
    public function delete($id_penilaian)
    {
        $this->db->where('id_penilaian', $id_penilaian);
        $query = $this->db->delete('penilaian');
        return $query;
    }

    public function update($id_penilaian, $data=[])
    {
        $this->db->where('id_penilaian', $id_penilaian);
        $this->db->update('penilaian', $data);
        //$query = $this->db->update('pegawai');
        return result;
    }
    
}
