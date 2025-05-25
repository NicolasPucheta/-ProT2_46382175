<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_view');
        echo view('front/navbar');
        echo view('principal');
        echo view('front/footer_view');
    }
}
