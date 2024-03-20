<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::get('/dashboard/barang', function () {
    return view('dashboard.index');
});
