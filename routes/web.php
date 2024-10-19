<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginControlller;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginControlller::class, 'index'])->name('login');
Route::post('/login', [LoginControlller::class, 'actionlogin']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/store', [RegisterController::class, 'actionRegister']);


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);

    Route::get('/mahasiswa', [MahasiswaController::class, 'read'])->name('mahasiswa.read');
    Route::get('/form', [MahasiswaController::class, 'formCreate']);
    Route::post('/add', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'formEdit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
});

Route::get('location', [LocationController::class, 'index']);
Route::get('location/kabupaten/{id}', [LocationController::class, 'getKabupaten']);
Route::get('location/kecamatan/{id}', [LocationController::class, 'getKecamatan']);
Route::get('location/kelurahan/{id}', [LocationController::class, 'getKelurahan']);

Route::get('/logout', [LoginControlller::class, 'logout'])->name('logout');
Route::get('/logout', [LoginControlller::class, 'logout'])->name('logout');
