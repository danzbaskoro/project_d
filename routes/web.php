<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\soal\soalController;
use App\Http\Controllers\login\loginController;
use App\Http\Controllers\antrian\AntrianController;


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

Route::get('/', function() {
    return view('master/peserta');
});

 
Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'autentikasi']);

Route::get('/login2', [loginController::class, 'login2']);

Route::get('/tambahsoal', [soalController::class, 'index']);
Route::get('/soal', [soalController::class, 'soal'])->name('soal1');

Route::get('/soal2', [soalController::class, 'soal2'])->name('soal2');
Route::get('/soal3', [soalController::class, 'soal3'])->name('soal3');

Route::get('/soal2view', [soalController::class, 'soal2view']);

Route::get('/antrian', [AntrianController::class, 'index']);


