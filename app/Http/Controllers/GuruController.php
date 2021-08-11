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
        
        $file_mtguru = File_MTGuru::latest()->get();
        return view('guru.gvclass1', compact('file_mtguru'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
        // return view('guru.gvclass1', ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function storevclass(Request $request)
    {
        $nm2 = $request->file_docm;
        $namaFile2 = $nm2->getClientOriginalName();

        $file_mtguru = new File_MTGuru;
        $file_mtguru->file_guru = $request->file_guru;
        $file_mtguru->keterangan = $request->keterangan;
        $file_mtguru->tanggal_unggah = $request->tanggal_unggah;
        $file_mtguru->nama_guru = $request->nama_guru;
        $file_mtguru->jenis = $request->jenis;
        $file_mtguru->kelass = $request->kelass;
        $file_mtguru->pelajaran = $request->pelajaran;
        $file_mtguru->file_docm = $namaFile2;

        $nm2->move(public_path().'/file_mtguru', $namaFile2);
        $file_mtguru->save();

        return redirect('/virtualclassroom1')->with('success', 'File Materi / Tugas berhasil diunggah!');

        // $request->validate([
        //     'file_guru' => 'required|unique:file_mtguru',
        //     'keterangan' => 'required',
        //     'jenis' => 'required',
        //     'pelajaran' => 'required',
        //     'nama_guru' => 'required',
        //     'kelass' => 'required',
        //     'tanggal_unggah' => 'required'
        // ]);

        // $query = DB::table('file_mtguru')->insert([
        //     "file_guru" => $request["file_guru"],
        //     "keterangan" => $request["keterangan"],
        //     "jenis" => $request["jenis"],
        //     "pelajaran" => $request["pelajaran"],
        //     "nama_guru" => $request["nama_guru"],
        //     "kelass" => $request["kelass"],
        //     "tanggal_unggah" => $request["tanggal_unggah"]
        // ]);

    }

    public function editvcguru($id)
    {
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $file_mtguru = DB::table('file_mtguru')->where('id', $id)->first();
        return view('guru.gvclass-edit', compact('file_mtguru'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    public function updatevguru($id, Request $request)
    {
        $request->validate([
            'file_guru' => 'required',
            'keterangan' => 'required',
            'nama_guru' => 'required',
            'kelass' => 'required',
            'pelajaran' => 'required',
            'jenis' => 'required'
        ]);

        $query = DB::table('file_mtguru')
                    ->where('id', $id)
                    ->update([
                        "file_guru" => $request["file_guru"],
                        "keterangan" => $request["keterangan"],
                        "jenis" => $request["jenis"],
                        "pelajaran" => $request["pelajaran"],
                        "nama_guru" => $request["nama_guru"],
                        "kelass" => $request["kelass"],
                        "tanggal_unggah" => $request["tanggal_unggah"]
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
        $kelas = \App\Kelas::all();

        // $pelajaran = DB::table('pelajaran')->get();
        return view('guru.gvclass2', ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
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
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $file_tsiswa = DB::table('file_tsiswa')->where('id', $id)->first();
        return view('guru.gnilai2', compact('file_tsiswa'), ['pelajaran' => $pelajaran , 'kelas' => $kelas]);
    }

    //storenilai
    public function storenilai($id, Request $request)
    {
        $request->validate([
            'nilaitugas' => 'required',
            'komentar' => 'required'
        ]);

        $query = DB::table('file_tsiswa')
                    ->where('id', $id)
                    ->update([
                        // "file_tugas" => $request["file_tugas"],
                        // "keterangan" => $request["keterangan"],
                        // "tanggal_unggah" => $request["tanggal_unggah"],
                        // "pelajaran" => $request["pelajaran"],
                        // "kelass" => $request["kelass"],
                        "nilaitugas" => $request["nilaitugas"],
                        "komentar" => $request["komentar"]
                    ]);

        return redirect('/nilaisiswa')->with('success', 'Berhasil Menambahkan Nilai Siswa!');
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
        $pelajaran = \App\Pelajaran::all();
        $kelas = \App\Kelas::all();

        $user = DB::table('users')->where('id', $id)->first();
        return view('guru.gpengaturan2', compact('user'), ['pelajaran' => $pelajaran, 'kelas' => $kelas]);
    }

    public function pengupdate($id, Request $request)
    {
        $request->validate([
            'email' => 'required',
            'kode_regist' => 'required',
            'matapelajaran' => 'required'
        ]);

        $query = DB::table('users')
                    ->where('id', $id)
                    ->update([
                        'email' => $request['email'],
                        'kode_regist' => $request['kode_regist'],
                        'matapelajaran' => $request['matapelajaran'],
                        'matapelajaran2' => $request['matapelajaran2'],
                        'matapelajaran3' => $request['matapelajaran3']
                    ]);

        return redirect('/pengaturan-guru')->with('success', 'Pengaturan berhasil disimpan !');
    }

    //searching pelajaran
    public function bahasaindonesia()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Bahasa Indonesia');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function pendidikanagama()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Pendidikan Agama');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function matematika()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Matematika');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function senibudaya()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Seni Budaya');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function ipa()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'IPA');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function pkn()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'PKN');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function bahasainggris()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Bahasa Inggris');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function ips()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'IPS');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function prakarya()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'Prakarya');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    public function pjok()
    {
        $file_mtguru = DB::table('file_mtguru')->get()->where('pelajaran', 'PJOK');
        return view('guru.gvclass1', compact('file_mtguru'));
    }

    //searching NILAI TUGAS
    public function bahasaindonesia2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Bahasa Indonesia');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function pendidikanagama2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Pendidikan Agama');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function matematika2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Matematika');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function senibudaya2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Seni Budaya');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function ipa2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'IPA');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function pkn2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'PKN');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function bahasainggris2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Bahasa Inggris');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function ips2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'IPS');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function prakarya2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'Prakarya');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }

    public function pjok2()
    {
        $file_tsiswa = DB::table('file_tsiswa')->get()->where('pelajaran', 'PJOK');
        return view('guru.gnilai1', compact('file_tsiswa'));
    }


}
