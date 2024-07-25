<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/softwares', function () {
    return view('mastersoftware');
});

Route::get('/asistens', function () {
    return view('masterasisten');
});

Route::get('/instalations', function () {
    return view('tr_instalations');
});
