<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MortalController;
use App\Http\Controllers\PotongController;
use App\Http\Controllers\TernakController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PopulasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelahiranController;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('ternak', TernakController::class);
Route::resource('mortal', MortalController::class);
Route::resource('potong', PotongController::class);
Route::resource('suplier', SuplierController::class);
Route::resource('kelahiran', KelahiranController::class);
Route::resource('populasi', PopulasiController::class);
Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index'); // Route laporan diperbaiki
Route::post('/laporan/generate', [LaporanController::class, 'generate'])->name('laporan.generate');
