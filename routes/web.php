<?php

use App\Http\Controllers\AngkaController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginControlller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/satu', [AngkaController::class, 'satu']);
Route::get('/dua', [AngkaController::class, 'dua']);
Route::get('/tiga', [AngkaController::class, 'tiga']);
Route::get('/perkenalkan/{nama}', [AngkaController::class, 'getNama']);

// Route::get('/login', [LoginControlller::class, 'coba'])->name('login');
// Route::post('/login', [LoginControlller::class, 'cobalogin']);
// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginControlller::class, 'index'])->name('login'); // u/ middleware
Route::post('/login', [LoginControlller::class, 'actionlogin']);
Route::get('/register', function () {
    return view('register');
});
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');;
Route::get('/form', [FormController::class, 'index']);
Route::post('/proses', [FormController::class, 'proses']);
Route::get('/logout', [LoginControlller::class, 'logout'])->name('logout');