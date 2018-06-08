<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi_model extends CI_Model {
    public function list($limit, $start)
    {
         $query = $this->db->get('divisi', $limit, $start);
        return ($query->num_rows() > 0) ? $query->result() : false;
    }

    public function listDevisi()
    {
        $query = $this->db->get('divisi');
         return $query->result();
    }

    public function getTotal()
    {
        return $this->db->count_all('divisi');
    }

    public function insert($data = [])
    {
         $result = $this->db->insert('divisi', $data);
        return $result;
    }

    public function show($id_divisi)
    {
        $this->db->where('id_divisi', $id_divisi);
        $query = $this->db->get('divisi');
        return $query->row();
    }

    public function update($id_divisi, $data = [])
    { 
       $update = array(
           'nama' => $data['nama']
       );

       $this->db->where('id_divisi', $id_divisi);
       $this->db->update('divisi', $update);
    }

    public function delete($id_divisi)
    {
        $this->db->where('id_divisi', $id_divisi);
        $this->db->delete('divisi');
    }

}
    



/* End of file Divisi_model.php */
