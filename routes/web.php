<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/HalamanUtama', 'HomeeController@index');

Route::get('/register2', 'Register2Controller@index');
Route::post('/register2', 'Register2Controller@store')->name('register2');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/searched', 'HomeController@sindex');



//ADMIN
Route::post('/homesite-admin', 'AdminController@store');
Route::get('/homesite-admin', 'AdminController@index');

Route::get('/homesite-admin/{id}/edit', 'AdminController@edit');
Route::put('/homesite-admin/{id}', 'AdminController@update');

Route::delete('/homesite-admin/{id}', 'AdminController@destroy');
Route::get('/homesite-upload', 'AdminController@upload');

Route::get('/pengguna-guru', 'AdminController@pengguna1');
Route::delete('/pengguna-guru/{name}', 'AdminController@destroyguru');
Route::get('/pengguna-siswa', 'AdminController@pengguna2');
Route::delete('/pengguna-siswa/{name}', 'AdminController@destroysiswa');

Route::get('/koderegistrasi', 'AdminController@kodereg');
Route::get('/koderegistrasi/{id}/edit', 'AdminController@edit2');
Route::put('/koderegistrasi/{id}', 'AdminController@update2');

Route::get('/tambah-pelajaran', 'AdminController@upload2');
Route::post('/pelajaran-7', 'AdminController@store2');

Route::get('/pelajaran-7', 'AdminController@kelas7');

Route::get('/pelajaran-8', 'AdminController@kelas8');
Route::get('/pelajaran-9', 'AdminController@kelas9');


//GURU
Route::get('/homesite-guru', 'GuruController@index');
Route::get('/homesite-info/{id}', 'GuruController@open');

Route::get('/virtualclassroom1', 'GuruController@vclass1');
Route::post('/virtualclassroom1', 'GuruController@storevclass');
Route::get('/virtualclassroom1/{id}/edit', 'GuruController@editvcguru');
Route::put('/virtualclassroom1/{id}', 'GuruController@updatevguru');
Route::delete('/virtualclassroom1/{id}', 'GuruController@destroyvguru');
Route::get('/virtual-classroom', 'GuruController@vclass2');

Route::get('/nilaisiswa', 'GuruController@nilai1');
Route::get('/nilaisiswa2/{id}', 'GuruController@tugasopen');

Route::get('/nilai-siswa', 'GuruController@nilai2');

Route::get('/pengaturan-guru', 'GuruController@pengaturan');
Route::get('/pengaturan-guru/{id}/edit', 'GuruController@pengaturan2');
Route::put('/pengaturan-guru/{id}', 'GuruController@pengupdate');


//SISWA
Route::get('/homesite-siswa', 'SiswaController@index');
Route::get('/virtualclassroom2', 'SiswaController@vclass');

Route::get('/vclass-materi', 'SiswaController@vclassmateri');
Route::get('/vclass-materi2/{id}', 'SiswaController@open');

Route::get('/vclass-tugas', 'SiswaController@vclasstugas');
Route::post('/vclass-tugas', 'SiswaController@storetugas');
Route::get('/vclass-tugas/{id}/edit', 'SiswaController@tugasedit');
Route::put('/vclass-tugas/{id}', 'SiswaController@tugasupdate');
Route::delete('/vclass-tugas/{id}', 'SiswaController@tugasdestroy');
Route::get('/vclasstugas-unggah', 'SiswaController@vclasstugas2');

Route::get('/pengaturan-siswa', 'SiswaController@pengaturan');
Route::get('/pengaturan-siswa/{id}/edit', 'SiswaController@pengaturan2');
Route::put('/pengaturan-siswa/{id}', 'SiswaController@pengupdate');





Route::get('/download', function () {
    return view('myPDF');

    // $pdf = PDF::loadView('myPDF');
    // return $pdf->download('medikre.pdf');
});

Route::get('/download-pdf', function () {
    // return view('myPDF');

    $pdf = PDF::loadView('myPDF');
    return $pdf->download('medikre.pdf');
});
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