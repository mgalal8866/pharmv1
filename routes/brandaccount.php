<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Brand\Auth\LoginController;
use App\Http\Controllers\Brand\BrandaccountController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::name('brand.')->middleware('guest:brandaccount')->prefix('brand')->group(function(){
            //login route
            Route::get('/login',[LoginController::class,'index'])->name('login');
            // Route::post('/login',[LoginController::class,'processLogin']);
            Route::post('/login',[LoginController::class,'processLogin']);
});


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'auth:brandaccount']
    ], function(){

Route::namespace('Brand')->middleware('auth:brandaccount')->prefix('brand')->group(function () {

// Route::get('/logini',[BrandaccountController::class,'index'])->name('logini');
Route::get('admin/login',function(){
              return 'logout';
        });

});

// Route::name('brand.')->namespace('Brand')->middleware('guest:brandaccount')->prefix('brand')->group(function(){
//             //login route
//             Route::get('/login',[LoginController::class,'login'])->name('login');
//             Route::post('/login',[LoginController::class,'processLogin']);
// });

// Route::name('brand.')->namespace('Brand')->prefix('brand')->group(function(){

//     Route::namespace('Auth')->middleware('guest:brandaccount')->group(function(){
//         //login route
//         Route::get('/login',[LoginController::class,'login'])->name('login');
//         Route::post('/login',[LoginController::class,'processLogin']);
//     });

//     Route::namespace('Auth')->middleware('auth:brandaccount')->group(function(){

//         Route::post('/logout',function(){
//           Auth::guard('brandaccount')->logout();
//           return redirect()->action([LoginController::class,'login']);})->name('logout');

//     });

// });
});
