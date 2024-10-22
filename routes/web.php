<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/posts', [PostController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);
