<?php

namespace App\Controllers;

class Dashboard_mhs extends BaseController
{
    public function index()
    {
        return view('pages/dashboard_mhs');
    }
    public function home_mhs()
    {
        return view('pages/pdashboard_mhs/home_mhs');
    }
    public function icon_list_mhs()
    {
        return view('pages/pdashboard_mhs/icon_list_mhs');
    }
}
