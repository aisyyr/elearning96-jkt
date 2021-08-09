<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pelajaran;
use App\Kelas;
use App\File_TSiswa;

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
        $kelas = \App\Kelas::all();
        return view('siswa.svclass', ['pelajaran' => $pelajaran, 'kelas' => $kelas]);
    }

    public function vclassmateri()
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $file_mtguru = DB::table('file_mtguru')->get();
        return view('siswa.svclass-materi', compact('file_mtguru'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function open($id)
    {
        $file_mtguru = DB::table('file_mtguru')->where('id', $id)->first();
        return view('siswa.svclass-materi2', compact('file_mtguru'));
    }

    public function vclasstugas()
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $file_tsiswa = DB::table('file_tsiswa')->get();
        return view('siswa.svclass-tugas', compact('file_tsiswa'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function storetugas(Request $request)
    {
        $request->validate([
            'file_tugas' => 'required',
            'keterangan' => 'required',
            'tanggal_unggah' => 'required'
        ]);

        $query = DB::table('file_tsiswa')->insert([
            "file_tugas" => $request["file_tugas"],
            "keterangan" => $request["keterangan"],
            "tanggal_unggah" => $request["tanggal_unggah"],
            "pelajaran" => $request["pelajaran"],
            "kelass" => $request["kelass"]
        ]);

        return redirect('/vclass-tugas')->with('success', 'File Tugas berhasil diunggah!');
    }

    public function tugasedit($id)
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $file_tsiswa = DB::table('file_tsiswa')->where('id', $id)->first();
        return view('siswa.svclass-tugasedit', compact('file_tsiswa'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function tugasupdate($id, Request $request)
    {
        $request->validate([
            'file_tugas' => 'required',
            'keterangan' => 'required',
            'tanggal_unggah' => 'required'
        ]);

        $query = DB::table('file_tsiswa')
                    ->where('id', $id)
                    ->update([
                        "file_tugas" => $request["file_tugas"],
                        "keterangan" => $request["keterangan"],
                        "tanggal_unggah" => $request["tanggal_unggah"],
                        "pelajaran" => $request["pelajaran"],
                        "kelass" => $request["kelass"],
                        "nilaitugas" => $request["nilaitugas"],
                        "komentar" => $request["komentar"]
                    ]);

        return redirect('/vclass-tugas')->with('success', 'File Tugas Berhasil di Ubah!');
    }

    public function tugasdestroy($id)
    {
        $file_tsiswa = DB::table('file_tsiswa')->where('id', $id)->delete();
        return redirect('/vclass-tugas')->with('success', 'File Tugas Berhasil di Hapus!');
    }

    public function vclasstugas2(Request $request)
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        return view('siswa.svclass-tugas2', ['pelajaran' => $pelajaran, 'kelas' => $kelas]);
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
            'kode_regist' => 'required'
        ]);

        $query = DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'email' => $request['email'],
                        'kode_regist' => $request['kode_regist']
                    ]);

        return redirect('/pengaturan-siswa')->with('success', 'Pengaturan berhasil disimpan !');
    }


    //searching MATERI/TUGAS GURU
    public function bahasaindonesia()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Bahasa Indonesia');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function pendidikanagama()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Pendidikan Agama');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function matematika()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Matematika');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function senibudaya()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Seni Budaya');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function ipa()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Ilmu Pengetahuan Alam');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function pkn()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Pendidikan Kewarganegaraan');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function bahasainggris()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Bahasa Inggris');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function ips()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Ilmu Pengetahuan Sosial');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function prakarya()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Prakarya');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    public function pjok()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'PJOK');
        return view('siswa.svclass-materi', compact('file_mtguru'));
    }

    //searching TUGAS SISWA
    public function bahasaindonesia2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Bahasa Indonesia');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function pendidikanagama2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Pendidikan Agama');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function matematika2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Matematika');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function senibudaya2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Seni Budaya');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function ipa2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Ilmu Pengetahuan Alam');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function pkn2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Pendidikan Kewarganegaraan');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function bahasainggris2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Bahasa Inggris');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function ips2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Ilmu Pengetahuan Sosial');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function prakarya2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Prakarya');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }

    public function pjok2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'PJOK');
        return view('siswa.svclass-tugas', compact('file_tsiswa'));
    }
}
