<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Auth system
Route::controller(AuthController::class)->group(function () {

    Route::get('/login', 'loginPage')->name('login')->middleware('guest');

    Route::post('/login', 'login')->middleware('guest');

    Route::post('/logout', 'logout')->middleware('auth');

    Route::get('/register', 'registerPage')->middleware('guest');

    Route::post('/register', 'register')->middleware('guest');

    Route::get('/reset-password', 'changePasswordPage')->middleware('auth');

    Route::post('/reset-password', 'changePassword')->middleware('auth');

});

Route::controller(DashboardController::class)->group(function () {

    Route::get('/dashboard', 'index')->middleware('auth');

    Route::post('/add-student', 'store')->middleware('auth');

    Route::put('/students/{id}', 'update')->middleware('auth');

    Route::get('/students/{id}', 'show')->middleware('auth');

    Route::delete('/student-remove/{id}', 'destroy')->middleware('auth');
});

Route::view('/settings', 'settings');

Route::get('/students', [StudentController::class, 'index']);

Route::get('/students/major/{major}', [StudentController::class, 'major']);

Route::post('/send-email', [EmailController::class, 'sendEmail'])->middleware('auth');

Route::put('/update-profile', [DashboardController::class, 'userSettings'])->middleware('auth');
