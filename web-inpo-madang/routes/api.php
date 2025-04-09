<?php

use App\Http\Controllers\Api\ApiCuisinesController;
use App\Http\Controllers\Api\ApiFood_ingredientsController;
use App\Http\Controllers\Api\ApiFoodsController;
use App\Http\Controllers\Api\ApiIngredientsController;
use App\Http\Controllers\Api\ApiRestaurant_foodsController;
use App\Http\Controllers\Api\ApiUser_preferencesController;
use App\Http\Controllers\Api\ApiUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::get('/cuisines', [ApiCuisinesController::class, 'index']);
Route::post('/cuisines', [ApiCuisinesController::class, 'store']);
Route::get('/cuisines/{id}', [ApiCuisinesController::class, 'show']);
Route::put('/cuisines/{id}', [ApiCuisinesController::class, 'update']);
Route::delete('/cuisines/{id}', [ApiCuisinesController::class, 'destroy']);

Route::get('/food_ingredient', [ApiFood_ingredientsController::class, 'index']);
Route::post('/food_ingredient', [ApiFood_ingredientsController::class, 'store']);
Route::get('/food_ingredient/{id}', [ApiFood_ingredientsController::class, 'show']);
Route::put('/food_ingredient/{id}', [ApiFood_ingredientsController::class, 'update']);
Route::delete('/food_ingredient/{id}', [ApiFood_ingredientsController::class, 'destroy']);

Route::get('/foods', [ApiFoodsController::class, 'index']);
Route::post('/foods', [ApiFoodsController::class, 'store']);
Route::get('/foods/{id}', [ApiFoodsController::class, 'show']);
Route::put('/foods/{id}', [ApiFoodsController::class, 'update']);
Route::delete('/foods/{id}', [ApiFoodsController::class, 'destroy']);

Route::get('/ingredients', [ApiIngredientsController::class, 'index']);
Route::post('/ingredients', [ApiIngredientsController::class, 'store']);
Route::get('/ingredients/{id}', [ApiIngredientsController::class, 'show']);
Route::put('/ingredients/{id}', [ApiIngredientsController::class, 'update']);
Route::delete('/ingredients/{id}', [ApiIngredientsController::class, 'destroy']);

Route::get('/restaurant_foods', [ApiRestaurant_foodsController::class, 'index']);
Route::post('/restaurant_foods', [ApiRestaurant_foodsController::class, 'store']);
Route::get('/restaurant_foods/{id}', [ApiRestaurant_foodsController::class, 'show']);
Route::put('/restaurant_foods/{id}', [ApiRestaurant_foodsController::class, 'update']);
Route::delete('/restaurant_foods/{id}', [ApiRestaurant_foodsController::class, 'destroy']);

Route::get('/user_preferences', [ApiUser_preferencesController::class, 'index']);
Route::post('/user_preferences', [ApiUser_preferencesController::class, 'store']);
Route::get('/user_preferences/{id}', [ApiUser_preferencesController::class, 'show']);
Route::put('/user_preferences/{id}', [ApiUser_preferencesController::class, 'update']);
Route::delete('/user_preferences/{id}', [ApiUser_preferencesController::class, 'destroy']);

Route::get('/user', [ApiUserController::class, 'index']);
Route::post('/user', [ApiUserController::class, 'store']);
Route::get('/user/{id}', [ApiUserController::class, 'show']);
Route::put('/user/{id}', [ApiUserController::class, 'update']);
Route::delete('/user/{id}', [ApiUserController::class, 'destroy']);

