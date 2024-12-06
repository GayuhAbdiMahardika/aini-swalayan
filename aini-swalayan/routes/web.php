<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PembelianController;

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
    Route::post('/savepembelian', [PembelianController::class, 'beli'])->name('savebeli');

});

