<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/mahasiswa', function () {
    return view('dashboard.mahasiswa');
});