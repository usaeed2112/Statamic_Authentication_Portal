<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashbaordController;
use App\Http\Controllers\PublicController;

// Route::statamic('example', 'example-view', [
//    'title' => 'Example'
// ]);

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register.user');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.user');

Route::get('/public', [PublicController::class, 'index']);

Route::middleware(['auth:account'])->group(function () {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('dashboard', [DashbaordController::class, 'index'])->name('dashboard');
});
