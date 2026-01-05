<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\FoodController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [CustomerController::class,]);
Route::get('/meals', [MealController::class,]);
Route::get('/exercises', [ExerciseController::class,]);
Route::get('/activities', [ActivityController::class,]);
Route::get('/foods', [FoodController::class,]);













Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
