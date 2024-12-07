<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth:data_user']], function () {
    Route::get('/', function () {
        return view('admin');
    });

    Route::get('/supplier', [SupplierController::class, 'tampil'])->name('supplier.tampil');
    Route::get('/supplier/tambah', [SupplierController::class, 'tambah'])->name('supplier.tambah');
    Route::post('/supplier/submit', [SupplierController::class, 'submit'])->name('supplier.submit');
    Route::get('/supplier/edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
    Route::post('/supplier/update/{id}', [SupplierController::class, 'update'])->name('supplier.update');
    Route::post('/supplier/delete/{id}', [SupplierController::class, 'delete'])->name('supplier.delete');

   

    Route::get('/barang', [BarangController::class, 'index'])->name('barang.show'); // Menampilkan daftar barang
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create'); // Form tambah barang
    Route::post('/barang', [BarangController::class, 'store'])->name('barang.store'); // Menyimpan barang baru
    Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit'); // Form edit barang
    Route::put('/barang/{id}', [BarangController::class, 'update'])->name('barang.update'); // Memperbarui barang
    Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy'); // Menghapus barang


    });

