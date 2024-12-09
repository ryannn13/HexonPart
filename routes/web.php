<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard' );
});

Route::get('/tambah-data', function () {
    return view('tambah-data');
});

Route::get('/data-user', function () {
    return view('data-user');
});

Route::get('/data-order', function () {
    return view('data-order');
});

Route::get('/profile', function () {
    return view('profile');
});
