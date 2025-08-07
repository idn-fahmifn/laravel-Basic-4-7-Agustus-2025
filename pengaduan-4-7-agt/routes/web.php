<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// admin
Route::prefix('admin')->middleware(['auth', 'verified', 'role'])->group(function(){
    Route::get('dashboard', [DashboardController::class, 'admin'])->name('dashboard');
});

// user
Route::prefix('user')->middleware(['auth', 'verified'])->group(function(){
    Route::get('dashboard', [DashboardController::class, 'user'])->name('dashboard.user');

    // create pengaduan
    Route::get('buat-pengaduan', [PengaduanController::class, 'create'])
    ->name('create.pengaduan');

    Route::post('pengaduan', [PengaduanController::class, 'store'])
    ->name('store.pengaduan');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
