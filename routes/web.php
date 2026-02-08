<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;



// Halaman welcome / landing
Route::get('/', function () {
    return view('welcome');
});

// Dashboard (untuk semua user login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes profile (untuk semua user login)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes khusus ADMIN (resepsionis)
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('booking', BookingController::class);
    Route::resource('layanan', LayananController::class);
    Route::resource('transaksi', TransaksiController::class);
});

// Routes khusus OWNER
Route::middleware(['auth', 'role:owner'])->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan.index');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('booking', BookingController::class);
});


require __DIR__.'/auth.php';
