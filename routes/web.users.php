<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Logged in User Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/user')->name('user.')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/feature1', [UserController::class, 'index'])->name('feature1');
    Route::post('/feature2', [UserController::class, 'create'])->name('feature2');
    Route::delete('/feature3', [UserController::class, 'destroy'])->name('feature3');
    Route::get('/feature4', [UserController::class, 'index'])->name('feature4');
    Route::get('/feature5', [UserController::class, 'index'])->name('feature5');
    Route::patch('/feature6', [UserController::class, 'index'])->name('feature6');
    Route::get('/feature7', [UserController::class, 'index'])->name('feature7');

    Route::get('/feature8', [UserController::class, 'index'])->name('feature8');
    Route::post('/feature9', [UserController::class, 'create'])->name('feature9');
    Route::delete('/feature10', [UserController::class, 'destroy'])->name('feature10');
    Route::get('/feature11', [UserController::class, 'index'])->name('feature11');
    Route::get('/feature12', [UserController::class, 'index'])->name('feature12');
    Route::patch('/feature13', [UserController::class, 'index'])->name('feature13');
    Route::get('/feature14', [UserController::class, 'index'])->name('feature14');
});
