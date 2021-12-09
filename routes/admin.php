<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::prefix('/admin')->name('admin.')->middleware('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/feature1', [AdminController::class, 'index'])->name('feature1');
    Route::post('/feature2', [AdminController::class, 'create'])->name('feature2');
    Route::delete('/feature3', [AdminController::class, 'destroy'])->name('feature3');
    Route::get('/feature4', [AdminController::class, 'index'])->name('feature4');
    Route::get('/feature5', [AdminController::class, 'index'])->name('feature5');
    Route::patch('/feature6', [AdminController::class, 'index'])->name('feature6');
    Route::get('/feature7', [AdminController::class, 'index'])->name('feature7');

    Route::get('/feature8', [AdminController::class, 'index'])->name('feature8');
    Route::post('/feature9', [AdminController::class, 'create'])->name('feature9');
    Route::delete('/feature10', [AdminController::class, 'destroy'])->name('feature10');
    Route::get('/feature11', [AdminController::class, 'index'])->name('feature11');
    Route::get('/feature12', [AdminController::class, 'index'])->name('feature12');
    Route::patch('/feature13', [AdminController::class, 'index'])->name('feature13');
    Route::get('/feature14', [AdminController::class, 'index'])->name('feature14');
});
