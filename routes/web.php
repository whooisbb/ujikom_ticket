<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


//home
Route::get('/', [HomeController::class, 'index']);

//daftarr  
Route::get('registration', [AuthController::class, 'registration']);
Route::post('registration_post', [AuthController::class, 'registration_post']);
//login
Route::get('login', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
//forgot password
Route::get('forgot', [AuthController::class, 'forgot']);


Route::group(['middleware' => 'superadmin'], function (){
    Route::get('superadmin/dashboard', [DashboardController::class, 'dashboard']);

});

Route::group(['middleware' => 'admin'], function (){
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

});

Route::group(['middleware' => 'user'], function (){
    Route::get('user/dashboard', [DashboardController::class, 'dashboard']);

});

Route::get('logout', [AuthController::class, 'logout']);