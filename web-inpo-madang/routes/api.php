<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiPreferensiUser;
use App\Http\Controllers\Api\ApiPangananController;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/panganan', [ApiPangananController::class, 'index']);
Route::get('panganan/{id}',[ApiPangananController::class, 'show']);
Route::post('/panganan', [ApiPangananController::class, 'store']);
Route::put('/panganan/{id}', [ApiPangananController::class, 'update']);
Route::delete('/panganan/{id}', [ApiPangananController::class, 'destroy']);

Route::get('/preferensi_user', [ApiPreferensiUser::class, 'index']);
Route::get('preferensi_user/{id}',[ApiPreferensiUser::class, 'show']);
Route::post('/preferensi_user', [ApiPreferensiUser::class, 'store']);
Route::put('/preferensi_user/{id}', [ApiPreferensiUser::class, 'update']);
Route::delete('/preferensi_user/{id}', [ApiPreferensiUser::class, 'destroy']);

