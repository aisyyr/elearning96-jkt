<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Pelajaran;
use App\Kelas;
use App\Kode_Registrasi;
use App\Guru;
use App\Siswa;

use Illuminate\Foundation\Auth\RegistersUsers;

class Register2Controller extends Controller
{

    // protected $redirectTo = RouteServiceProvider::HOME;


    public function index()
    {
        // $user = DB::table('users')->get();
        // $kode_registrasi = DB::table('kode_registrasi')->get();
        return view('midregister');
    }

    public function store(Request $request)
    {

        $request->validate([
            'penggunaid' => 'required|unique:users',
            'kode_regist' => 'required'
        ]);

        $query = DB::table('users')->insert([
            "penggunaid" => $request["penggunaid"],
            "kode_regist" => $request["kode_regist"]
        ]);

        // $query = DB::table('siswa')->insert([
        //     "nisn_siswa" => $request["nisn_siswa"]
        // ]);

        return redirect('/dashboard')->with('success', 'Akun E-Learning Berhasil dibuat !');
    }

    // public function create() {
    //     return view('midregister');
    // }

    // public function store(Request $request) {
    //     $request->validate([
    //         'nip_guru' => 'required | int | max:16',
    //         'nama_pelajaran' => 'required | string',

    //         'nisn_siswa' => 'required | int | max:10',
    //         'kelass' => 'required | string',

    //         'kode_regist' => 'required | string | max:10',
    //     ]);
        
    // $regist = new User;
    // $regist->nip_guru = $request["nip_guru"];
    // $regist->nisn_siswa = $request["nisn_siswa"];
    // $regist->save();

    // $kode = new Kode_Registrasi;
    // $kode->kode_regist = $request["kode_regist"];
    // $kode->save();

    // $mapel = new Pelajaran;
    // $mapel->nama_pelajaran = $request["nama_pelajaran"];
    // $mapel->save();

    // $kelas = new Kelas;
    // $kelas->kelass = $request["kelass"];
    // $kelas->save();

    // return redirect('/dashboard')->with('success', 'Akun berhasil dibuat');

    // }

    // public function index() {
    // //     $regist = DB::table('users')->get();
    // //     $kode = DB::table('Kode_Registrasi')->get();
    // //     $mapel = DB::table('Pelajaran')->get();
    // //     $kelas = DB::table('Kelas')->get();

    //     return view('dashboard1', compact('users'));
    // }

}
