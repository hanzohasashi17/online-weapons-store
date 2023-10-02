<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => 'auth'], function () {
    Route::get('/register', App\Http\Controllers\Auth\GetRegisterController::class);
    Route::post('/register', App\Http\Controllers\Auth\RegisterController::class);
    Route::get('/login', App\Http\Controllers\Auth\GetLoginController::class)->name('auth.login');
    Route::post('/login', App\Http\Controllers\Auth\LoginController::class);
    Route::post('/logout', App\Http\Controllers\Auth\LogoutController::class);
});

Route::get('/', App\Http\Controllers\Weapon\IndexController::class)->middleware('auth');
Route::get('/create', App\Http\Controllers\Weapon\CreateController::class)->middleware('auth');
Route::post('/store', App\Http\Controllers\Weapon\StoreController::class)->middleware('auth');
Route::get('/edit/{weapon}', App\Http\Controllers\Weapon\EditController::class)->middleware('auth');
Route::get('/show/{weapon}', App\Http\Controllers\Weapon\ShowController::class)->middleware('auth');
Route::post('/{weapon}', App\Http\Controllers\Weapon\UpdateController::class)->middleware('auth');
Route::get('/delete/{weapon}', App\Http\Controllers\Weapon\DeleteController::class)->middleware('auth');
