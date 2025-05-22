<?php

use Illuminate\Support\Facades\Route;

Route::get('/coba', function () {
    return view('kontraktor');
});
Route::get('/custom', function () {
    return view('custom');
});

Route::get('/detailHtoni', function () {
    return view('detailHtoni');
});
Route::get('/detailarirumarso', function () {
    return view('detailarirumarso');
});
Route::get('/detailyudi', function () {
    return view('detailyudi');
});