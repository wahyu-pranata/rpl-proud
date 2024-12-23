<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
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

Route::resource('events', EventController::class);

Route::get('/event/candidates', function () {
    return view('events.candidates');
});

Route::get('/openrecruitment', function () {
    return view('openrecruitment');
})->name('Tambah Rekrutmen');

Route::get('/editrecruitment', function () {
    return view('editrecruitment');
})->name('Edit Rekrutmen');

require __DIR__ . '/auth.php';