<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dash', [DashController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/perkenalkan/{nama}', [DashController::class, 'getNama']);
Route::get('/coba', function () {
    return view('coba');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/form', [FormController::class, 'index']);
Route::post('/proses', [FormController::class, 'proses']);