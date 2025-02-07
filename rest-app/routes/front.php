<?php

use App\Http\Controllers\FrontMenuController;
use Illuminate\Support\Facades\Route;

Route::name('front.')->prefix('/')->group(function () {
    Route::get('/menu', [FrontMenuController::class, 'menu'])->name('menu');
});
