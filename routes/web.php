<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articoli/crea', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articoli/salva', [ArticleController::class, 'store'])->name('articles.store');