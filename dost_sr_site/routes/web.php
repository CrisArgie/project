<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show']);
Route::get('admin/dashboard', [AdminController::class, 'show']);


// LOGIN PAGE 
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');

// REGISTRATION PAGE
// Route::get('/register', [RegisterController::class, 'show']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// LOGOUT
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');


