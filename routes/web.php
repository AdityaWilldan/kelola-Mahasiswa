<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MahasiswaController;

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
Route::middleware(['auth'])->group(function(){
    Route::get('/Mahasiswa', [MahasiswaController::class, 'index']);
    Route::get('/Mahasiswa/create', [MahasiswaController::class, 'create']);
    Route::post('/Mahasiswa/store', [MahasiswaController::class, 'store']);
    Route::get('/Mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
    Route::put('/Mahasiswa/{id}', [MahasiswaController::class, 'update']);
    Route::delete('/Mahasiswa/{id}', [MahasiswaController::class, 'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
