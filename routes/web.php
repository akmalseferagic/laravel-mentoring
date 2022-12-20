<?php

use Illuminate\Support\Facades\Route;

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
    return view('layout.master');
});

Route::get('/dashboard', function(){
    return view('pages.dashboard');
});

Route::get('/presensi', function(){
    return view('pages.presensi');
});

Route::get('/presensi-kelompok', function(){
    return view('pages.presensiKelompok');
});

Route::get('/presensi-kegiatan', function(){
    return view('pages.presensiKegiatan');
});