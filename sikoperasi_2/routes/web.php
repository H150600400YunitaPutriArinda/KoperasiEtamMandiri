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

/*
Route::resource('admin/anggota', 'Admin\\AnggotaController');
Route::resource('admin/anggota', 'Admin\\AnggotaController');
*/

Route::resource('admin/admins', 'AdminController');
Route::resource('admin/anggotas', 'AnggotaController');
Route::resource('admin/ketua_koperasis', 'KetuaKoperasiController');
Route::resource('admin/simpanans', 'SimpananController');
Route::resource('admin/pinjamans', 'PinjamanController');
Route::resource('admin/transaksis', 'TransaksiController');

Route::get('admin/beranda', function () {
    return view('admin/beranda');
});
Route::get('/profil', 'ProfilController@tampil');
Route::get('/masteradmin', 'ProfilController@tampil');