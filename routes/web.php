<?php

use Illuminate\Support\Facades\Route;

// Role : Guru
Route::get('/', function () {return redirect()->route('guru.table');});

Route::prefix('guru')->as('guru.')->group(function () {
    Route::get('/', [App\Http\Controllers\GuruController::class, 'index'])->name('table');
    Route::get('/tambah', [App\Http\Controllers\GuruController::class, 'create'])->name('tambah');
    Route::post('/tambah', [App\Http\Controllers\GuruController::class, 'store'])->name('store');
    Route::get('/edit/{guru}', [App\Http\Controllers\GuruController::class, 'edit'])->name('edit');
    Route::put('/edit/{guru}', [App\Http\Controllers\GuruController::class, 'update'])->name('update');
    Route::delete('/delete/{guru}', [App\Http\Controllers\GuruController::class, 'destroy'])->name('delete');
});

Route::prefix('nilai')->as('nilai.')->group(function () {
    Route::get('/', [App\Http\Controllers\NilaiController::class, 'index'])->name('table');
    Route::get('/tambah', [App\Http\Controllers\NilaiController::class, 'create'])->name('tambah');
    Route::post('/tambah', [App\Http\Controllers\NilaiController::class, 'store'])->name('store');
    Route::get('/edit/{nilai}', [App\Http\Controllers\NilaiController::class, 'edit'])->name('edit');
    Route::put('/edit/{nilai}', [App\Http\Controllers\NilaiController::class, 'update'])->name('update');
    Route::delete('/delete/{nilai}', [App\Http\Controllers\NilaiController::class, 'destroy'])->name('delete');
});

Route::prefix('jadwal')->as('jadwal.')->group(function () {
    Route::get('/', [App\Http\Controllers\JadwalController::class, 'index'])->name('table');
    Route::get('/tambah', [App\Http\Controllers\JadwalController::class, 'create'])->name('tambah');
    Route::post('/tambah', [App\Http\Controllers\JadwalController::class, 'store'])->name('store');
    Route::get('/edit/{jadwal}', [App\Http\Controllers\JadwalController::class, 'edit'])->name('edit');
    Route::put('/edit/{jadwal}', [App\Http\Controllers\JadwalController::class, 'update'])->name('update');
    Route::delete('/delete/{jadwal}', [App\Http\Controllers\JadwalController::class, 'destroy'])->name('delete');
});


// Role : Siswa
Route::prefix('siswa')->as('siswa.')->group(function () {
    Route::get('/', [App\Http\Controllers\SiswaController::class, 'index'])->name('table');
    Route::get('/tambah', [App\Http\Controllers\SiswaController::class, 'create'])->name('tambah');
    Route::post('/tambah', [App\Http\Controllers\SiswaController::class, 'store'])->name('store');
    Route::get('/edit/{siswa}', [App\Http\Controllers\SiswaController::class, 'edit'])->name('edit');
    Route::put('/edit/{siswa}', [App\Http\Controllers\SiswaController::class, 'update'])->name('update');
    Route::delete('/delete/{siswa}', [App\Http\Controllers\SiswaController::class, 'destroy'])->name('delete');
});


    // Bagian : Izin
    Route::prefix('izin')->as('izin.')->group(function () {
        Route::get('/', [App\Http\Controllers\IzinController::class, 'index'])->name('table');
        Route::get('/tambah', [App\Http\Controllers\IzinController::class, 'create'])->name('tambah');
        Route::post('/tambah', [App\Http\Controllers\IzinController::class, 'store'])->name('store');
        Route::get('/edit/{izin}', [App\Http\Controllers\IzinController::class, 'edit'])->name('edit');
        Route::put('/edit/{izin}', [App\Http\Controllers\IzinController::class, 'update'])->name('update');
        Route::delete('/delete/{izin}', [App\Http\Controllers\IzinController::class, 'destroy'])->name('delete');
    });
