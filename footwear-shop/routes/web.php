<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;
use App\Http\Controllers\UserController;

Route::get('/', [ShoeController::class, 'index']);

Route::get('/register',[UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store'])->middleware('guest');

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');

Route::get('/shoes/create',[ShoeController::class, 'create'])->middleware('auth');

Route::post('/shoes',[ShoeController::class, 'store'])->middleware('auth');

Route::get('/shoes/{shoe}', [ShoeController::class, 'show']);

Route::delete('/shoes/{shoe}', [ShoeController::class, 'delete'])->middleware('auth');

Route::post('/favorites',[UserController::class, 'like']);
