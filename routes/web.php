<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArimaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/device-monitoring', [UserController::class, 'deviceMonitoring'])->name('device-monitoring');
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
    Route::get('/data-monitoring', [ArimaController::class, 'index'])->name('data-monitoring');
    Route::get('/arima', [ArimaController::class, 'index'])->name('arima');
});

require __DIR__.'/auth.php';
