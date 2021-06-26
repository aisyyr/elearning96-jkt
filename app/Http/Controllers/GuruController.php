<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        return view('guru.ghomesite');
    }

    public function vclass1()
    {
        return view('guru.gvclass1');
    }

    public function vclass2()
    {
        return view('guru.gvclass2');
    }

    public function nilai1()
    {
        return view('guru.gnilai1');
    }

    public function nilai2()
    {
        return view('guru.gnilai2');
    }

    public function pengaturan()
    {
        return view('guru.gpengaturan');
    }
}
