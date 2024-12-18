<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_mhs', function () {
    return view('data_mhs');
});

Route::get('/data_panitia', function () {
    return view('data_panitia');
});

Route::get('/inbox', function () {
    return view('inbox');
});

Route::get('/inbox_open', function () {
    return view('inbox_open');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/addproker', function () {
    return view('addproker');
})->name('Tambah Proker');

Route::get('/editproker', function () {
    return view('editproker');
})->name('Edit Proker');

Route::get('/openrecruitment', function () {
    return view('openrecruitment');
})->name('Tambah Rekrutmen');

Route::get('/editrecruitment', function () {
    return view('editrecruitment');
})->name('Edit Rekrutmen');

require __DIR__.'/auth.php';
