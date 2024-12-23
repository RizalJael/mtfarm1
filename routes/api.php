<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\TernakController;
use App\Http\Controllers\API\SuplierController;
use App\Http\Controllers\API\KelahiranController;
use App\Http\Controllers\API\MortalController;
use App\Http\Controllers\API\PotongController;

// Route untuk ternak tanpa autentikasi
Route::apiResource('ternak', TernakController::class);
Route::apiResource('suplier', SuplierController::class);
Route::apiResource('kelahiran', KelahiranController::class);
Route::apiResource('mortal', MortalController::class);
Route::get('ternaks-for-mortal', [MortalController::class, 'getTernaks']);
Route::apiResource('potong', PotongController::class);
Route::get('ternaks-for-potong', [PotongController::class, 'getTernaks']);






// Route default user (bisa dihapus jika tidak diperlukan)
Route::get('/user', function (Request $request) {
    return $request->user();
});
