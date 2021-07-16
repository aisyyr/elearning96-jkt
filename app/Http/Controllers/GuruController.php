<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class GuruController extends Controller
{
    public function index()
    {
        $file_informasi = DB::table('file_informasi')->get();
        return view('guru.ghomesite', compact('file_informasi'));
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
        // $users = DB::table('users')->get();
        // return view('guru.gpengaturan', compact('users'));
    }
}
