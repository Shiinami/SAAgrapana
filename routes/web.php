<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kontraktor');
})->name('home');

Route::get('/konstruksi', function () {
    return view('konstruksi');
})->name('konstruksi');
Route::get('/pricelist', function () {
    return view('pricelist');
})->name('pricelist');
Route::get('/tentang-kami', function () {
    return view('tentangkami');
})->name('tentang-kami');