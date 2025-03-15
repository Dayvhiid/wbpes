<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AccessTokenController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


// Route::get('access_token', 'API/AccessTokenController@generate_token');
Route::get('access_token', [AccessTokenController::class, 'generate_token']);
