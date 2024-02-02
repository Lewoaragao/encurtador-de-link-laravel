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
Route::get('/', [LinkController::class, 'index'])->name('view.index');
Route::get('/{slug}', [LinkController::class, 'redirect'])->name('view.redirect');

Route::prefix('link')->group(function () {
    Route::get('/user', [LinkController::class, 'linksUser'])->name('view.link.user');
    Route::post('/', [LinkController::class, 'store'])->name('link.store');
    Route::get('/update/{id}', [LinkController::class, 'showUpdateForm'])->name('view.link.update');
    Route::put('/update/{id}', [LinkController::class, 'update'])->name('link.update');
    Route::delete('/{id}', [LinkController::class, 'destroy'])->name('link.destroy');
});

// AUTH
Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('view.auth.login');
    Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('view.auth.register');
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
});