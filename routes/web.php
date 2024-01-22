<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// LINK
Route::get('/', [LinkController::class, 'index']);
Route::post('/encurtar', [LinkController::class, 'store']);
Route::get('/{slug}', [LinkController::class, 'redirect']);
Route::get('/links/user', [LinkController::class, 'linksUser']);

// AUTH
Route::get('/auth/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/auth/register', [AuthController::class, 'register']);
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');