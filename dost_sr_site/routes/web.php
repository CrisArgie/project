<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ICTRequestsController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostInspectionsController;
use App\Http\Controllers\PreInspectionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RepairRequestsController;
use App\Http\Controllers\RequestsController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show']);

// LOGIN PAGE
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');

// REGISTRATION PAGE
// Route::get('/register', [RegisterController::class, 'show']);
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// LOGOUT
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

// REQUESTS REPAIR
Route::get('/requests/repair-request/{id}', [RepairRequestsController::class, 'index'])->middleware('auth');
Route::get('/request-for-repair', [RepairRequestsController::class, 'show'])->middleware('auth');
Route::post('/request-for-repair', [RepairRequestsController::class, 'create'])->middleware('auth');
Route::patch('/requests/repair-request/{id}', [RepairRequestsController::class, 'update'])->middleware('auth');


// REQUEST ICT
Route::get('/requests/repair-ict-request', [ICTRequestsController::class, 'index'])->middleware('auth');
Route::get('/request-for-ict-job', [ICTRequestsController::class, 'show'])->middleware('auth');
Route::post('/request-for-ict-job', [ICTRequestsController::class, 'create'])->middleware('auth');



// REQUESTS FOR ADMIN
Route::get('/requests/pre-inspection', [PreInspectionsController::class, 'show'])->middleware('admin');
Route::get('/requests/post-inspection', [PostInspectionsController::class, 'show'])->middleware('admin');

Route::get('/dashboard', [AdminController::class, 'show'])->middleware('admin');
Route::get('/requests', [RequestsController::class, 'show'])->middleware('admin');
Route::get('/abouts', [AboutsController::class, 'show'])->middleware('admin');
Route::get('/users', [UsersController::class, 'show'])->middleware('admin');













