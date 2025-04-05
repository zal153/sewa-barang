<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\LoginController;

Route::get('/login', [LoginController::class, 'loginUser'])->name('login');
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
