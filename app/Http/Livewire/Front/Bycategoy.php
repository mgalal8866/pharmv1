<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Bycategoy extends Component
{
    public $slug ='',$bycat='';
    public function mount($slug){
            $this->slug = $slug;

    }
    public function render()
    {
        $ids= Category::where('slug',  $this->slug)->first();

        $this->bycat = (!empty($ids->id))? $ids->id :'';

        $product = Product::whereHas('warehouse_product', function($q){
            $q->where('category_id','like', '%'. $this->bycat . '%'); })->get();

        return view('livewire.front.bycategoy',['product'=>$product])->layout('front.layout.master');
    }
}
