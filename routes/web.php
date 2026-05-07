<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::post('/upload', [HomeController::class, 'upload']);
Route::get('/view',[HomeController::class, 'view']);
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::get('/search', [HomeController::class, 'search']);

Route::get('/update/{id}', [HomeController::class, 'update']);
Route::post('/update_data/{id}', [HomeController::class, 'update_data']);

Route::get('/login', [AuthController::class, 'showlogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);