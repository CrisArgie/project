<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show']);


Route::get('/users', function () {
    return view('dashboard');
});



// LOGIN PAGE
Route::get('/login', [LoginController::class, 'show']);

// REGISTRATION PAGE
// Route::get('/register', [RegisterController::class, 'show']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');


// LOGOUT
Route::post('/logout', [SessionsController::class, 'destroy']);

