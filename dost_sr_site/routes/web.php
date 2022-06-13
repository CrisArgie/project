<?php

use App\Http\Controllers\AboutsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DivisionsController;
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
Route::get('/profile/{id}', [MainController::class, 'index'])->middleware(['auth']);
Route::patch('/profile/update', [MainController::class, 'update'])->middleware(['auth']);
Route::delete('/profile/delete', [MainController::class, 'destroy'])->middleware(['auth']);

// LOGIN PAGE
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/sessions', [SessionsController::class, 'store'])->middleware('guest');

// REGISTRATION PAGE
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// LOGOUT
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');

// REQUESTS REPAIR
Route::get('/requests/repair-request/{id}', [RepairRequestsController::class, 'index'])->middleware(['auth', 'admin', 'tech']);
Route::patch('/requests/repair-request/{id}', [RepairRequestsController::class, 'update'])->middleware(['auth', 'admin', 'tech']);

// REQUEST ICT
Route::get('/requests/repair-ict-request/{id}', [ICTRequestsController::class, 'index'])->middleware(['auth', 'admin', 'tech']);
Route::patch('/requests/repair-ict-request/{id}', [ICTRequestsController::class, 'update'])->middleware(['auth', 'admin', 'tech']);
Route::get('/request-ict-user', [ICTRequestsController::class, 'ictRequest'])->middleware(['auth', 'admin', 'tech']);



// REQUESTS FOR ADMIN
Route::get('/requests/pre-inspection/{id}', [PreInspectionsController::class, 'show'])->middleware(['auth', 'admin', 'tech']);
Route::patch('/requests/pre-inspection/{id}/{rrId}', [PreInspectionsController::class, 'update'])->middleware(['auth', 'admin', 'tech']);
Route::get('/requests/need-post-inspection/{id}/{rrId}', [PostInspectionsController::class, 'create'])->middleware(['auth', 'admin', 'tech']);
Route::get('/requests/post-inspection/{id}', [PostInspectionsController::class, 'show'])->middleware(['auth', 'admin', 'tech']);
Route::patch('/requests/post-inspection/{id}', [PostInspectionsController::class, 'update'])->middleware(['auth', 'admin', 'tech']);
Route::delete('/requests/delete', [AdminController::class, 'destroy'])->middleware(['auth']);

Route::get('/requests/info/{name}/{id}', [RequestsController::class, 'viewInfo'])->middleware(['auth', 'admin', 'tech']);

// Route::get('/request/{name}/{id}', [RequestsController::class, 'edit'])->middleware('admin');

Route::get('/dashboard', [AdminController::class, 'show'])->middleware(['auth', 'admin', 'tech']);
Route::get('/requests', [RequestsController::class, 'show'])->middleware(['auth', 'admin', 'tech']);
Route::get('/users', [UsersController::class, 'show'])->middleware(['auth', 'admin', 'tech']);
Route::post('/users/create', [UsersController::class, 'create'])->middleware(['auth', 'admin', 'tech']);


// NEUTRAL AREA
Route::get('/request-for-repair', [RepairRequestsController::class, 'show'])->middleware('auth');
Route::post('/request-for-repair', [RepairRequestsController::class, 'create'])->middleware('auth');
Route::get('/request-for-ict-job/{id}', [ICTRequestsController::class, 'show'])->middleware('auth');
Route::post('/request-for-ict-job/create', [ICTRequestsController::class, 'create'])->middleware('auth');
Route::get('/abouts', [AboutsController::class, 'show'])->middleware('auth');



Route::get('/request/{name}/{action}/{no}', [RepairRequestsController::class, 'edit'])->middleware('auth');

// CUSTOMER
Route::get('/home', [CustomerController::class, 'index'])->middleware(['auth', 'customer']);
Route::patch('/home/{id}/update', [DivisionsController::class, 'update'])->middleware(['auth']);
Route::get('/customer/request', [RequestsController::class, 'index'])->middleware(['auth', 'customer']);
Route::get('/view/requests', [RequestsController::class, 'viewRequest'])->middleware(['auth', 'customer']);
Route::delete('/request/delete', [RequestsController::class, 'destroy'])->middleware('auth');
