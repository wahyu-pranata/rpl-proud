<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('openrecruitment');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/addproker', function () {
    return view('addproker');
})->name('Tambah Proker');

Route::get('/editproker', function () {
    return view('editproker');
})->name('Tambah Proker');

require __DIR__.'/auth.php';
