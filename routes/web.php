<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;  
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;

// Home
Route::get('/', [App\Http\Controllers\HomeController::class,'index']);
Route::get('/portfolio', [App\Http\Controllers\HomeController::class,'portfolio']);
Route::get('/prices', [App\Http\Controllers\HomeController::class,'prices']);
Route::get('/detail', [App\Http\Controllers\HomeController::class,'detail']);

//auth
Route::get('/login', [App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class,'authenticated']);
Route::get('/logout', [App\Http\Controllers\AuthController::class,'logout']);

//dashboard
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->middleware('auth');

Route::resource('sliders', SliderController::class)->middleware('auth');
Route::resource('services', ServiceController::class)->middleware('auth');
Route::resource('quotes', QuoteController::class)->middleware('auth');
