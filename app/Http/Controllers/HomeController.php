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
        return view('dashboard1');
        // $user = DB::table('users')->get();
    }

    // public function index()
    // {
    //     $pelajaran = \App\Pelajaran::all();
    //     $kelas = \App\Kelas::all();
        
    //     return view('dashboard1', ['pelajaran' => $pelajaran, 'kelas' => $kelas]);
    //     // $user = DB::table('users')->get();
    // }

    // public function dash($id)
    // {
    //     $pelajaran = \App\Pelajaran::all();
        
    //     $users = DB::table('users')->get();
    //     return view('dashboard1', compact('users'), ['pelajaran' => $pelajaran]);
    // }

    // public function storedash($id, Request $request)
    // {
    //     $request->validate([
    //         'matapelajaran' => 'required'
    //     ]);

    //     $query = DB::table('users')
    //                 ->where('id', $id)
    //                 ->update([
    //                     "matapelajaran" => $request["matapelajaran"]
    //                 ]);

    //     return redirect('/dashboard')->with('success', 'Mata Pelajaran berhasil ditambahkan!');
    // }

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
