<?php

namespace App\Controllers;

class Layanan_app extends BaseController
{
    public function jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal_page');
    }
    public function dinamika_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_dinamika');
    }
    public function eduscope_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_eduscope');
    }
}
