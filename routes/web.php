<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\Admin\PageController;

Route::group(['prefix'=>'admin'],function(){
    Route::resource('pages','PageController');
});
