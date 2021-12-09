<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FakeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

Route::get('/auth/login', [AuthController::class, 'index'])->name('auth.login');

// Register a new user
Route::get('/auth/register', [AuthController::class, 'create'])->name('auth.create');
Route::post('/auth/register', [AuthController::class, 'store'])->name('auth.store');

Route::delete('/auth/forgot-password', [AuthController::class, 'destroy'])->name('auth.forgot-password');
Route::get('/auth/reset-password', [AuthController::class, 'index'])->name('auth.feature4');
Route::post('/auth/reset-password', [AuthController::class, 'store'])->name('auth.feature5');

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [FakeController::class, 'index'])->name('public.index');

// Whatever this does
Route::get('/feature1', [FakeController::class, 'index'])->name('public.feature1');
Route::post('/feature2', [FakeController::class, 'create'])->name('public.feature2');

Route::delete('/feature3', [FakeController::class, 'destroy'])->name('public.feature3');
Route::get('/feature4', [FakeController::class, 'index'])->name('public.feature4');
Route::get('/feature5', [FakeController::class, 'index'])->name('public.feature5');
Route::patch('/feature6', [FakeController::class, 'index'])->name('public.feature6');
Route::get('/feature7', [FakeController::class, 'index'])->name('public.feature7');

// Route::resource('photos', FakeController::class)->except('create', 'store');

require base_path('routes/admin.php');
