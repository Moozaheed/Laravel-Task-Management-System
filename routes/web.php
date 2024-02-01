<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Default route to the login page
Route::get('/', function () {
    return view('login');
});

// Task routes protected by auth middleware
Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', TaskController::class);
});

// Registration and login routes for guest users
Route::group(['middleware' => 'guest'], function () {
    // Registration routes
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

    // Login routes
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

// Logout route for authenticated users
Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
});
