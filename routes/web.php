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
Route::get('begin',[AverageController::class,'start']);
Route::post('enter-grades', [AverageController::class, 'enterAttempts'])
Route::post('compute-power',[AverageController::class, computePower])
