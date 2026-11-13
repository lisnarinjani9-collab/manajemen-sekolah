<?php

use App\Http\Controllers\AuthController as LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\CekGuru;
use App\Http\Middleware\CekSiswa;
use Illuminate\Support\Facades\Route;

// Head HTTP
Route::get('/', function(){
    return redirect()->route('login');
});

// Login Page
Route::prefix('login')->group(function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'authenticate'])->name('authenticate');
});

// Role : Guru
Route::middleware([CekGuru::class])->group(function () {

Route::prefix('guru')->as('guru.')->group(function () {
    Route::get('/', [GuruController::class, 'index'])->name('table');
    Route::get('/tambah', [GuruController::class, 'create'])->name('tambah');
    Route::post('/tambah', [GuruController::class, 'store'])->name('store');
    Route::get('/edit/{guru}', [GuruController::class, 'edit'])->name('edit');
    Route::put('/edit/{guru}', [GuruController::class, 'update'])->name('update');
    Route::delete('/delete/{guru}', [GuruController::class, 'destroy'])->name('delete');
});

Route::prefix('nilai')->as('nilai.')->group(function () {
    Route::get('/', [NilaiController::class, 'index'])->name('table');
    Route::get('/tambah', [NilaiController::class, 'create'])->name('tambah');
    Route::post('/tambah', [NilaiController::class, 'store'])->name('store');
    Route::get('/edit/{nilai}', [NilaiController::class, 'edit'])->name('edit');
    Route::put('/edit/{nilai}', [NilaiController::class, 'update'])->name('update');
    Route::delete('/delete/{nilai}', [NilaiController::class, 'destroy'])->name('delete');
});

Route::prefix('jadwal')->as('jadwal.')->group(function () {
    Route::get('/', [JadwalController::class, 'index'])->name('table');
    Route::get('/tambah', [JadwalController::class, 'create'])->name('tambah');
    Route::post('/tambah', [JadwalController::class, 'store'])->name('store');
    Route::get('/edit/{jadwal}', [JadwalController::class, 'edit'])->name('edit');
    Route::put('/edit/{jadwal}', [JadwalController::class, 'update'])->name('update');
    Route::delete('/delete/{jadwal}', [JadwalController::class, 'destroy'])->name('delete');
});


});

// Role : Siswa
Route::middleware([CekSiswa::class])->group(function () {
Route::prefix('siswa')->as('siswa.')->group(function () {
    Route::get('/', [SiswaController::class, 'index'])->name('table');
    Route::get('/tambah', [SiswaController::class, 'create'])->name('tambah');
    Route::post('/tambah', [SiswaController::class, 'store'])->name('store');
    Route::get('/edit/{siswa}', [SiswaController::class, 'edit'])->name('edit');
    Route::put('/edit/{siswa}', [SiswaController::class, 'update'])->name('update');
    Route::delete('/delete/{siswa}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('delete');
});


    // Bagian : Izin
    Route::prefix('izin')->as('izin.')->group(function () {
        Route::get('/', [IzinController::class, 'index'])->name('table');
        Route::get('/tambah', [IzinController::class, 'create'])->name('tambah');
        Route::post('/tambah', [IzinController::class, 'store'])->name('store');
        Route::get('/edit/{izin}', [IzinController::class, 'edit'])->name('edit');
        Route::put('/edit/{izin}', [IzinController::class, 'update'])->name('update');
        Route::delete('/delete/{izin}', [IzinController::class, 'destroy'])->name('delete');
    });

});
