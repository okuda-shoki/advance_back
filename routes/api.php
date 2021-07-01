<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UsersController;


Route::post('/register',[RegisterController::class,'post']);
Route::post('/login',[LoginController::class,'post']);
Route::post('/logout',[LogoutController::class,'post']);
Route::get('/user/{user_id}',[UsersController::class,'get']);
Route::get('/user/{user_id}/like',[LikesController::class,'get']);
Route::get('/user/{user_id}/reservation',[ReservationController::class,'get']);
Route::get('/shop', [ShopsController::class, 'get']);
Route::get('/shop/{shop_id}', [ShopsController::class,'show']);
Route::post('/like',[LikesController::class,'post']);
Route::delete('/like',[LikesController::class,'delete']);
Route::post('/reservation',[ReservationController::class,'post']);
Route::delete('/reservation',[ReservationController::class,'delete']);