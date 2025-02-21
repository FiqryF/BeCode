<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\barangcontroller;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\RegistrasiController;

//  jika user belum login
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, 'dologin']);

});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('/superadmin', [SuperadminController::class, 'index']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/pegawai', [PegawaiController::class, 'index']);

});

Route::get('/barang', [barangcontroller::class, 'index']);
Route::get('modul/tambah', [barangcontroller::class, 'tambah']);
Route::post('/modul/simpan', [barangcontroller::class, 'simpan']);
Route::get('/modul/edit/{id}', [barangcontroller::class, 'edit']);
Route::put('/modul/update/{id}', [barangcontroller::class, 'update']);
Route::get('/modul/hapus/{id}', [barangcontroller::class, 'hapus']);
route::get('/', [PegawaiController::class,'home']);
route::get('/homelogin', [PegawaiController::class,'homelogin']);
route::get('/about', [PegawaiController::class,'about']);

Route::get('/register', [RegistrasiController::class, 'showRegisterForm']);
Route::post('/registeruser', [RegistrasiController::class, 'register'])->name('register');