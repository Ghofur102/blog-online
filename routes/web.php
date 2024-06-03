<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signUp_process',[AuthController::class,'signUp_process'])->name('signUp_process');
Route::post('/signIn_process',[AuthController::class,'signIn_process'])->name('signIn_process');
