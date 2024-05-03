<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EquiposController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);
Route::get('/login',[HomeController::class,'login']);

Route::get('/equipos',[EquiposController::class,'index']);