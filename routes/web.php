<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UserController;
Route::get('/user', [UserController::class,'index']);

Route::get('/user.create', [UserController::class,'create']);

Route::post('/user', [UserController::class,'store']);

Route::get('/user.{id}.edit', [UserController::class,'edit']);

Route::put('/user.{id}', [UserController::class,'update']);

Route::delete('/user.{id}', [UserController::class,'destroy']);