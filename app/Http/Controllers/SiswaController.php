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
        $pelajaran = \App\Pelajaran::all();
        return view('siswa.svclass', ['pelajaran' => $pelajaran]);
    }

    public function vclassmateri()
    {
        $file_mtguru = DB::table('file_mtguru')->get();
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function open($id)
    {
        $file_mtguru = DB::table('file_mtguru')->where('id', $id)->first();
        return view('siswa.svclass-materi2', compact('file_mtguru'));
    }

    public function vclasstugas()
    {
        return view('siswa.svclass-tugas');
    }

    public function pengaturan()
    {
        return view('siswa.spengaturan');
    }

    public function pengaturan2($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('siswa.spengaturan2', compact('user'));
    }

    public function pengupdate($id, Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required'
        ]);

        $query = DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'email' => $request['email'],
                        'name' => $request['name']
                    ]);

        return redirect('/pengaturan-siswa')->with('success', 'Pengaturan berhasil disimpan !');
    }
}
