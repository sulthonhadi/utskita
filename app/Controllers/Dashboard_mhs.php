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
}
