<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RepairRequestsController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show']);


Route::get('/admin/dashboard', [AdminController::class, 'show'])->middleware('admin');
Route::get('/admin/users', [UsersController::class, 'show'])->middleware('admin');
Route::get('/admin/requests', [RequestsController::class, 'show'])->middleware('admin');
Route::get('/admin/abouts', [AboutsController::class, 'show'])->middleware('admin');


// LOGIN PAGE
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');

// REGISTRATION PAGE
// Route::get('/register', [RegisterController::class, 'show']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// LOGOUT
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');


// REQUESTS
Route::get('/admin/requests/repair-request', [RepairRequestsController::class, 'show'])->middleware('admin');
