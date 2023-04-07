<?php

namespace App\Controllers;

class jurnal extends BaseController
{
    public function jurnal()
    {
        return view('jurnal_page');
    }
    public function d_jurnal()
    {
        return view('detail_jurnal');
    }
}