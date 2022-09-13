<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
});

Auth::routes([
    'register'=>false // 404 disable
]);

//-------------- Auth ---------------/
Route::get('register',[AuthController::class, 'registerIndex']);
Route::post('register',[AuthController::class, 'registerStore'])->name('register.store');

//------------ Email Verify ------------//
Route::get('email/verify/{token}',[AuthController::class, 'emailVerify'])->name('user.email.verify');


