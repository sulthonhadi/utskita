<?php

namespace App\Controllers;

class Fasilitas extends BaseController
{
    public function index()
    {
        // return view('');
    }
    public function perpus()
    {
        return view('p_fasilitas/perpus');
    }
    public function fasilitas()
    {
        return view('p_fasilitas/fasilitas');
    }
}
