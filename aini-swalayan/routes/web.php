<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\LaporanPembelianController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth:data_user']], function () {
    Route::get('/', function () {
        return view('dashboard');
    });

    Route::get('/supplier', [SupplierController::class, 'tampil'])->name('supplier.tampil');
    Route::get('/supplier/tambah', [SupplierController::class, 'tambah'])->name('supplier.tambah');
    Route::post('/supplier/submit', [SupplierController::class, 'submit'])->name('supplier.submit');
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::post('/supplier/update/{id}', [SupplierController::class, 'update'])->name('supplier.update');
    Route::post('/supplier/delete/{id}', [SupplierController::class, 'delete'])->name('supplier.delete');

    Route::get('/pembelian', [PembelianController::class, 'create'])->name('beli');
    Route::post('/add-to-session', [PembelianController::class, 'addToSession'])->name('add.to.session');
    Route::post('/remove-from-session', [PembelianController::class, 'removeFromSession'])->name('remove.from.session');
    Route::post('/editsession', [PembelianController::class, 'editSession'])->name('ubahcart');
    Route::get('/reset', [PembelianController::class, 'reset'])->name('reset');
    Route::get('/barang', [PembelianController::class, 'pilihproduk'])->name('produk');
    Route::post('/savepembelian', [PembelianController::class, 'beli'])->name('savebeli');

    Route::get('/laporan-pembelian', [LaporanPembelianController::class, 'index'])->name('laporan.pembelian');

});

