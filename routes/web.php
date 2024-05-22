<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PostController::class, 'home'])->name('home');

// All Posts
Route::get('/posts' , [PostController::class, 'index'])->name('posts.index');

// Creat Post
Route::get('/posts/create',[PostController::class, 'create'])->name('posts.create');
Route::post('/posts' ,[PostController::class, 'store'])->name('posts.store');

// Edit Post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Show Post
Route::get('/posts/{post}' ,[PostController::class, 'show'])->name('posts.show');

// Update Post
Route::put('/posts/{post}' , [PostController::class , 'update'])->name('posts.update');

// Delete Post
Route::delete('/posts/{post}' ,[PostController::class, 'destroy'])->name('posts.destroy');

// Testing
//Route::get('/tests/{test}' , [TestController::class , 'test'])->name('Test.test');
