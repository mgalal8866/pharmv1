<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Unit;
use Livewire\Component;
use App\Models\Category;
use App\Models\Warehouse;
use Livewire\WithFileUploads;
use Illuminate\Support\Carbon;
use App\Models\attribute_values;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\Warehouse_product;
use Attribute;

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
    public function add(){
        if($this->attr != 0){
            if(!$this->attribute_arr->contains($this->attr))
            {
                $this->inputs->push($this->attr);
                $this->attribute_arr->push($this->attr);
            }
        }
    }
    public function remove($attrr){
        unset($this->inputs[$attrr]);
        unset($this->attribute_arr[$attrr]);
    }
    public function save()
{
  $this->validate([
            'name' => 'required',
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
        $product= Product::where('slug',$this->slug)->first();
        $product->update([
        'name' => $this->name,
        'origin' => $this->origin,
        'effective' => $this->activesubstance,
        'description' => $this->description
        ]);
        $product->warehouse_product()->update([
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
        attribute_values::where('product_id',$product->id)->delete();
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
        // $this->reset();

    }
public function mount($slug){
    // dd($slug);
    $this->slug = $slug;
    $warehouse_product = Warehouse_product::whereHas('product',function($q) { $q->where('slug',$this->slug)->with('attributevalues'); })->first();
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
    $this->inputs = $warehouse_product->product->attributevalues->where('product_id',$warehouse_product->product_id)
     ->unique('product_attribute_id')->pluck('product_attribute_id');
    $this->attribute_arr = $warehouse_product->product->attributevalues->where('product_id',$warehouse_product->product->id)
    ->unique('product_attribute_id')->pluck('product_attribute_id');


    foreach($this->attribute_arr as $a_arr){
    $allAttributeValue = attribute_values::where('product_id',$warehouse_product->product->id)
    ->where('product_attribute_id',$a_arr)->get()->pluck('value');
        $valueString = '';
        foreach($allAttributeValue as $value){
            $valueString =   $valueString . $value . ',';
        }
        $this->attribute_values[$a_arr]= rtrim($valueString,",");
    }


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
