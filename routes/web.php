<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\EnsureUserType;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_mhs', [RegisteredUserController::class, 'index'])->middleware(['auth', 'verified', EnsureUserType::class.':organization'])->name('data_mhs');
Route::get('/data_mhs/search', [RegisteredUserController::class, 'search'])->middleware(['auth', 'verified', EnsureUserType::class.':organization'])->name('data_mhs.search');
Route::patch('/data_mhs/{id}/verify_student_proof', [RegisteredUserController::class, 'verifyStudentProof'])->middleware(['auth', 'verified', EnsureUserType::class.':organization'])->name('data_mhs.verify_student_proof');
Route::patch('/data_mhs/{id}/unverify_student_proof', [RegisteredUserController::class, 'unverifyStudentProof'])->middleware(['auth', 'verified', EnsureUserType::class.':organization'])->name('data_mhs.unverify_student_proof');

Route::get('/data_panitia', function () {
    return view('data_panitia');
})->middleware(['auth', 'verified'])->name('data.panitia');;

Route::get('/inbox', function () {
    return view('inbox');
})->middleware(['auth', 'verified'])->name('inbox');;

Route::get('/inbox_open', function () {
    return view('inbox_open');
})->middleware(['auth', 'verified'])->name('dashboard');;

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

require __DIR__ . '/auth.php';
