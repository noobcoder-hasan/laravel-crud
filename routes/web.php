<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::post('/upload', [HomeController::class, 'upload']);
Route::get('/view',[HomeController::class, 'view']);
