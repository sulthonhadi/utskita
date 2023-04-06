<?php

namespace App\Controllers;

class C_dashboard extends BaseController
{
    public function index()
    {
        return view('dashboard_admin/template_dashboard');
    }
    public function p_afrizal()
    {
        return view('dashboard_admin/biodata');
    }
    
}
