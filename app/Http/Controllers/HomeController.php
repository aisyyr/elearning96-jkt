<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\File_TSiswa;
use App\Pelajaran;
use App\Kelas;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $user = DB::table('users')->get();
        return view('dashboard1');
    }

    // public function sindex(Request $request)
    // {
    //     $pelajaran = \App\Pelajaran::all();
    //     $kelas = \App\Kelas::all();

    //     $pelajaran = DB::table('file_tsiswa')->select('pelajaran')->distinct()->get()->pluck('pelajaran')->sort();
    //     $kelass = DB::table('file_tsiswa')->select('kelass')->distinct()->get()->pluck('kelass')->sort();

    //     $file_tsiswa = File_TSiswa::query();

    //     if($request->filled('pelajaran')) {
    //         $file_tsiswa->where('pelajaran', $request->pelajaran);
    //     }
    //     if($request->filled('kelass')) {
    //         $file_tsiswa->where('kelass', $request->kelass);
    //     }

    //     return view('guru.gnilai1',[
    //         'pelajaran' => $pelajaran,
    //         'kelass' => $kelass,
    //         'file_tsiswa' => $file_tsiswa->get(),
    //     ]);
    // }

    // public function sstore(Request $request)
    // {
    //     return $request->all();
    //     return view('guru.gnilai1');
    // }

    // public function regist2()
    // {
    //     return view('midregister');
    // }

}
