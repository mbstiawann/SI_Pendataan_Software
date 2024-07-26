<?php

use App\Models\Asisten;
use App\Models\Software;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/softwares', function () {
    $softwares = Software::latest();

    if (request('search')) {
        $softwares->where('name_software', 'like', '%' . request('search') . '%');
    }

    return view('mastersoftware', [
        'softwares' => $softwares->paginate(8)
    ]);
});

Route::get('/asistens', function () {
    $asistens = Asisten::latest();


    if (request('search')) {
        $asistens->where('name', 'like', '%' . request('search') . '%');
    }

    return view('masterasisten', [
        'asistens' => $asistens->paginate(8)
    ]);
});

Route::get('/instalations', function () {
    return view('tr_instalations');
});
