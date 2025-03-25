<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\AbsenController;

Route::get('/', [AbsenController::class, 'index'])->name('absen.index');
Route::post('/absen', [AbsenController::class, 'store'])->name('absen.store');
Route::get('/absen/{id}/edit', [AbsenController::class, 'edit'])->name('absen.edit');
Route::put('/absen/{id}', [AbsenController::class, 'update'])->name('absen.update');
Route::delete('/absen/{id}', [AbsenController::class, 'destroy'])->name('absen.destroy');
