<?php

use App\Http\Controllers\ImobiliariaController;
use App\Http\Controllers\ImovelController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function () {
    Route::apiResource('user', UserController::class);
    Route::apiResource('imobiliaria', ImobiliariaController::class);
    Route::apiResource('imovel', ImovelController::class);
});
