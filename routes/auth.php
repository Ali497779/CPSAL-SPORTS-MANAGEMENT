<?php

use App\Http\Controllers\Auth\AuthenticateController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->as('auth.')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('login', [AuthenticateController::class, 'login'])->name('login');
        Route::post('login', [AuthenticateController::class, 'check'])->name('check');
        Route::get('register', [AuthenticateController::class, 'register'])->name('register');
        Route::post('register', [AuthenticateController::class, 'signup'])->name('signup');
    });
    Route::middleware(['auth', 'is_verified'])->group(function () {
        Route::prefix('profile')->as('profile.')->group(function () {
            Route::get('show', [AuthenticateController::class, 'profileShow'])->name('show');
            Route::get('edit', [AuthenticateController::class, 'profileEdit'])->name('edit');
            Route::put('update', [AuthenticateController::class, 'profileUpdate'])->name('update');
        });
        Route::post('logout', [AuthenticateController::class, 'logout'])->name('logout');
    });
});
