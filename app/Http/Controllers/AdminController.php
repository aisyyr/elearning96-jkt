<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admhomesite');
    }

    public function pengguna1()
    {
        return view('admin.admpengguna');
    }

    public function pengguna2()
    {
        return view('admin.admpengguna2');
    }

    public function kodereg()
    {
        return view('admin.admkodereg');
    }

    public function kelas7()
    {
        return view('admin.admpelajaran7');
    }

    public function kelas8()
    {
        return view('admin.admpelajaran8');
    }

    public function kelas9()
    {
        return view('admin.admpelajaran9');
    }
}
