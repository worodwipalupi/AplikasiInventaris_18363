<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PetugasController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[DashboardController::class,'index']);

/* PETUGAS */
Route::get('/petugas',[PetugasController::class,'index']);
Route::get('/createpetugas',[PetugasController::class,'create']);
Route::post('/storepetugas',[PetugasController::class,'store']);
Route::get('/petugas{id}',[PetugasController::class,'destroy']);
Route::get('/petugas/editpetugas/{id}',[PetugasController::class,'edit']);
Route::post('/petugas/updatepetugas',[PetugasController::class,'update']);

/* ANGGOTA */
Route::get('/anggota',[AnggotaController::class,'index']);
Route::get('/createanggota',[AnggotaController::class,'create']);
Route::post('/storeanggota',[AnggotaController::class,'store']);
Route::get('/anggota{id}',[AnggotaController::class,'destroy']);
Route::get('/anggota/editanggota/{id}',[AnggotaController::class,'edit']);
Route::post('/anggota/updateanggota',[AnggotaController::class,'update']);

/* RUANG */
Route::get('/ruang',[RuangController::class,'index']);
Route::get('/createruang',[RuangController::class,'create']);
Route::post('/storeruang',[RuangController::class,'store']);
Route::get('/ruang{id}',[RuangController::class,'destroy']);
Route::get('/ruang/editruang/{id}',[RuangController::class,'edit']);
Route::post('/ruang/updateruang',[RuangController::class,'update']);

/* JENIS */
Route::get('/jenis',[JenisController::class,'index']);
Route::get('/createjenis',[JenisController::class,'create']);
Route::post('/storejenis',[JenisController ::class,'store']);
Route::get('/jenis{id}',[JenisController::class,'destroy']);
Route::get('/jenis/editjenis/{id}',[JenisController::class,'edit']);
Route::post('/jenis/updatejenis',[JenisController::class,'update']);

/* INVENTARIS */
Route::get('/inventaris',[InventarisController::class,'index']);
Route::get('/createinventaris',[InventarisController::class,'create']);
Route::post('/storeinventaris',[InventarisController ::class,'store']);
Route::get('/inventaris{id}',[InventarisController::class,'destroy']);
Route::get('/inventaris/editinventaris/{id}',[InventarisController::class,'edit']);
Route::post('/inventaris/updateinventaris/',[InventarisController::class,'update']);

/* PEMINJAMAN */
Route::get('/peminjaman',[PeminjamanController::class,'index']);
Route::get('/createpeminjaman',[PeminjamanController::class,'create']);
Route::post('/storepeminjaman',[PeminjamanController::class,'store']);
