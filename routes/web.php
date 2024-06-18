<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('User.home');
})->name('user.home');


Route::get('/signup',[AuthController::class,'signUpLayout'])->name('signup.layout');
Route::get('/signin',[AuthController::class,'signInLayout'])->name('signin.layout');
Route::post('/signup_process',[AuthController::class,'signUpProcess'])->name('signup.process');
Route::post('/signin_process',[AuthController::class,'signInProcess'])->name('signin.process');

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
