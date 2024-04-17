<?php

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//show all posts
Route::get('/', [PostController::class, 'index']);

//create
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

//store
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

//Manage Posts
Route::get('/posts/manage', [PostController::class, 'manage'])->middleware('auth');

//edit post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

//update
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');


//delete
Route::delete('/posts/{post}', [PostController::class, 'delete'])->middleware('auth');

//show single post
Route::get('/posts/{post}', [PostController::class, 'show']);

//show the register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
//create and store the user
Route::post('/users', [UserController::class, 'store']);

//log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

//show the login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::post('/favorites', UserController::class, 'like');
