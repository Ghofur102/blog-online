<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/signUp_process',[AuthController::class,'signUp_process'])->name('signUp_process');
Route::post('/signIn_process',[AuthController::class,'signIn_process'])->name('signIn_process');

// rute untuk lupa password
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgot_password'])->middleware('guest')->name('password.email');

// rute untuk reset password
Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');
Route::post('/reset-password', [ForgotPasswordController::class, 'reset_password'])->middleware('guest')->name('password.update');
