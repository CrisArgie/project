<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'fnIndex']);
Route::get('/log-in', [MainController::class, 'fnLogin']);
Route::get('/registration', [MainController::class, 'fnRegistration']);

Route::get('/users', function () {
    return view('dashboard');
});