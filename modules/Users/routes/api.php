<?php

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UserApiController;

//Route::middleware(['auth:sanctum', 'can:admin'])->group(function () {
//Route::group(['prefix' => 'api', 'middleware' => 'auth:sanctum'], function () {
Route::group(['prefix' => 'api'], function () {
    Route::get('/users', [UserApiController::class, 'index']);
    Route::post('/users', [UserApiController::class, 'store']);
    Route::get('/users/{user}', [UserApiController::class, 'show']);
    Route::put('/users/{user}', [UserApiController::class, 'update']);
    Route::delete('/users/{user}', [UserApiController::class, 'destroy']);
})->middleware('auth:sanctum');

