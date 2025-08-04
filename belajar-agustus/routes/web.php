<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// mendefinisikan route
// method get => menampilkan sebuah data atau halamamn.

Route::get('profile-halaman', function () {
    //menampilkan halaman index di folder profile
    return view('profile.index');
})->name('halaman.profile');



// Route parameter yang wajib dideklarasikan
Route::get('mobil/{params}', function ($mobil) {
    return "Hallo, saya punya mobil mereknya : $mobil";
    // return 'saya punya mobil mereknya : ';
})->name('mobil');

// Route parameter yang optional
Route::get('motor/{params?}', function ($motor = null) {
    return "Hallo, saya punya mobil mereknya : $motor";
})->name('motor');


// membuat group pada routing
// digunakan ketika ada sebuah route yang memiliki kesamaan.
Route::prefix('training')->group(function () {

    // grup di dalam grup
    Route::prefix('programming')->group(function () {
        Route::get('laravel', function () {
            return "Ini adalah training laravel";
        });
        Route::get('profile', function () {
            //menampilkan respon profile 
            return "ini adalah respon profile";
        })->name('profile-respon');
    });

    // route item yang ada pada group prefix training 
    Route::get('mtcna', function () {
        return "Ini adalah training mtcna";
    });
    Route::get('ccna', function () {
        return "Ini adalah training ccna";
    });
});


// memanggil perintah yang ada di controller.
Route::get('barang', [BarangController::class, 'index'])
->name('barang');

Route::get('barang/create', [BarangController::class, 'create'])
->name('barang.create');

Route::get('myprofile', [BarangController::class, 'profile'])
->name('profile.saya');