<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Unit;
use Livewire\Component;
use App\Models\Category;
use App\Models\Warehouse;
use Livewire\WithFileUploads;
use App\Models\ProductAttribute;
use App\Models\Warehouse_product;

class Editproduct extends Component
{
    use WithFileUploads;
    public $qty=0,
    $dismo=0.00,
    $dispres=false,
    $price_sale=0.00,
    $price_buy=0.00,
    $warehouse_id=null,
    $category_id=null,
    $unit_id=null,
    $description=null,
    $code=null,
    $name=null,
    $datepk,
    $origin,
    $effective,
    $activesubstance,
    $inputFile,
    $attr,
    $inputs=[],
    $attribute_arr=[],
    $attribute_values,
    $slug;

public function mount($slug){
    // dd($slug);
    $this->slug = $slug;
    $warehouse_product = Warehouse_product::whereHas('product',function($q) { $q->where('slug',$this->slug); })->first();
    $this->price_sale = $warehouse_product->price_sale;
    $this->price_buy = $warehouse_product->price_buy;
    $this->name = $warehouse_product->product->name;
    $this->description = $warehouse_product->product->description;
    $this->activesubstance = $warehouse_product->product->effective;
    $this->origin = $warehouse_product->product->origin;
    $this->category_id = $warehouse_product->category_id;
    $this->unit_id = $warehouse_product->unit_id;
    $this->warehouse_id = $warehouse_product->warehouse_id;
    $this->code = $warehouse_product->code;
    $this->qty = $warehouse_product->qty;
    //$this->image = $warehouse_product->image;
    $this->dismo = $warehouse_product->getAttributes()['special_price'];
    $this->dispres =  ($warehouse_product->special_type =='fixed')?false:true;

}

    public function render()
    {
        $units = Unit::all();
        $warehouse = Warehouse::all();
        $catrgory = Category::all();
        $pattributes  = ProductAttribute::all();
        return view('livewire.admin.product.editproduct',['pattributes'=> $pattributes,'units'=>$units , 'category'=>$catrgory,'warehouse'=>$warehouse])->layout('admin.layouts.master');
    }
}
