<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['konten']="jadwal/FTI";
		$this->load->view('jadwal/v_jadwal', $data);
	}

	public function IFB()
	{
		$data['konten']="jadwal/IF-B";
		$this->load->view('jadwal/v_jadwal', $data);
	}

	public function kedua()
	{
		$this->load->view('jadwal/FAI');
	}

	public function ketiga()
	{
		$this->load->view('jadwal/FP');
	}

	public function keempat()
	{
		$this->load->view('jadwal/FE');
	}

	public function kelima()
	{
		$this->load->view('jadwal/FIP');
	}
}
	