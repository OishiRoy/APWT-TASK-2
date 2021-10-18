<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::view('/welcome', 'welcome')->name('welcome');
Route::view('/contact', 'pages.contact')->name('contact');

Route::get('/login',[LoginController::class,'show'])->name('login');
Route::post('/success',[LoginController::class,'LoginSubmit'])->name('success');

Route::get('/registration',[RegisterController::class,'showReg'])->name('registration');
Route::post('/success',[RegisterController::class,'RegisterSubmit'])->name('success');

