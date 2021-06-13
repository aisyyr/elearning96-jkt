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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





// Route::get('/loginadmin', 'AuthController@login');
// Route::post('/postlogin-admin', 'AuthController@postlogin1');
// Route::get('/DashboardAdmin', 'AdminController@index');



// Route::get('/RegistGuru', 'Regist1Controller@create');
// Route::get('/RegistSiswa', 'Regist2Controller@create');