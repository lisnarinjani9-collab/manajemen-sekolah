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
