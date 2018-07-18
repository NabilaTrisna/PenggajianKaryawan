<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model 
{

    public function list($limit, $start)
    {
        //$this->db->limit($limit, $start);
        //$query = $this->db->get('pegawai');
        $query = $this->db->get('pegawai', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function getTotal()
    {
        return $this->db->count_all('pegawai');
    }

    public function insert($data = [])
    {

        $result = $this->db->insert('pegawai', $data);
        return $result;       
    }

    public function get_divisi()
	{
    	$query = $this->db->get('divisi');
        return $query->result();
    }
    
    public function show($NIK)
    {
        $this->db->where('NIK', $NIK);
        $query = $this->db->get('pegawai');
        return $query->row();
    }   

    public function nama_divisi()
    {
        $query = $this->db->get('divisi');
        return $query->result();
    }

    public function update($NIK, $data=[])
    {
        $this->db->where('NIK', $NIK);
        $this->db->update('pegawai', $data);
        //$query = $this->db->update('pegawai');
        return result;
    }

    public function delete($NIK)
    {
        $this->db->where('NIK', $NIK);
        $query = $this->db->delete('pegawai');
        return $query;
    }

}
