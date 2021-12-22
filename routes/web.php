<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Admin\PageController;
use App\Http\Controllers\Client\Admin\CategoryController;
use App\Http\Controllers\Client\Admin\ClassificationController;
use App\Http\Controllers\Client\Admin\DocTypeController;

Route::group(['prefix'=>'admin'],function(){
    Route::resource('pages',PageController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('classifications',ClassificationController::class);
    Route::resource('doctypes',DocTypeController::class);
});
