<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;  // Add the ArticleController
use App\Http\Controllers\StatisticsController;  // Add the StatisticsController
use App\Http\Controllers\GalleryController;  // Add the GalleryController
use App\Http\Controllers\MapController;  // Add the MapController
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


// Arahkan root URL ke daftar postingan
Route::get('/', [PostController::class, 'index'])->name('home');

// Rute untuk manajemen postingan
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

// Routes for Articles, Statistics, Gallery, and Map
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('/statistics', [StatisticsController::class, 'index'])->name('statistics');
Route::get('/gallery', [GalleryController::class, 'showGallery'])->name('gallery');
Route::get('/map', [MapController::class, 'index'])->name('map');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

