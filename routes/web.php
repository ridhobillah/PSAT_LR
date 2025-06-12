<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing_page');
})->name('home');

Route::get('/tentang', function () {
    return view('tentang_pt');
})->name('tentang');

Route::get('/porto', function () {
    return view('porto_pt');
})->name('porto');

Route::get('/kontak', function () {
    return view('kontak_pt');
})->name('kontak');
