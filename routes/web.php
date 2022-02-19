<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Models\SubCategory;


Route::get('/get_category', function () {
    return SubCategory::parent()->select('id','name')
    ->with(['childrens' => function($q){ $q->select('id','parent_id','name');
        $q->with(['childrens' => function($qq){$qq->select('id','parent_id','name');}]);
    }])->get();
  
});

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
