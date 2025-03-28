<?php

use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public.index');
});

Route::get('/app-dashboard', [UsersController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('/reservation_requests', [PersonnelController::class, 'requests'])->middleware('auth')->name('requests');
Route::get('/decline_reservation/{id}', [PersonnelController::class, 'decline'])->middleware('auth')->name('decline');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/front.php';
