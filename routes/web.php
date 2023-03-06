<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\ArsipanController;
use App\Http\Controllers\AssetController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Login
    Route::get('/login',[LoginController::class,'login'])->name('login');
    // ->middleware('guest')
    Route::post('/login-proses',[LoginController::class,'loginProses'])->name('loginproses');
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');

    Route::get('/registrasi',[LoginController::class,'registeruser'])->name('registrasi');
    Route::post('/proses-registrasi',[LoginController::class,'registproses'])->name('registproses');
// End Login

// Kelola Admin
    Route::get('/beranda', [AdminController::class,'Beranda'])->name('beranda')->middleware('auth');
    // ->middleware('auth');
    Route::get('/kelola-karyawan', [AbsensiController::class, 'KelolaDataKaryawan'])->name('index.karyawan');
    Route::get('/data-absensi-karyawan', [AbsensiController::class, 'DataAbsensiKaryawan']);
    Route::get('/data-perizinan-karyawan', [AbsensiController::class, 'DataPerizinan']);
// End Kelola

// Role Karyawan
    Route::get('/beranda-user/{id}', [KaryawanController::class,'TampilanUser'])->name('beranda-user')->middleware('auth');
    Route::get('/account-user', [KaryawanController::class,'AkunUser'])->middleware('auth')->name('accountUser');
    Route::get('/form-perizinan-user', [KaryawanController::class,'FormPerizinan'])->middleware('auth');
    Route::get('/beranda-absensi-user/{id}', [KaryawanController::class,'BerandaAbsensiUser'])->name('absensi')->middleware('auth');
    Route::get('/logout', [KaryawanController::class,'Logout'])->name('logout');
    Route::post('/updateAccount',[KaryawanController::class,'updateAccount'])->name('updateAccount')->middleware('auth');
// End Role Karyawan

// CRUD
    Route::post('/kelola-karyawan',[AdminController::class,'store'])->name('add.karyawan');
    Route::get('/edit-karyawan',[AdminController::class,'edit'])->name('edit.karyawan');
    Route::put('/kelola-karyawans/{id}',[AdminController::class,'update'])->name('update.karyawan');
    Route::get('/kelola-karyawan/delete/{id}', [AdminController::class,'delete'])->name('delete.karyawan');
    Route::get('/kelola-karyawan/{id}', [AdminController::class,'show']);
// End CRUD

// Asset
    Route::get('/data-barang',[AssetController::class, 'KelolaDataBarang'])->name('index.barang');
    // CRUD
        Route::post('/data-barang',[AssetController::class,'TambahDataBarang'])->name('add.barang');
        Route::get('/edit-barang',[AssetController::class,'EditDataBarang'])->name('edit.barang');
        Route::put('/data-barang/{id}',[AssetController::class,'UpdateDataBarang'])->name('update.barang');
        Route::get('/data-barang/delete/{id}', [AssetController::class, 'DeleteDataBarang'])->name('delete.barang');
    // End CRUD
// End Asset

// Arsipan
    Route::get('/surat-masuk',[ArsipanController::class, 'DataSuratMasuk'])->name('index.surat-masuk');
    // CRUD
        Route::post('/surat-masuk',[ArsipanController::class,'TambahDataSuratMasuk'])->name('add.surat-masuk');
        Route::put('/surat-masuk/{id}', [ArsipanController::class,'UpdateSuratMasuk'])->name('update.surat');
        Route::get('/surat-masuk/delete/{id}', [ArsipanController::class, 'DeleteDataSuratMasuk'])->name('delete.surat-masuk');
    // End CRUD

    Route::get('/surat-keluar',[ArsipanController::class, 'DataSuratKeluar'])->name('index.surat-keluar');
    // CRUD
    Route::post('/surat-keluar',[ArsipanController::class,'TambahDataSuratKeluar'])->name('add.surat-keluar');
    Route::put('/surat-keluar/{id}', [ArsipanController::class,'UpdateSuratKeluar'])->name('update.surat-keluar');
    Route::get('/surat-keluar/delete/{id}', [ArsipanController::class, 'DeleteDataSuratKeluar'])->name('delete.surat-keluar');
    // End CRUD
// End Arsipan

//Debug
Route::post('/test',[KaryawanController::class,'test'])->name('test');

