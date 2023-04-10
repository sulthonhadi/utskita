<?php

namespace App\Controllers;

class Layanan_app extends BaseController
{


    public function data_alumni()
    {
        return view('layanan_app/Dataalumni');
    }
    public function form_alumni()
    {
        return view('layanan_app/Formalumni');
    }


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
    public function saintekbu_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_saintekbu');
    }
    public function newton_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_newton');
    }
    public function aplications_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_aplications');
    }
    public function schoolar_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_schoolar');
    }
    public function income_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_income');
    }
    public function keagamaan_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_keagamaan');
    }
    public function ekonomi_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_ekonomi');
    }
    public function pertanian_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_pertanian');
    }
    public function pendidikan_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_pendidikan');
    }
    public function multidicipline_jurnal()
    {
        return view('layanan_app/zaki_jurnal/jurnal/detail_jurnal_multidicipline');
    }
}
