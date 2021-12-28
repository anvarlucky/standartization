<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Admin\PageController;
use App\Http\Controllers\Client\Admin\CategoryController;
use App\Http\Controllers\Client\Admin\ClassificationController;
use App\Http\Controllers\Client\Admin\DocTypeController;
use App\Http\Controllers\Client\Admin\ForeignAnalogController;
use App\Http\Controllers\Client\Admin\StandartController;

Route::group(['prefix'=>'admin'],function(){
    Route::resource('pages',PageController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('classifications',ClassificationController::class);
    Route::resource('doctypes',DocTypeController::class);
    Route::resource('foreign_analogs',ForeignAnalogController::class);
    Route::resource('standarts',StandartController::class);
    Route::get('doc/{id}',[StandartController::class,'doc'])->name('doc');
    Route::get('pdf/{id}',[StandartController::class,'pdf'])->name('pdf');
});
