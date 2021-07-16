<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/HalamanUtama', 'HomeeController@index');

Route::post('/register2', 'Register2Controller@index');



Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');


//ADMIN
Route::post('/homesite-admin', 'AdminController@store');
Route::get('/homesite-admin', 'AdminController@index');
Route::get('/homesite-admin/{id}/edit', 'AdminController@edit');
Route::put('/homesite-admin/{id}', 'AdminController@update');
Route::delete('/homesite-admin/{id}', 'AdminController@destroy');
Route::get('/homesite-upload', 'AdminController@upload');
Route::get('/pengguna-guru', 'AdminController@pengguna1');
Route::get('/pengguna-siswa', 'AdminController@pengguna2');
Route::get('/koderegistrasi', 'AdminController@kodereg');
Route::get('/koderegistrasi/{id}/edit', 'AdminController@edit2');
Route::put('/koderegistrasi/{id}', 'AdminController@update2');
Route::get('/pelajaran-7', 'AdminController@kelas7');
Route::get('/pelajaran-8', 'AdminController@kelas8');
Route::get('/pelajaran-9', 'AdminController@kelas9');


//GURU
Route::get('/homesite-guru', 'GuruController@index');
Route::get('/virtualclassroom1', 'GuruController@vclass1');
Route::get('/virtual-classroom', 'GuruController@vclass2');
Route::get('/nilaisiswa', 'GuruController@nilai1');
Route::get('/nilai-siswa', 'GuruController@nilai2');
Route::get('/pengaturan-guru', 'GuruController@pengaturan');


//SISWA
Route::get('/homesite-siswa', 'SiswaController@index');
Route::get('/virtualclassroom2', 'SiswaController@vclass');
Route::get('/vclass-materi', 'SiswaController@vclassmateri');
Route::get('/vclass-tugas', 'SiswaController@vclasstugas');
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