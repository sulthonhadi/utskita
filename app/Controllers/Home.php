<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function perpus()
    {
        return view('pages/perpus');
    }
    public function jurnal()
    {
        return view('jurnal_page');
    }
    public function d_jurnal()
    {
        return view('detail_jurnal');
    }
    
}
