<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function tentang()
    {
        return view('tentang');
    }
}