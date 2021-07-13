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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('master-aset', 'MasterAsetController');
Route::resource('transaksi-inventarisasi', 'TransaksiInventarisasiController');
Route::resource('approval-transaksi-inventarisasi', 'ApprovalTransaksiInventarisasiController');
Route::resource('transaksi-pindah-ruangan', 'TransaksiPindahRuanganController');
Route::resource('approval-transaksi-pindah-ruangan', 'ApprovalTransaksiPindahRuanganController');
Route::resource('master-gedung', 'MasterGedungController');
Route::resource('master-lantai', 'MasterLantaiController');
Route::resource('master-ruangant', 'MasterRuanganController');
Route::resource('master-kodisi', 'MasterKondisiController');
Route::resource('master-dokumen', 'MasterDokumenController');
Route::resource('master-jenis-inventarisasi', 'MasterJenisInventarisasiController');
Route::resource('master-user', 'MasterUserController');