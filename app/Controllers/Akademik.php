<?php

namespace App\Controllers;

class Akademik extends BaseController
{
    public function kalender()
    {
        return view('akademik/kalender');
    }
    public function page1()
    {
        return view('akademik/page1');
    }
    public function page2()
    {
        return view('akademik/page2');
    }
}
