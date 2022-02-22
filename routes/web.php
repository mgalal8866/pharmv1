<?php

use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Admin\Unit\CreateUnit;
use App\Http\Controllers\WarehouseController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/get_category', function () {
    try {
        DB::connection()->getPDO();
        echo DB::connection()->getDatabaseName();
        } catch (\Exception $e) {
        echo 'None';
    }
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

        // Route::group(
        //     [
        //         'prefix' => 'admin',
        //     ], function(){
        //***********************  Start Unit***********************************//
        Route::get('/view_unit',[UnitsController::class,'index'])->name('viewunit');
        //***********************  end Unit***********************************//
        //***********************  Start Category***********************************//
        Route::get('/view_category',[CategoryController::class,'index'])->name('viewcategory');
        //***********************  end Category***********************************//
        //***********************  Start UNITS***********************************//
        Route::get('/warehouses',[WarehouseController::class,'index'])->name('viewwarehouses');
        //***********************  end UNITS***********************************//

        //***********************  Start Products***********************************//
        Route::get('/products',[ProductController::class,'index'])->name('viewproducts');
        //***********************  end Products***********************************//

            Route::get('/unit/create',CreateUnit::class);


            Route::get('/', function () {return view('admin.dashborad');});
            Route::get('/getusers',[UserController::class,'index']);
        // });
    });

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
