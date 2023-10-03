<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

//route untuk yang sudah login
Route::group(['middleware' => 'auth'], function () {
    Route::get('home', [HomeController::class, 'index']);
    Route::get('contact', [HomeController::class, 'contact']);
    Route::get('profil', [HomeController::class, 'profil']);
    Route::get('faq', [HomeController::class, 'faq']);
    Route::resource('pembelian', PembelianController::class);

    //route untuk admin
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('produk', ProdukController::class);
        Route::resource('pemasok', PemasokController::class);
    });

    //route untuk kasir
    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('pelanggan', PelangganController::class);
        Route::resource('barang', BarangController::class);
    });
});

//login
Route::get('/login', [UserController::class, 'index'])->name('login');
Route::post('/login/cek', [UserController::class, 'cekLogin'])->name('cekLogin');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//router laporan
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.data');
Route::get('/laporan', [LaporanController::class, 'refresh'])->name('laporan.refresh');
Route::get('/laporan/data/{awal}/{akhir}', [LaporanController::class, 'data'])->name('laporan.data');
Route::get('/laporan/pdf/{awal}/{akhir}', [LaporanController::class, 'export_pdf'])->name('laporan.export_pdf');
