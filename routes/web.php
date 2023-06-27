<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (Auth::check()) {
        return view('blog/home', ['nama' => 'Ardi']);
    } else {
        return view('auth/login');
    }
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::post('/authenticate', 'App\Http\Controllers\AuthController@authenticate');

Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

Route::get('/buku', 'App\Http\Controllers\BukuController@index');

Route::get('/tambahbuku', 'App\Http\Controllers\BukuController@create');

Route::post('/insertbuku', 'App\Http\Controllers\BukuController@insert');

Route::post('/editbuku', 'App\Http\Controllers\BukuController@update');

Route::get('/home', function () {
    return view('blog/home');
});

Route::get('/kontak', function () {
    return view('blog/kontak');
});

Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');

Route::get('/tentang', function () {
    return view('blog/tentang');
});

Route::get('/buku/edit/{id}', 'App\Http\Controllers\BukuController@edit');
Route::get('/buku/delete/{id}','App\Http\Controllers\BukuController@delete');
