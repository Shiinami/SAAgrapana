<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pricelist');
});

Route::get('/ten', function () {
    return view('tentangkami');
});

Route::get('/coba', function () {
    return view('kontraktor');
});