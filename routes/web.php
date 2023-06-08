<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\JabatanController;
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
    Alert::success('Selamat Datang');
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
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::get('/pegawai/show/{id}', [PegawaiController::class, 'show']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'destroy']);
Route::get('generate-pdf', [PegawaiController::class, 'generatePDF']);
Route::get('/pegawai/pegawaiPDF', [PegawaiController::class, 'pegawaiPDF']);
Route::get('pegawai/exportexcel/', [PegawaiController::class, 'exportExcel']);
Route::post('/pegawai/importexcel', [PegawaiController::class, 'importExcel']);

// Route Divisi
Route::get('/divisi',[DivisiController::class, 'index']);
Route::get('/divisi/create', [DivisiController::class, 'create']);
Route::post('/divisi/store', [DivisiController::class, 'store']);
Route::get('/divisi/edit/{id}', [DivisiController::class, 'edit']);
Route::post('/divisi/update/', [DivisiController::class, 'update']);
Route::get('/divisi/show/{id}', [DivisiController::class, 'show']);
Route::get('/divisi/delete/{id}', [DivisiController::class, 'destroy']);


Route::get('/jabatan', [JabatanController::class, 'index']);
Route::get('/jabatan/create', [JabatanController::class, 'create']);
Route::post('/jabatan/store', [JabatanController::class, 'store']);
Route::post('/jabatan/update', [JabatanController::class, 'update']); 
Route::get('/jabatan/edit/{id}', [JabatanController::class, 'edit']);
});
