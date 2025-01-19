<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\EnsureUserType;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data_mhs', function () {
    return redirect()->to("/data_mhs/search?tab=terdaftar");
})->middleware(['auth', 'verified', EnsureUserType::class.':organization'])->name('data_mhs');

Route::get('/data_mhs/search', [RegisteredUserController::class, 'search'])->middleware(['auth', 'verified', EnsureUserType::class.':organization'])->name('data_mhs.search');

Route::patch('/data_mhs/{id}/verify_student_proof', [RegisteredUserController::class, 'verifyStudentProof'])
->middleware(['auth', 'verified', EnsureUserType::class.':organization'])
->name('data_mhs.verify_student_proof');

Route::patch('/data_mhs/{id}/reject_student_proof', [RegisteredUserController::class, 'rejectStudentProof'])
->middleware(['auth', 'verified', EnsureUserType::class.':organization'])
->name('data_mhs.reject_student_proof');

Route::get('/data_mhs/{id}/download_student_details', [RegisteredUserController::class, 'downloadStudentDetails'])
->middleware(['auth', 'verified', EnsureUserType::class.':organization'])
->name('data_mhs.download_student_details');

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
})->name('event.index');

Route::get('/editproker/{id}', [EventController::class, 'edit'])->name('event.edit');

Route::get('/openrecruitment', function () {
    return view('openrecruitment');
})->name('Tambah Rekrutmen');

Route::get('/editrecruitment', function () {
    return view('editrecruitment');
})->name('Edit Rekrutmen');

Route::get('/kepanitiaan', function () {
    return view('proker.index');
});

Route::post('/storeBroadcast', [MessageController::class, 'storeBroadCast'])
->middleware(['auth', 'verified', EnsureUserType::class.':organization'])
->name('message.storeBroadcast');

Route::post('/storeInvitation', [MessageController::class, 'storeInvitation'])
->middleware(['auth', 'verified'])
->name('message.storeInvitation');

Route::post('/storeEvent', [EventController::class, 'store'])
->middleware(['auth', 'verified', EnsureUserType::class.':organization'])
->name('event.storeEvent');

Route::patch('/updateEvent/{id}', [EventController::class, 'update'])
->middleware(['auth', 'verified', EnsureUserType::class.':organization'])
->name('event.updateEvent');

Route::get('/getEventLogo/{id}', [EventController::class, 'getLogo'])
->name('event.getLogo');

Route::get('/getEventJobdesc/{id}', [EventController::class, 'getJobdesc'])
->name('event.getJobdesc');

require __DIR__ . '/auth.php';
