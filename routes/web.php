<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DivisiController;
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

Route::get('/salam', function () {
    return "Selamat Pagi";
});
Route::get('/ucapan', function () {
    return view('ucapan'); //ini adalah routing yang mengarahkan ke view yang ada didalam folder //resources/views
});
Route::get('/nilai', function () {
    return view('nilai');
}); //arahkan return nilai ke file nilai yang ada di view

Route::get('/daftar_nilai', function () {
    return view('daftar_nilai');
});

//Mengarahkan routing ke controller
Route::get('/siswa',[SiswaController::class, 'datasiswa']);

//mengarahkan ke controller dashboardController

//prefix atau grup
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('index'); 
Route::get('/staff', [StaffController::class, 'index']);

//root pegawai 
Route::get('/pegawai',[PegawaiController::class, 'index']);
Route::get('/pegawai/create',[PegawaiController::class, 'create']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);

// Root Divii
Route::get('/divisi',[DivisiController::class, 'index']);
Route::get('/divisi/create', [DivisiController::class, 'create']);
Route::post('/divisi/store', [DivisiController::class, 'store']);
});