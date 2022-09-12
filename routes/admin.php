<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Admin\PostController;
use App\Http\Controllers\Backend\Admin\ProductController;
use App\Http\Controllers\Backend\Admin\CategoryController;
use App\Http\Controllers\Backend\Admin\DashboardController;

Route::group(['prefix'=>'admin/','as'=>'admin.','middleware'=>['auth','is_admin']], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //---------------- Category ---------------//
    Route::resource('categories', CategoryController::class)->except('show');
    //--------------- Product -----------------//
    Route::resource('products', ProductController::class)->except('show');
});
