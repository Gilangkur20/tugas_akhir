<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\PenjualanApiController;

// Route default untuk auth
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Auth
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Penjualan API
Route::get('/penjualan', [PenjualanApiController::class, 'index'])->name('penjualan.index');
Route::post('/penjualan', [PenjualanApiController::class, 'store'])->name('penjualan.store');
Route::get('/penjualan/{id}', [PenjualanApiController::class, 'show'])->name('penjualan.show');
