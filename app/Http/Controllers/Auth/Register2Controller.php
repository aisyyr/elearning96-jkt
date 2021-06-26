<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Guru;
use App\Siswa;
use App\Pelajaran;
use App\Kelas;
use App\Kode_Registrasi;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Register2Controller extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nip_guru' => ['required', 'int', 'max:16'],
            'nama_pelajaran' => ['required', 'string'],

            'nisn_siswa' => ['required', 'int', 'max:10'],
            'kelass' => ['required', 'string'],

            'kode_regist' => ['required', 'string', 'max:10'],
        ]);
        // return Validator::make($data, [
        //     'nisn_siswa' => ['required', 'string', 'max:10'],
        //     'kode_regist' => ['required', 'string', 'max:10'],
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Guru::create([
            'nip_guru' => $data['nip_guru'],
            'kode_regist' => $data['kode_regist'],
            'nama_pelajaran' => $data['nama_pelajaran'],
        ]);
        return Siswa::create([
            'nisn_siswa' => $data['nisn_siswa'],
            'kelass' => $data['kelass'],
            'kode_regist' => $data['kode_regist'],
        ]);
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'nisn_siswa' => ['required', 'string', 'max:10'],
    //         'kode_regist' => ['required', 'string', 'max:10'],
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
    //  */
    // protected function create(array $data)
    // {
    //     return Siswa::create([
    //         'nisn_siswa' => $data['nisn_siswa'],
    //         'kode_regist' => $data['kode_regist'],
    //     ]);
    // }
}
