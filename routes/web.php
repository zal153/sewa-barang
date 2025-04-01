<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminBarangController;
use App\Http\Controllers\Admin\AdminPeminjamanController;

// Routes untuk guest (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authentication'])->name('authentication');
});

// Routes untuk user yang sudah login (semua role)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Routes khusus untuk admin
    Route::middleware('role:admin')->prefix('admin')->group(function () {
        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Admin - Manajemen Barang
        Route::prefix('barang')->group(function () {
            Route::get('/', [AdminBarangController::class, 'index'])->name('admin.barang');
            Route::get('/tambah', [AdminBarangController::class, 'tambah'])->name('admin.tambah_barang');
            Route::post('/tambah', [AdminBarangController::class, 'tambah_barang'])->name('admin.tambah');
            Route::get('/edit/{id}', [AdminBarangController::class, 'edit'])->name('admin.edit_barang_form');
            Route::put('/edit/{id}', [AdminBarangController::class, 'update'])->name('admin.edit_barang');
            Route::delete('/hapus/{id}', [AdminBarangController::class, 'hapus'])->name('admin.hapus');
        });

        // Admin - Manajemen Peminjaman
        Route::prefix('peminjaman')->group(function () {
            Route::get('/', [AdminPeminjamanController::class, 'index'])->name('admin.peminjaman');
            Route::get('/detail/{id}', [AdminPeminjamanController::class, 'detail'])->name('admin.detail_peminjaman');
            Route::put('/status/{id}', [AdminPeminjamanController::class, 'updateStatus'])->name('admin.update_status');
        });
    });

    // Routes untuk mahasiswa/dosen (non-admin)
    Route::middleware('role:mahasiswa,dosen')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Lihat barang yang tersedia
        Route::get('/barang', [BarangController::class, 'index'])->name('barang');

        // Peminjaman barang
        Route::prefix('peminjaman')->group(function () {
            Route::get('/', [PeminjamanController::class, 'index'])->name('peminjaman');
            Route::get('/ajukan', [PeminjamanController::class, 'ajukan'])->name('ajukan_peminjaman');
            Route::post('/ajukan', [PeminjamanController::class, 'store'])->name('simpan_peminjaman');
            Route::get('/detail/{id}', [PeminjamanController::class, 'detail'])->name('detail_peminjaman');
        });
    });
});
