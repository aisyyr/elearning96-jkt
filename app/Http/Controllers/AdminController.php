<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\File_Informasi;
use App\Kelas;
use App\Kode_Registrasi;
use App\Pelajaran;

class AdminController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'file_info' => 'required|unique:file_informasi',
            'keterangan' => 'required',
            'tanggal_unggah' => 'required'
        ]);

        $query = DB::table('file_informasi')->insert([
            "file_info" => $request["file_info"],
            "keterangan" => $request["keterangan"],
            "tanggal_unggah" => $request["tanggal_unggah"],
            "informasi" => $request["informasi"],
            "file_doc" => $request["file_doc"] -> store("file_informasi")
        ]);

        return redirect('/homesite-admin')->with('success', 'File Informasi berhasil diunggah!');
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
                        'tanggal_unggah' => $request['tanggal_unggah'],
                        'informasi' => $request['informasi'],
                        'file_doc' => $request['file_doc'] -> store('file_informasi')
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
        $users = DB::table('users')->get()->where('roles', 'guru');
        return view('admin.admpengguna', compact('users'));
    }

    public function destroyguru($name)
    {
        $query = DB::table('users')->where('name', $name)->delete();
        return redirect('/pengguna-guru')->with('success', 'Akun Guru Berhasil di Hapus!');
    }

    public function pengguna2()
    {
        $users = DB::table('users')->get()->where('roles', 'siswa');
        return view('admin.admpengguna2', compact('users'));
    }

    public function destroysiswa($name)
    {
        $query = DB::table('users')->where('name', $name)->delete();
        return redirect('/pengguna-siswa')->with('success', 'Akun Siswa Berhasil di Hapus!');
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



    public function upload2()
    {
        return view('admin.admpelajaran-upload');
    }

    public function store2(Request $request)
    {
        $request->validate([
            'pelajaran_id' => 'required',
            'kelas_id' => 'required|unique:kelas'
        ]);

        $query = DB::table('kelas_pelajaran')->insert([
            "pelajaran_id" => $request["pelajaran_id"],
            "kelas_id" => $request["kelas_id"]
        ]);

        return redirect('/pelajaran-7')->with('success', 'Mata Pelajaran berhasil ditambahkan!');
    }

    public function kelas7()
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $kelas_pelajaran = DB::table('kelas_pelajaran')->where('kelas_id', '<=', 6)->get();
        return view('admin.admpelajaran7', compact('kelas_pelajaran'), ['nama_pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function kelas8()
    {
        $kelas_pelajaran = DB::table('kelas_pelajaran')->where('kelas_id', '>=', 7)->get();
        return view('admin.admpelajaran8', compact('kelas_pelajaran'));
    }

    public function kelas9()
    {
        $kelas_pelajaran = DB::table('kelas_pelajaran')->where('kelas_id', '>=', 13)->get();
        return view('admin.admpelajaran9', compact('kelas_pelajaran'));
    }
}
