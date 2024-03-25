<?php

use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;


//user view
Route::get('/', function(){
    return view('view.index');
});
Route::group(['middleware' => ['auth', 'can:view_profile']], function(){
    Route::get('/profile', function () {
        return view('view.profile');
    });
});

//login register
Route::get('/login', function(){
    return view('dashboard.login');
})->name('login');

Route::get('/register', function(){
    return view('dashboard.register.register');
});


//admin view
Route::group(['middleware' => ['auth', 'can:view_dashboard']], function(){
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    });
    
    Route::get('/dashboard/barang', function () {
        return view('dashboard.index');
    });
    Route::get('/dashboard/master', function () {
        return view('dashboard.index');
    });
});
