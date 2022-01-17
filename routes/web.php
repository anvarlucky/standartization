<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\Main\StandartClientController;

use App\Http\Controllers\Client\Admin\PageController;
use App\Http\Controllers\Client\Admin\CategoryController;
use App\Http\Controllers\Client\Admin\ClassificationController;
use App\Http\Controllers\Client\Admin\DocTypeController;
use App\Http\Controllers\Client\Admin\ForeignAnalogController;
use App\Http\Controllers\Client\Admin\StandartController;

use App\Http\Controllers\Auth\LoginController;

Route::get('/',[StandartClientController::class,'index']);
Route::get('standart/{id}',[StandartClientController::class,'show']);
//Auth ui
Auth::routes(['register' => false]);
Route::get('logout', [LoginController::class, 'logout']);
/*Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::match(['get','post'],'/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');*/

Route::group(['middleware' => ['web','auth'],'prefix'=>'admin'],function(){
    //Route::match(['get','post'],'/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    Route::resource('pages',PageController::class);
    Route::resource('categories',CategoryController::class);
    Route::resource('classifications',ClassificationController::class);
    Route::resource('doctypes',DocTypeController::class);
    Route::resource('foreign_analogs',ForeignAnalogController::class);
    Route::resource('standarts',StandartController::class);
    Route::resource('standarts',StandartController::class);
    Route::get('doc/{id}',[StandartController::class,'doc'])->name('doc');
    Route::get('pdf/{id}',[StandartController::class,'pdf'])->name('pdf');

});
