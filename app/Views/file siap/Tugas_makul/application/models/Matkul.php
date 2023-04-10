<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul extends CI_Model {
      
    public function get_jadwal_kelas($kelas)
    {
        $query = $this->db->get_where('mata_kuliah', array('kls' => $kelas));
        return $query->result();
    }
    
    }
    