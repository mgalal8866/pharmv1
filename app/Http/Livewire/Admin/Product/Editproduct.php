<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Unit;
use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\Warehouse;
use App\Models\ProductAttribute;
use App\Models\Warehouse_product;

class Editproduct extends Component
{
    public $slug;
public function mount($slug){
    dd($slug);
    $this->slug = $slug;
}

    public function render()
    {
        $units = Unit::all();
        $warehouse = Warehouse::all();
        $catrgory = Category::all();
        $pattributes  = ProductAttribute::all();
        $warehouse_product = '';//Warehouse_product::whereHas('product',function($q) { $q->where('slug',$this->slug); })->first();
        return view('livewire.admin.product.editproduct',['warehouse_product'=> $warehouse_product ,'pattributes'=> $pattributes,'units'=>$units , 'category'=>$catrgory,'warehouse'=>$warehouse])->layout('admin.layouts.master');
    }
}
