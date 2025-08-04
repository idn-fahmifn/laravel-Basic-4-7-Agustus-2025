<?php

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

Route::get('profile', function () {
    //menampilkan respon profile 
    return "ini adalah respon profile";
})->name('profile-respon');

// Route parameter yang wajib dideklarasikan
Route::get('mobil/{params}', function ($mobil) {
    return "Hallo, saya punya mobil mereknya : $mobil";
    // return 'saya punya mobil mereknya : ';
})->name('mobil');

// Route parameter yang optional
Route::get('motor/{params?}', function ($motor = null) {
    return "Hallo, saya punya mobil mereknya : $motor";
})->name('motor');
