<?php

use App\Http\Controllers\DashbordController;
use App\Models\Order;
use App\Models\SubCategory;
use App\Models\Brandaccount;
use App\Http\Livewire\Front\Home;
use App\Http\Livewire\Front\Shop;
use App\Models\Warehouse_product;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Livewire\Front\Contact;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Front\Cartshop;
use App\Http\Livewire\Front\Checkout;
use App\Http\Livewire\Front\Wishlist;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Front\Bycategoy;
use App\Http\Livewire\Front\Orderlist;
use App\Http\Livewire\Front\Bycategory;
use App\Http\Livewire\Front\Placeorder;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;
use App\Http\Controllers\UsersController;
use App\Http\Livewire\Admin\Brand\Brand;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Http\Livewire\Admin\Unit\Viewunit;
use App\Http\Livewire\Front\Singelproduct;
use App\Http\Livewire\Admin\User\Viewusers;
use App\Http\Livewire\Admin\Order\Vieworder;
use App\Http\Livewire\Admin\Roles\Viewroles;
use App\Http\Livewire\Admin\Setting\Setting;
use App\Http\Livewire\Admin\Unit\CreateUnit;
use App\Http\Livewire\Admin\Product\Viewproduct;
use App\Http\Livewire\Admin\Category\Viewcategory;
use App\Http\Livewire\Admin\Product\Createproduct;
use App\Http\Livewire\Admin\Order\Viewdetailsorder;
use App\Http\Livewire\Admin\Setting\Info;
use App\Http\Livewire\Admin\Warehouse\Viewwarehouse;
use App\Http\Livewire\Front\Signup;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;




    Route::group(['prefix' => 'maintenance'], function(){
        Route::get('clear_cache', function () {
            Artisan::call('cache:clear');
            dd("Cache is cleared");
        });
        Route::get('config_clear', function () {
            Artisan::call('config:clear');
            dd("config is cleared");
        });
        Route::get('runseed', function () {
            Artisan::call('db:seed');
            dd("seed done");
        });
        Route::get('migrate', function () {
            Artisan::call('migrate');
            Artisan::call('db:seed');
            dd("migrate done");
        });
        Route::get('freshmigrate', function () {
            Artisan::call('migrate:fresh');
            artisan::call('db:seed');
            dd("migrate done");
        });

    });
    Route::group(['prefix' => 'admin'], function(){Auth::routes(); });

    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ,'auth:web']
        ], function(){

    Route::group(
            [
                'prefix' => 'admin',
            ], function(){
            Route::get('file-import-export', [DashbordController::class, 'fileImportExport'])->name('dddddd');
            Route::post('file-import', [DashbordController::class, 'fileImport'])->name('file-import');
                     //***********************  Start Unit***********************************//
            Route::get('/view_unit',Viewunit::class)->name('viewunit');
            //***********************  end Unit***********************************//

            //***********************  Start Category***********************************//
            Route::get('/view_category',Viewcategory::class)->name('viewcategory');
            //***********************  end Category***********************************//

            //***********************  Start UNITS***********************************//
            Route::get('/warehouses',Viewwarehouse::class)->name('viewwarehouses');
            //***********************  end UNITS***********************************//

            //***********************  Start USERS***********************************//
            Route::get('/users',Viewusers::class)->name('users.view');
            Route::get('/brand/accounts',Brand::class)->name('brand.view');
            //***********************  end USERS***********************************//
            //***********************  Start Roles***********************************//
            Route::get('/roles',Viewroles::class)->name('roles.view');
            //***********************  end Roles***********************************//

            //***********************  Start Products***********************************//
            Route::get('/products',Viewproduct::class)->name('product.view');
            Route::get('/product/create',Createproduct::class)->name('product.create');
            //***********************  end Products***********************************//

            //***********************  Start Order***********************************//
            Route::get('/orders',Vieworder::class)->name('orders.view');
            Route::get('/order/detailsorder/{ordernumber}',Viewdetailsorder::class)->name('detailsorder.view');
            //***********************  end Order***********************************//
            Route::get('/unit/create',CreateUnit::class);
            Route::get('/dashborad',[DashbordController::class,'index'])->name('dashborad');
            Route::get('/getusers',[UserController::class,'index']);

            Route::get('/setting',Setting::class)->name('setting.view');

            // Route::get('/setting/info',Info::class)->name('setting.info');

        });

    });

    Route::group(
        [
            'prefix' => LaravelLocalization::setLocale(),
            'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
        ], function(){

    Route::get('/',Home::class)->name('front');
    // Route::get('/{slug}',Home::class)->name('home');
    Route::post('/front/logout',[UsersController::class,'logout'])->name('logoutfront');
    Route::post('/front/login',[UsersController::class,'logon'])->middleware('statusMiddleware')->name('logoncustmer');
    Route::get('/Signup',Signup::class)->name('signeup');
    Route::get('/place-order/{codeorder}',Placeorder::class)->name('placeorder');
    Route::get('/category',Bycategory::class)->name('category');
    Route::get('/shopping/checkout',Checkout::class)->name('checkout');
    Route::get('/shop/contact',Contact::class)->name('contact');
    Route::get('/order/order-list',Orderlist::class)->name('orderlist');
    Route::get('/shopping/wishlist',Wishlist::class)->name('wishlist');
    Route::get('/shopping/cart',Cartshop::class)->name('shopping.cart');
    Route::get('/shopping/product',Shop::class)->name('shopping.product');
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
    Route::get('/ge', function (){
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
});

