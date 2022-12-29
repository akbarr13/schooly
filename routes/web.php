<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'register'])->middleware('guest');

Route::get('/students', [StudentController::class, 'index']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::post('/add-student', [DashboardController::class, 'store'])->middleware('auth');

Route::put('/students/{id}', [DashboardController::class, 'update'])->middleware('auth');

Route::get('/students/{id}', [DashboardController::class, 'show'])->middleware('auth');

Route::delete('/student-remove/{id}', [DashboardController::class, 'destroy'])->middleware('auth');




