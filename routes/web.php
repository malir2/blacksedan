<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/our-fleet', [IndexController::class, 'ourFleet']);
Route::get('/about-us', [IndexController::class, 'aboutUs']);