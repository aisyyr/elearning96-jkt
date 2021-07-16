<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// use App\User;
// use App\File_Informasi;
// use App\Guru;
// use App\Kelas;
// use App\Kode_Registrasi;
// use App\Pelajaran;
// use App\Siswa;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'file_info' => 'required|unique:file_informasi',
            'keterangan' => 'required',
            'tanggal_unggah' => 'required'
        ]);

        $query = DB::table('file_informasi')->insert([
            "file_info" => $request["file_info"],
            "keterangan" => $request["keterangan"],
            "tanggal_unggah" => $request["tanggal_unggah"]
        ]);

        return redirect('/homesite-admin')->with('success', 'File Informasi berhasil diunggah!');

        // return view('admin.admhomesite');
    }

    public function index()
    {
        $file_informasi = DB::table('file_informasi')->get();
        return view('admin.admhomesite', compact('file_informasi'));
    }

    public function edit($id)
    {
        $file_informasi = DB::table('file_informasi')->where('id', $id)->first();
        return view('admin.adm-edit', compact('file_informasi'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'file_info' => 'required',
            'keterangan' => 'required',
            'tanggal_unggah' => 'required'
        ]);

        $query = DB::table('file_informasi')
                    ->where('id', $id)
                    ->update([
                        'file_info' => $request['file_info'],
                        'keterangan' => $request['keterangan'],
                        'tanggal_unggah' => $request['tanggal_unggah']
                    ]);

        return redirect('/homesite-admin')->with('success', 'File Informasi Berhasil di Ubah!');
    }

    public function destroy($id)
    {
        $query = DB::table('file_informasi')->where('id', $id)->delete();
        return redirect('/homesite-admin')->with('success', 'File Informasi Berhasil di Hapus!');
    }

    public function upload()
    {
        return view('admin.adm-upload');
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
        $kode_registrasi = DB::table('kode_registrasi')->get();
        return view('admin.admkodereg', compact('kode_registrasi'));
    }

    public function edit2($id)
    {
        $kode_registrasi = DB::table('kode_registrasi')->where('id', $id)->first();
        return view('admin.admkodereg-edit', compact('kode_registrasi'));
    }

    public function update2($hak_akses, Request $request)
    {
        $request->validate([
            'hak_akses' => 'required',
            'kode_regist' => 'required|max:10',
        ]);

        $query = DB::table('kode_registrasi')
                    ->where('hak_akses', $hak_akses)
                    ->update([
                        'hak_akses' => $request['hak_akses'],
                        'kode_regist' => $request['kode_regist']
                    ]);

        return redirect('/koderegistrasi')->with('success', 'Kode Registrasi Berhasil di Ubah!');
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
