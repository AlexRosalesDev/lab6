<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;

Route::get('/cats', [CatController::class, 'index']);
Route::get('/cats/{id}', [CatController::class, 'show']);
Route::post('/cats', [CatController::class, 'store']);
Route::put('/cats/{id}', [CatController::class, 'update']);
Route::delete('/cats/{id}', [CatController::class, 'destroy']);

Route::get('/dogs', [DogController::class, 'index']);
Route::get('/dogs/{id}', [DogController::class, 'show']);
Route::post('/dogs', [DogController::class, 'store']);
Route::put('/dogs/{id}', [DogController::class, 'update']);
Route::delete('/dogs/{id}', [DogController::class, 'destroy']);