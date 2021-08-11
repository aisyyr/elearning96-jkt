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

Route::get('/homesite-upload', 'AdminController@upload');

Route::get('/homesite-admin/{id}/edit', 'AdminController@edit');
Route::put('/homesite-admin/{id}', 'AdminController@update');
Route::delete('/homesite-admin/{id}', 'AdminController@destroy');

Route::get('/pengguna-guru', 'AdminController@pengguna1');
Route::delete('/pengguna-guru/{name}', 'AdminController@destroyguru');

Route::get('/pengguna-siswa', 'AdminController@pengguna2');
Route::delete('/pengguna-siswa/{name}', 'AdminController@destroysiswa');

Route::get('/koderegistrasi', 'AdminController@kodereg');
Route::get('/koderegistrasi/{id}/edit', 'AdminController@edit2');
Route::put('/koderegistrasi/{id}', 'AdminController@update2');

Route::get('/pelajaran', 'AdminController@pelajaran');
Route::post('/pelajaran', 'AdminController@store2');

Route::get('/tambah-pelajaran', 'AdminController@upload2');

// Route::get('/tambah-pelajaran-pada-kelas', 'AdminController@upload3');
// Route::post('/pelajaran-7', 'AdminController@store3');

Route::get('/pelajaran-7', 'AdminController@kelas7');
Route::get('/pelajaran-8', 'AdminController@kelas8');
Route::get('/pelajaran-9', 'AdminController@kelas9');


//GURU
Route::get('/homesite-guru', 'GuruController@index');
Route::get('/homesite-info/{id}', 'GuruController@open');

Route::get('/virtualclassroom1', 'GuruController@vclass1');
Route::post('/virtualclassroom1', 'GuruController@storevclass');

Route::get('/virtual-classroom', 'GuruController@vclass2');

Route::get('/virtualclassroom1/{id}/edit', 'GuruController@editvcguru');
Route::put('/virtualclassroom1/{id}', 'GuruController@updatevguru');
Route::delete('/virtualclassroom1/{id}', 'GuruController@destroyvguru');

Route::get('/nilaisiswa', 'GuruController@nilai1');
Route::get('/nilaisiswa2/{id}/edit', 'GuruController@tugasopen');
Route::put('/nilaisiswa2/{id}', 'GuruController@storenilai');

Route::get('/nilai-siswa', 'GuruController@nilai2');

Route::get('/pengaturan-guru', 'GuruController@pengaturan');
Route::get('/pengaturan-guru/{id}/edit', 'GuruController@pengaturan2');
Route::put('/pengaturan-guru/{id}', 'GuruController@pengupdate');

//GURU PELAJARAN
Route::get('/bahasaindonesia', 'GuruController@bahasaindonesia');
Route::get('/pendidikanagama', 'GuruController@pendidikanagama');
Route::get('/matematika', 'GuruController@matematika');
Route::get('/senibudaya', 'GuruController@senibudaya');
Route::get('/ipa', 'GuruController@ipa');
Route::get('/pkn', 'GuruController@pkn');
Route::get('/bahasainggris', 'GuruController@bahasainggris');
Route::get('/ips', 'GuruController@ips');
Route::get('/prakarya', 'GuruController@prakarya');
Route::get('/pjok', 'GuruController@pjok');

//GURU NILAI
Route::get('/bahasaindonesia2', 'GuruController@bahasaindonesia2');
Route::get('/pendidikanagama2', 'GuruController@pendidikanagama2');
Route::get('/matematika2', 'GuruController@matematika2');
Route::get('/senibudaya2', 'GuruController@senibudaya2');
Route::get('/ipa2', 'GuruController@ipa2');
Route::get('/pkn2', 'GuruController@pkn2');
Route::get('/bahasainggris2', 'GuruController@bahasainggris2');
Route::get('/ips2', 'GuruController@ips2');
Route::get('/prakarya2', 'GuruController@prakarya2');
Route::get('/pjok2', 'GuruController@pjok2');



//SISWA
Route::get('/homesite-siswa', 'SiswaController@index');

Route::get('/vclass-materi', 'SiswaController@vclassmateri');
Route::get('/vclass-materi2/{id}', 'SiswaController@open');

Route::get('/vclasstugas-unggah', 'SiswaController@vclasstugas2');
Route::get('/vclass-tugas', 'SiswaController@vclasstugas');
Route::post('/vclass-tugas', 'SiswaController@storetugas');

Route::get('/vclass-tugas/{id}/edit', 'SiswaController@tugasedit');
Route::put('/vclass-tugas/{id}', 'SiswaController@tugasupdate');
Route::delete('/vclass-tugas/{id}', 'SiswaController@tugasdestroy');

Route::get('/pengaturan-siswa', 'SiswaController@pengaturan');
Route::get('/pengaturan-siswa/{id}/edit', 'SiswaController@pengaturan2');
Route::put('/pengaturan-siswa/{id}', 'SiswaController@pengupdate');

// Route::get('/virtualclassroom2', 'SiswaController@vclass');

//SISWA MATERI
Route::get('/bahasaindonesia1', 'SiswaController@bahasaindonesia');
Route::get('/pendidikanagama1', 'SiswaController@pendidikanagama');
Route::get('/matematika1', 'SiswaController@matematika');
Route::get('/senibudaya1', 'SiswaController@senibudaya');
Route::get('/ipa1', 'SiswaController@ipa');
Route::get('/pkn1', 'SiswaController@pkn');
Route::get('/bahasainggris1', 'SiswaController@bahasainggris');
Route::get('/ips1', 'SiswaController@ips');
Route::get('/prakarya1', 'SiswaController@prakarya');
Route::get('/pjok1', 'SiswaController@pjok');

//SISWA TUGAS
Route::get('/bahasaindonesia3', 'SiswaController@bahasaindonesia2');
Route::get('/pendidikanagama3', 'SiswaController@pendidikanagama2');
Route::get('/matematika3', 'SiswaController@matematika2');
Route::get('/senibudaya3', 'SiswaController@senibudaya2');
Route::get('/ipa3', 'SiswaController@ipa2');
Route::get('/pkn3', 'SiswaController@pkn2');
Route::get('/bahasainggris3', 'SiswaController@bahasainggris2');
Route::get('/ips3', 'SiswaController@ips2');
Route::get('/prakarya3', 'SiswaController@prakarya2');
Route::get('/pjok3', 'SiswaController@pjok2');





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