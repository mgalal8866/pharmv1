<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Unit;
use Livewire\Component;
use Facades\App\Helper\Helper;
use App\Models\Category;
use App\Models\Product;
use App\Models\Warehouse;
use Livewire\WithFileUploads;
use phpDocumentor\Reflection\Types\Null_;

class Createproduct extends Component
{
    use WithFileUploads;
    public $qty=0,$dismo=0.00,$dispres=0,$price_sale=0.00,$price_buy=0.00,$warehouse_id=null,$category_id=null,$unit_id=null,$description=null,$code=null,$name=null;
    // public $images = [];
    public $images ;
    public function save()
    {
        $this->validate([
            'name' => 'required|unique:products',
            'warehouse_id' => 'required',
            'qty' => 'required',
            'unit_id' => 'required',
            'category_id' => 'required',
            'price_sale' => 'required',
            'images.*' => 'image|max:1024', // 1MB Max
        ]);

        // if(!empty($this->images)){
        // foreach ($this->images as $key => $image) {
        //     $this->images[$key] = uploadimages('product',$this->images);
        // }
        // $this->images = json_encode($this->images);
        //  }
        if(!empty($this->images)){
         $this->images = uploadimages('product',$this->images);
        }
        $product = Product::create([
        'name' => $this->name,
        'effective' => '$this->effective',
        'description' => $this->description
        ]);
        $product->warehouse_product()->create([
            'warehouse_id' => $this->warehouse_id,
            'code'         => $this->code,
        	'qty'          => $this->qty,
            'price_sale'   => $this->price_sale,
            'price_buy'	   => $this->price_buy,
            'unit_id'	   => $this->unit_id,
            'category_id'  => $this->category_id,
            'image'        => (!empty($this->images))?$this->images:Null
        ]);
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created '.$this->name.' Done']);

        // Image::create(['image' => $this->images]);

        // session()->flash('success', 'Images has been successfully Uploaded.');

        // return redirect()->back();
    }

    public function ww(){
        dd($this->dismo,$this->dispres,$this->price_sale,$this->price_buy,$this->warehouse_id,$this->category_id,$this->unit_id,$this->description,$this->code,$this->name);
    }
    public function render()
    {
        $units = Unit::all();
        $warehouse = Warehouse::all();
        $catrgory = Category::all();
        return view('livewire.admin.product.createproduct',['units'=>$units , 'category'=>$catrgory,'warehouse'=>$warehouse])->layout('admin.layouts.master');
    }
}
