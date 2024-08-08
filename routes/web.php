<?php

use App\Http\Controllers\AsistenController;
use App\Http\Controllers\SoftwareController;
use App\Models\Asisten;
use App\Models\Software;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/softwares', [SoftwareController::class, 'index']);
Route::post('/softwares', [SoftwareController::class, 'store']);
Route::get('/asistens', [AsistenController::class, 'index']);
Route::post('/asistens', [AsistenController::class, 'store']);

Route::get('/instalations', function () {
    return view('tr_instalations');
});
