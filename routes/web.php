<?php

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
Route::get('/',[App\Http\Controllers\MessageController::class,'index']);
Route::post('storeMessage',[App\Http\Controllers\MessageController::class,'store'])->name("storeMessage");
Route::view('dashboard','layouts.app');
Route::view('login','login');
