<?php

use App\Http\Controllers\API\Order\StoreController;
use App\Http\Controllers\API\Weapon\ShowController;
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

Route::get('/weapons', StoreController::class);
Route::get('/weapons/{weapon}', ShowController::class);
Route::get('/store', StoreController::class);
