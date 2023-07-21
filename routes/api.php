<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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


Route::get('/profile/{user}', [ProfileController::class, 'show']); // Profile api
Route::post('/login', [AuthController::class, 'login']); //Login Api
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/register', [UserController::class, 'register']); // User api
Route::post('/users/{user}/interests', [InterestController::class, 'addInterest']); // Interest api
