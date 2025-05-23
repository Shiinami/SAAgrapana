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
Route::get('/review-bapak-ari',function(){
    return view('detailarirumarso');
})->name('ari');
Route::get('/review-haji-toni',function(){
    return view('detailHtoni');
})->name('toni');
Route::get('/review-bapak-yudi',function(){
    return view('detailyudi');
})->name('yudi');
