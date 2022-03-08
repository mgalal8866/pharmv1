<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brandaccount;
use Illuminate\Http\Request;
use App\Models\Order_details;
use App\Imports\ProductImport;
use App\Models\Warehouse_product;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Livewire\Front\Orderlist;

class DashbordController extends Controller
{
    public function index(){
        $countbrand = Brandaccount::count();
        // $countorders = Order::whereHas('order_details', function($q){$q->where('warehouse_product_id' ,Auth::guard('web')->user()->warehouse_id);})
        // ->orwhere('warehouse_product_id' ,'') ->count();
        $countunit = Unit::count();
        $countcategory = Category::count();
        $countproductbyware = Warehouse_product::where('warehouse_id' ,Auth::guard('web')->user()->warehouse_id)->orwhere('warehouse_id' ,'')->count();
        // $countproductbyware = Warehouse_product::where('warehouse_id' ,Auth::guard('web')->user()->warehouse_id)->orwhere('warehouse_id' ,Auth::guard('web')->user()->warehouse_id)->count();

        return view('admin.dashborad',compact('countbrand','countunit','countcategory','countproductbyware'));
    }
    public function fileImportExport()
    {
       return view('file-import');
    }


    public function fileImport(Request $request)
    {
        Excel::import(new ProductImport, $request->file('file')->store('temp'));
        return back();
    }

    // public function fileExport()
    // {
    //     return Excel::download(new ProductImport, 'users-collection.xlsx');
    // }

}
