<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return redirect()->route('siswa.table');});

Route::prefix('siswa')->as('siswa.')->group(function () {
Route::get('/', [SiswaController::class, 'index'])->name('table');
Route::get('/tambah', [SiswaController::class, 'create'])->name('tambah');
Route::post('/tambah', [SiswaController::class, 'store'])->name('store');
Route::get('/edit/{siswa}', [SiswaController::class, 'edit'])->name('edit');
Route::put('/edit/{siswa}', [SiswaController::class, 'update'])->name('update');
Route::delete('/delete/{siswa}', [SiswaController::class, 'destroy'])->name('delete');
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
