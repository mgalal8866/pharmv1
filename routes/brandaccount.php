<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Brand\Auth\LoginController;


Route::name('brand.')->namespace('Brandaccount')->prefix('brand')->group(function(){

    Route::namespace('Auth')->middleware('guest:brandaccount')->group(function(){
        //login route
        Route::get('/login',[LoginController::class,'login'])->name('login');
        Route::post('/login',[LoginController::class,'processLogin']);
    });

    Route::namespace('Auth')->middleware('auth:brandaccount')->group(function(){

        Route::post('/logout',function(){
            Auth::guard('brandaccount')->logout();
            return redirect()->action([
                LoginController::class,
                'login'
            ]);
        })->name('logout');

    });

});
