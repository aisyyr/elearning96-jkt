<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pelajaran;
use App\Kelas;
use App\File_Informasi;
use App\File_MTGuru;
use App\File_TSiswa;


class GuruController extends Controller
{
    public function index()
    {
        $file_informasi = DB::table('file_informasi')->get();
        return view('guru.ghomesite', compact('file_informasi'));
    }

    public function open($id)
    {
        $file_informasi = DB::table('file_informasi')->where('id', $id)->first();
        return view('guru.ghomesite-info', compact('file_informasi'));
    }

    public function vclass1()
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();
        
        $file_mtguru = DB::table('file_mtguru')->get();
        return view('guru.gvclass1', compact('file_mtguru'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
        // return view('guru.gvclass1', ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function storevclass(Request $request)
    {
        $request->validate([
            'file_guru' => 'required|unique:file_mtguru',
            'keterangan' => 'required'
        ]);

        $query = DB::table('file_mtguru')->insert([
            "file_guru" => $request["file_guru"],
            "keterangan" => $request["keterangan"]
        ]);

        return redirect('/virtualclassroom1')->with('success', 'File Materi / Tugas berhasil diunggah!');
    }

    public function editvcguru($id)
    {
        $file_mtguru = DB::table('file_mtguru')->where('id', $id)->first();
        return view('guru.gvclass-edit', compact('file_mtguru'));
    }

    public function updatevguru($id, Request $request)
    {
        $request->validate([
            'file_guru' => 'required',
            'keterangan' => 'required'
        ]);

        $query = DB::table('file_mtguru')
                    ->where('id', $id)
                    ->update([
                        "file_guru" => $request["file_guru"],
                        "keterangan" => $request["keterangan"]
                    ]);

        return redirect('/virtualclassroom1')->with('success', 'File Materi / Tugas Berhasil di Ubah!');
    }

    public function destroyvguru($id)
    {
        $query = DB::table('file_mtguru')->where('id', $id)->delete();
        return redirect('/virtualclassroom1')->with('success', 'File Materi / Tugas Berhasil di Hapus!');
    }

    public function vclass2(Request $request)
    {
        //dd($request->all());
        $pelajaran = \App\Pelajaran::all();
        $pelajaran = DB::table('pelajaran')->get();
        $kelas = \App\Kelas::all();
        return view('guru.gvclass2', compact('pelajaran'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function nilai1()
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $file_tsiswa = DB::table('file_tsiswa')->get();
        return view('guru.gnilai1', compact('file_tsiswa'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function tugasopen($id)
    {
        $file_tsiswa = DB::table('file_tsiswa')->where('id', $id)->first();
        return view('guru.gnilai2', compact('file_tsiswa'));
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

    public function pengaturan2($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('guru.gpengaturan2', compact('user'));
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

        return redirect('/pengaturan-guru')->with('success', 'Pengaturan berhasil disimpan !');
    }
}
