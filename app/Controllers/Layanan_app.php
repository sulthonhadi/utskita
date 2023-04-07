<?php

namespace App\Controllers;

class Layanan_app extends BaseController
{
    public function jurnal()
    {
        return view('jurnal');
    }
    public function djurnal()
    {
        return view('detail_jurnal');
    }
}
