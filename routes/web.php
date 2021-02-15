<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}',[PostController::class,'show'])->name('posts.show');
Route::get('category/{category}',[PostController::class,'category'])->name('posts.category');
Route::get('tag/{tag}',[PostController::class,'tag'])->name('posts.tag');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('storage-link', function(){
    Artisan::call('storage:link');
});
