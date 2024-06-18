<?php

<<<<<<< HEAD
use App\Http\Controllers\AngkaController;
use App\Http\Controllers\LocationController;
=======
>>>>>>> 4b63ae2609715bf69c75743af86f9d0c56ac2913
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginControlller;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

=======
>>>>>>> 4b63ae2609715bf69c75743af86f9d0c56ac2913
Route::get('/', [LoginControlller::class, 'index']);
Route::post('/login', [LoginControlller::class, 'actionlogin']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/store', [RegisterController::class, 'actionRegister']);

<<<<<<< HEAD

=======
>>>>>>> 4b63ae2609715bf69c75743af86f9d0c56ac2913
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [HomeController::class, 'index']);

    Route::get('/mahasiswa', [MahasiswaController::class, 'read'])->name('mahasiswa.read');
    Route::get('/form', [MahasiswaController::class, 'formCreate']);
    Route::post('/add', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::get('/mahasiswa/edit/{id}', [MahasiswaController::class, 'formEdit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/update', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::get('/mahasiswa/delete/{id}', [MahasiswaController::class, 'delete'])->name('mahasiswa.delete');
});

<<<<<<< HEAD
Route::get('location', [LocationController::class, 'index']);
Route::get('location/kabupaten/{id}', [LocationController::class, 'getKabupaten']);
Route::get('location/kecamatan/{id}', [LocationController::class, 'getKecamatan']);
Route::get('location/kelurahan/{id}', [LocationController::class, 'getKelurahan']);

Route::get('/logout', [LoginControlller::class, 'logout'])->name('logout');
=======
Route::get('/logout', [LoginControlller::class, 'logout'])->name('logout');
>>>>>>> 4b63ae2609715bf69c75743af86f9d0c56ac2913
