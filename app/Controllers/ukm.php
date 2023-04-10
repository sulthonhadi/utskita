<?php

namespace App\Controllers;

class Ukm extends BaseController
{
    public function index()
    {
        return view('p_ukm/ukm_base');
    }
    public function bem()
    {
        return view('p_ukm/bem');
    }
}
