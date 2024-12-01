<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
Route::get('/', action: [ArticleController::class,'index'])->name('articles.index');
Route::resource('articles',controller:ArticleController::class)->except('index');
