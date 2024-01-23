<?php

use App\Http\Controllers\API\DataController;
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

Route::group(['middleware' => 'api'], function () {
    Route::get('/info', [DataController::class, 'info']);
    Route::get('/screener', [DataController::class, 'screener']);
    Route::get('/market_data', [DataController::class, 'marketData']);
    Route::get('/candles', [DataController::class, 'candles']);
    Route::get('/ws/screener', [DataController::class, 'wsScreener']);
});
