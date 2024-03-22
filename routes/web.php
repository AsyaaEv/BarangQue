<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;


Route::get('/login', function(){
    return view('dashboard.login');
})->name('login');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function(){
    Route::get('/', function () {
        return view('dashboard.index');
    });
    
    Route::get('/barang', function () {
        return view('dashboard.index');
    });
    
});
