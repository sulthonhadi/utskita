<?php

namespace App\Controllers;

class C_alumni extends BaseController
{
    public function index()
    {
        return view('pages/Niam/Dataalumni');
    }
    public function f_alumni()
    {
        return view('pages/Niam/Formalumni');
    }
}
