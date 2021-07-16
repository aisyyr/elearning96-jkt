<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{
    public function index()
    {
        $file_informasi = DB::table('file_informasi')->get();
        return view('siswa.shomesite', compact('file_informasi'));
    }

    public function vclass()
    {
        return view('siswa.svclass');
    }

    public function vclassmateri()
    {
        return view('siswa.svclass-materi');
    }

    public function vclasstugas()
    {
        return view('siswa.svclass-tugas');
    }

    public function pengaturan()
    {
        return view('siswa.spengaturan');
    }
}
