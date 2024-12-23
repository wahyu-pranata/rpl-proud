<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/event/candidates', function () {
    return view('events.candidates');
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

Route::get('/editrecuitment', function () {
    return view('editrecruitment');
});

Route::get('/kepanitiaan', function () {
    return view('proker.index');
});

Route::get('/data_mhs', function () {
    return view('data_mhs');
});

require __DIR__ . '/auth.php';
