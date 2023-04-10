<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_mk extends CI_Controller {

	
	public function index()
	{	$this->load->model('Matkul');
		$data['kelas_a'] = $this->Matkul->get_jadwal_kelas('A');
		$data['kelas_b'] = $this->Matkul->get_jadwal_kelas('B');
		$this->load->view('matakul',$data);
	}
}