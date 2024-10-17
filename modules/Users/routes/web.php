<?php

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UserController;

//Route::middleware(['auth', 'can:admin'])->group(function () {
Route::middleware('auth')->group(function () {
    Route::resource('users', UserController::class);
})->middleware('role:admin');;

