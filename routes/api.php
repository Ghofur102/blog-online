<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/signUp_proces',[AuthController::class,'signUp_process'])->name('signUp_proces');
Route::post('/forgotpassword', [ForgotPasswordController::class, 'forgot_password']);
