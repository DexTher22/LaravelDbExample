<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DrinkController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/drinks', [DrinkController::class, "getDrinks"]);
Route::get('/drink-names', [DrinkController::class, "getDrinkNames"]);
Route::get('/drink', [DrinkController::class, "getDrink"]);
Route::get('/drink100', [DrinkController::class, "getLessHundred"]);
Route::get('/drink-100', [DrinkController::class, "getMoreHundred"]);
Route::get('/drinks-all', [DrinkController::class, "getAllDrinks"]);

Route::get('/drinks/{id}', [DrinkController::class, 'updateDrink']);

