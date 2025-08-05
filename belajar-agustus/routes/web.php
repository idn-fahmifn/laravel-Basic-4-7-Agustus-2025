<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// mendefinisikan route
// method get => menampilkan sebuah data atau halamamn.

Route::get('halaman-profile', function () {
    //menampilkan halaman index di folder profile
    return view('profile.index');
})->middleware('nama_middlware')->name('halaman.profile');



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
->name('profile.saya')->middleware('auth');

// resource digunakan untuk fitur yang memiliki operasi crud
Route::resource('kategori', KategoriController::class);

// menampilkan function print yang ada pada controller resource
Route::get('kategori/cetak/action', [KategoriController::class, 'fahmi'])->name('cetak.kategori');