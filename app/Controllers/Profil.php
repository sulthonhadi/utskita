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
}
