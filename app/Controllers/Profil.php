<?php

namespace App\Controllers;

class Profil extends BaseController
{


    public function visi_misi()
    {
        return view('profil/sulthonvisi-misi');
    }
    public function struktur()
    {
        return view('profil/struktur_organisasi');
    }
    public function pegawai()
    {
        return view('profil/index_pegawai_baihaqi');
    }
    public function data_dosen()
    {
        return view('profil/datadosen');
    }
    public function galeri()
    {
        return view('profil/wp');
    }
    public function s_kampus()
    {
        return view('struktur_kampus');
    }
    public function pr()
    {
        return view('profil/pr');
    }
    public function prak()
    {
        return view('profil/prak');
    }
}
