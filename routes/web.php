<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/HalamanUtama', 'HomeeController@index');

Route::post('/register2', 'HomeController@regist2');



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


//ADMIN
Route::get('/homesite-admin', 'AdminController@index');
Route::get('/pengguna-guru', 'AdminController@pengguna1');
Route::get('/pengguna-siswa', 'AdminController@pengguna2');
Route::get('/koderegistrasi', 'AdminController@kodereg');
Route::get('/pelajaran-7', 'AdminController@kelas7');
Route::get('/pelajaran-8', 'AdminController@kelas8');
Route::get('/pelajaran-9', 'AdminController@kelas9');


//GURU
Route::get('/homesite-guru', 'GuruController@index');
Route::get('/virtualclassroom', 'GuruController@vclass1');
Route::get('/virtual-classroom', 'GuruController@vclass2');
Route::get('/nilaisiswa', 'GuruController@nilai1');
Route::get('/nilai-siswa', 'GuruController@nilai2');
Route::get('/pengaturan-guru', 'GuruController@pengaturan');

//SISWA
Route::get('/pengaturan-siswa', 'SiswaController@pengaturan');

// Route::get('/register2', function () {
//     //
// })->middleware(['auth', 'Role']);

// Route::get('/register2', function () {
//     //
// })->middleware('auth');

// //route midregist
// Route::post('/register2', 'HomeController@regist2')->name('register2');

// Route::get('/loginadmin', 'AuthController@login');
// Route::post('/postlogin-admin', 'AuthController@postlogin1');
// Route::get('/DashboardAdmin', 'AdminController@index');

// Route::get('/RegistGuru', 'Regist1Controller@create');
// Route::get('/RegistSiswa', 'Regist2Controller@create');