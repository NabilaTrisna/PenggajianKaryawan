<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jamkerja_model extends CI_Model 
{
    public function list($limit, $start)
    {
        //$this->db->limit($limit, $start);
        //$query = $this->db->get('pegawai');
        $query = $this->db->get('jamkerja', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('jamkerja');
    }

    public function nama_pegawai()
    {
        $query = $this->db->get('pegawai');
        return $query->result();
    }

    public function insert($data = [])
    {

        $result = $this->db->insert('jamkerja', $data);
        return $result;       
    }

    public function show($id_jam)
    {
        $this->db->where('id_jam', $id_jam);
        $query = $this->db->get('jamkerja');
        return $query->row();
    } 

    public function cari()
	{
        $cari = $this->input->GET('cari', TRUE);
        $filter = $this->input->GET('filter', TRUE);
		$data = $this->db->query("SELECT * from jamkerja where bulan like '%$cari%' && tahun like '%$filter%' ");
		return $data->result();
    }
    
    public function delete($id_jam)
    {
        $this->db->where('id_jam', $id_jam);
        $query = $this->db->delete('jamkerja');
        return $query;
    }

    public function update($id_jam, $data=[])
    {
        $this->db->where('id_jam', $id_jam);
        $this->db->update('jamkerja', $data);
        //$query = $this->db->update('pegawai');
        return result;
    }
    
}
    


