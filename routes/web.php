<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;

Route::get('/',[CvController::class, 'index'])->name('cv');
Route::get('/portfolio', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('category/{category}',[PostController::class,'category'])->name('posts.category');
Route::get('tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');

