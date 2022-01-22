<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Homecontroller;

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

// Route::get('/',[Homecontroller::class, 'index']);
Route::resource('posts',HomeController::class)->middleware(['auth']);
// Route::resource('posts',HomeController::class)->middleware(['auth:sanctum', 'verified']);

 
Route::get('logout',[AuthController::class,'logout']);

Route::middleware(['auth:sanctum', 'verified'])->get('/posts',[Homecontroller::class, 'index']);
