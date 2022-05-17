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
use Illuminate\Support\Facades\Storage;

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
Route::patch('/requests/repair-request/{id}', [RepairRequestsController::class, 'update'])->middleware('auth');

Route::get('/request-for-repair', [RepairRequestsController::class, 'show'])->middleware('auth');
Route::post('/request-for-repair', [RepairRequestsController::class, 'create'])->middleware('auth');
Route::get('/request-ict-user', [ICTRequestsController::class, 'ictRequest'])->middleware('auth');

// REQUEST ICT
Route::get('/requests/repair-ict-request/{id}', [ICTRequestsController::class, 'index'])->middleware('auth');
Route::patch('/requests/repair-ict-request/{id}', [ICTRequestsController::class, 'update'])->middleware('auth');


Route::get('/request-for-ict-job/{id}', [ICTRequestsController::class, 'show'])->middleware('auth');
Route::post('/request-for-ict-job/create', [ICTRequestsController::class, 'create'])->middleware('auth');



// REQUESTS FOR ADMIN
Route::get('/requests/pre-inspection/{id}', [PreInspectionsController::class, 'show'])->middleware('admin');
Route::patch('/requests/pre-inspection/{id}/{rrId}', [PreInspectionsController::class, 'update'])->middleware('admin');

Route::get('/requests/need-post-inspection/{id}/{rrId}', [PostInspectionsController::class, 'create'])->middleware('admin');

Route::get('/requests/post-inspection/{id}', [PostInspectionsController::class, 'show'])->middleware('admin');

Route::get('/dashboard', [AdminController::class, 'show'])->middleware('admin');
Route::get('/requests', [RequestsController::class, 'show'])->middleware('admin');
Route::get('/abouts', [AboutsController::class, 'show'])->middleware('admin');
Route::get('/users', [UsersController::class, 'show'])->middleware('admin');












