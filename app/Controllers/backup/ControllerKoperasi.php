<?php

namespace App\Controllers;

class ControllerKoperasi extends BaseController
{
    public function index()
    {
        echo view('koperasi/layout/header');
        echo view('koperasi/pages/koperasi');
        echo view('koperasi/layout/footer');
    }
}
