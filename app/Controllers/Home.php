<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function fakultas()
    {
        return view('pages/fakultas');
    }
    public function prodi()
    {
        return view('pages/maya/Daftarprodi');
    }
    public function nilai()
    {
        return view('mhs/index_nilai_bimo');
    }
    public function laporan_ta()
    {
        return view('pages/laporan_ta');
    }
    public function formpmb()
    {
        return view('form_pmb');
    }
    public function mahasiswaberprestasi()
    {
        return view('mahasiswaberprestasi');
    }
}
