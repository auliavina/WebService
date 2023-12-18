<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ModuleController;
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

Route::get('module', [ApiController::class, 'module']);
Route::get('referensi', [ApiController::class, 'referensi']);
Route::get('student', [ApiController::class, 'student']);
Route::get('user', [ApiController::class, 'user']);
Route::post('login', [ApiController::class, 'login']);
Route::post('register', [ApiController::class, 'register']);
