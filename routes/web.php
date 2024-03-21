<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;

Route::get('/login', function(){
     echo('a');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth'], 'as' => 'dashboard.'], function(){
    Route::get('dashboard/login', function(){
        return view('dashboard.login');
    });
    Route::get('/', function () {
        return view('dashboard.index');
    });
    
    Route::get('/dashboard/barang', function () {
        return view('dashboard.index');
    });
    
});
