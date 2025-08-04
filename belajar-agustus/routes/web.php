<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// mendefinisikan route
// method get => menampilkan sebuah data atau halamamn.

Route::get('profile-halaman', function(){
    //menampilkan halaman index di folder profile
    return view('profile.index');
});

Route::get('profile', function(){
    //menampilkan respon profile 
    return "ini adalah respon profile";
});

