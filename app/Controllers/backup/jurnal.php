<?php

namespace App\Controllers;

class jurnal extends BaseController
{
    public function jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal_page');
    }
   
    public function dinamika()
    {
        
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_dinamika');
    }
}