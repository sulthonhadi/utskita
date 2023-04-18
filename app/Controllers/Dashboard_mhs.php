<?php

namespace App\Controllers;

class Dashboard_mhs extends BaseController
{
    public function index()
    {
        return view('admin/dashboard_mhs');
    }
    public function home_mhs()
    {
        return view('admin/pdashboard_mhs/home_mhs');
    }
    public function icon_list_mhs()
    {
        return view('admin/pdashboard_mhs/icon_list_mhs');
    }

    public function add_barang()
    {
        return view('admin/add_barang');
    }
    public function sell_barang()
    {
        return view('admin/sell_barang');
    }
    public function pembayaran_ukt()
    {
        return view('admin/pembayaran_ukt');
    }
    public function biodata()
    {
        return view('admin/biodata');
    }
    public function infopembayaran()
    {
        return view('admin/infopembayaranmahasiswa');
    }
    public function penilaianmhs_a()
    {
        return view('admin/penilaianmhs1/index');
    }
    public function penilaianmhs_b()
    {
        return view('admin/penilaianmhs1/bapak_angga');
    }
    public function penilaianmhs_c()
    {
        return view('admin/penilaianmhs1/bapak_agus_athok');
    }
    public function penilaianmhs_d()
    {
        return view('admin/penilaianmhs1/bapak_ponari');
    }
    public function penilaianmhs_e()
    {
        return view('admin/penilaianmhs1/bapak_sujono');
    }
    public function penilaianmhs_f()
    {
        return view('admin/penilaianmhs1/bapak_tholib');
    }
    public function penilaianmhs_g()
    {
        return view('admin/penilaianmhs1/ibu_faidah');
        
    }
    public function penilaianmhs_h()
    {
        return view('admin/penilaianmhs1/ibu_munawarah');
    }
}
