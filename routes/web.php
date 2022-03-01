<?php

use App\Models\User;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Brandaccount;
use App\Http\Livewire\Front\Home;
use App\Models\Warehouse_product;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Front\Checkout;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Front\Placeorder;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UnitsController;
use App\Http\Controllers\UsersController;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Livewire\Front\Singelproduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\Admin\Unit\CreateUnit;
use App\Http\Controllers\WarehouseController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::get('/ge', function () {

    return Warehouse_product::get()->groupBy('product_id');
// return Product::whereHas('warehouse_product', function($q){

// })->with('warehouse_product', function($q){
//     $q->groupBy('product_id');

// })->get();

});
Route::get('/sss', function(){
    // return '#O' . str_pad('9', 8, "0", STR_PAD_LEFT);
//    Cart::instance('cart')->destroy();
return str_pad('9', 8, "0", STR_PAD_LEFT);

});
Route::get('/front',Home::class)->name('front');
Route::get('/front/{slug}',Home::class)->name('home');
Route::get('/place-order/{codeorder}',Placeorder::class)->name('placeorder');
Route::get('/checkout',Checkout::class)->name('checkout');
Route::get('/singelproduct/{slug}',Singelproduct::class)->name('singelproduct');

Route::get('/get_role', function () {

    $permissions2 = Permission::where('guard_name' , 'web')->pluck('id','id')->all();
return  $permissions2;
    $user = Brandaccount::find(1);
    $role = Role::find(2);
    $permissions = Permission::where('guard_name' , 'brandaccount')->pluck('id','id')->all();
    $role->syncPermissions($permissions);
    $user->assignRole([$role->id]);


});

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


        //***********************  Start USERS***********************************//
        Route::get('/users',[UsersController::class,'livewireindex'])->name('users.view');
        //***********************  end USERS***********************************//

        //***********************  Start Roles***********************************//
        Route::get('/roles',[RolesController::class,'index'])->name('roles.view');
        //***********************  end Roles***********************************//


        //***********************  Start Products***********************************//
        Route::get('/products',[ProductController::class,'index'])->name('product.view');
        Route::get('/product/create',[ProductController::class,'create'])->name('product.create');
        //***********************  end Products***********************************//

            Route::get('/unit/create',CreateUnit::class);
            Route::get('/', function () {return view('admin.dashborad');});
            Route::get('/getusers',[UserController::class,'index']);
        // });
    });

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
