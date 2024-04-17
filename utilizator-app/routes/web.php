<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);

Route::get('/register', [UserController::class, 'create'])->middleware('auth');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login']) ->middleware('guest');

Route::post('users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

Route::delete('/delete/{user}', [UserController::class, 'delete'])->middleware('auth');