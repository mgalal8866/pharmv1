<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Auth::routes();
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'auth']
    ], function(){


        Route::get('/', function () {return view('admin.dashborad');});
            Route::get('/getusers',[UserController::class,'index']);
    });

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
