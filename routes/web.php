<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    fn() => view('index')
);
Route::get('/privacy', fn() => view('privacy'));
Route::get('/terms', fn() => view('terms'));

Route::fallback(fn() => view('index'));
