<?php

use App\Http\Controllers\PinjamController;
use App\Http\Middleware\Admin;
use Illuminate\Support\Facades\Route;


//user view
Route::get('/', function(){
    return view('view.index');
});
Route::get('/list-barang', function(){
    return view('view.list-barang');
});
Route::group(['middleware' => ['auth', 'can:view_profile']], function(){
    Route::get('/profile', function () {
        return view('view.profile.profile');
    });
    Route::get('/profile/barang', function () {
        return view('view.profile.barang');
    });
    Route::get('/barang/pinjam/{id}', [PinjamController::class, 'index']);
    Route::POST('/barang/pinjam/proses', [PinjamController::class, 'store']);
});

//login register
Route::get('/login', function(){
    return view('dashboard.login');
})->name('login');
Route::get('/forget-password', function(){
    return view('dashboard.forget-password');
});

Route::get('/barang/info/{id}', function($id){
    return view('view.barang.info', ['id' => $id]);
});

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
