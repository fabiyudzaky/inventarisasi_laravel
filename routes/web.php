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
Route::get('/menu-dir', 'HomeController@menu_dir')->name('dir');
Route::get('/menu-pindah-ruangan', 'HomeController@menu_pindah_ruangan')->name('pindah_ruangan');
Route::get('/tentang', 'HomeController@tentang')->name('tentang');

Route::resource('master-aset', 'MasterAsetController');

Route::resource('transaksi-inventarisasi', 'TransaksiInventarisasiController');
Route::resource('approval-transaksi-inventarisasi', 'ApprovalTransaksiInventarisasiController');
Route::get('/transaksi-inventarisasi/ruangan/{ruangan}', 'TransaksiInventarisasiController@ruangan')->name('transaksi-inventarisasi.ruangan');
Route::get('/transaksi-inventarisasi/ruangan/ubah/{ruangan}', 'TransaksiInventarisasiController@ubah_ruangan')->name('transaksi-inventarisasi.ubah-ruangan');
Route::post('/approval-transaksi-inventarisasi/ruangan/ajukan/{ruangan}', 'ApprovalTransaksiInventarisasiController@ajukan_ruangan')->name('approval-transaksi-inventarisasi.ajukan-ruangan');

Route::resource('transaksi-pindah-ruangan', 'TransaksiPindahRuanganController');
Route::resource('approval-transaksi-pindah-ruangan', 'ApprovalTransaksiPindahRuanganController');

Route::resource('master-gedung', 'MasterGedungController');
Route::resource('master-lantai', 'MasterLantaiController');
Route::resource('master-ruangant', 'MasterRuanganController');
Route::resource('master-kodisi', 'MasterKondisiController');
Route::resource('master-dokumen', 'MasterDokumenController');
Route::resource('master-jenis-inventarisasi', 'MasterJenisInventarisasiController');
Route::resource('master-user', 'MasterUserController');