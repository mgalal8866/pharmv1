<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\attribute_values;
use App\Models\Unit;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\ProductAttribute;
use App\Models\Warehouse;
use Livewire\WithFileUploads;
use Facades\App\Helper\Helper;
use Illuminate\Support\Carbon;
use phpDocumentor\Reflection\Types\Null_;

class Createproduct extends Component
{
    use WithFileUploads;
    public $qty=0,$dismo=0.00,$dispres=false,$price_sale=0.00,$price_buy=0.00,
    $warehouse_id=null,$category_id=null,$unit_id=null,$description=null,$code=null,$name=null;
    public $datepk,$origin,$effective,$activesubstance;
    public $inputFile ;

    public $attr;
    public $inputs=[];
    public $attribute_arr=[],$attribute_values;

public function add(){
    if($this->attr != 0){
        if(!in_array($this->attr,$this->attribute_arr))
        {
            array_push($this->inputs, $this->attr);
            array_push($this->attribute_arr,$this->attr);
        }
    }
}
public function remove($attrr){
    unset($this->inputs[$attrr]);
    unset($this->attribute_arr[$attrr]);
}
public function updated($propertyQty)
{
        // $this->validateOnly($propertyName);
        //   dd(     \Carbon\Carbon::parse($arr)->format('Y-m-d'));
}

public function save()
{
  $this->validate([
            'name' => 'required|unique:products',
            'warehouse_id' => 'required',
            'qty' => 'required',
            'unit_id' => 'required',
            'category_id' => 'required',
            'price_sale' => 'required',
            'inputFile.*' => 'image|max:2048', // 1MB Max
        ]);

        $arr  = explode('-',$this->datepk);
        if(!empty($this->inputFile)){
         $this->inputFile = uploadimages('product',$this->inputFile);
        }
        $product = Product::create([
        'name' => $this->name,
        'origin' => $this->origin,
        // 'company'=>
        'effective' => $this->activesubstance,
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
            'image'        => (!empty($this->inputFile))?$this->inputFile:Null,
            'special_price' => ($this->dismo)??Null,
            'special_type'=>  ($this->dispres ==false)?'fixed':'percentage',
            'special_startdate'=> (Carbon::parse(($arr[0])??'')->format('Y-m-d'))??Null,
            'special_enddate' =>(Carbon::parse(($arr[1])??'')->format('Y-m-d'))??Null,
        ]);

        foreach($this->attribute_values as $key=>$attribute_value){
            $avalues =explode(",",$attribute_value);
            foreach($avalues as $avalue){
                $attr_value = new attribute_values();
                $attr_value->product_attribute_id =$key;
                $attr_value->value = $avalue;
                $attr_value->product_id =  $product->id;
                $attr_value->save();
            }
        }

        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created '.$this->name.' Done']);
        $this->reset();
        // Image::create(['image' => $this->inputFile]);
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
        $pattributes  = ProductAttribute::all();
        return view('livewire.admin.product.createproduct',['pattributes'=> $pattributes,'units'=>$units , 'category'=>$catrgory,'warehouse'=>$warehouse])->layout('admin.layouts.master');
    }
}
