<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/', [AuthController::class, 'redirect'])->name('redirect');

Route::get('/signup',[AuthController::class, 'signup'])->name('signup')->middleware('alreadyLoggedIn');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('alreadyLoggedIn');

Route::get('/home', [AuthController::class, 'homePage'])->name('home')->middleware('isLoggedIn');

Route::get('/shifts', [AuthController::class, 'shifts'])->name('shifts')->middleware('isLoggedIn');

Route::get('/disponibilities', [AuthController::class, 'disponibilities'])->name('disponibilities')->middleware('isLoggedIn');

Route::get('/users', [AuthController::class, 'users'])->name('users')->middleware('isLoggedIn');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('signup-user',[AuthController::class, 'signupUser'])->name('signup-user');

Route::post('login-user',[AuthController::class, 'loginUser'])->name('login-user');
