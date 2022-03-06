<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Singelproduct extends Component
{
    public $slug,$product;
     public array $qty = [];
    public function mount($slug){
        $this->slug = $slug;
    }
    public function increaseQty($id){
        $this->qty[$id] +=  1;
    }

    public function decreaseQty($id){
        if ($this->qty[$id] != 1){
        $this->qty[$id] -=1;
    }
}
    public function addtowish($id,$name,$price)
    {
            Cart::instance('wishlist')->add($id,$name,1,$price)->associate('App\Models\Warehouse_product');
            $this->emit('refreshwish');
    }

    public function store($id,$name,$price)
    {
        Cart::instance('cart')->add($id,$name, 1,$price)->associate('App\Models\Warehouse_product');
        $this->emit('updatecart');
        $this->emit('updatecartlist');
    }
    public function render()
    {

                $product = Product::where('slug',$this->slug)->with('warehouse_product')->first();
               $this->product =  $product;
                $productlikethis = Product::whereHas('warehouse_product', function($q){
                    $q->where('category_id', $this->product->warehouse_product()->first()->category_id); })->inRandomOrder()->take(4)->get();

        return view('livewire.front.singelproduct',['product'=> $product,'productlikethis'=> $productlikethis])->layout('front.layout.master');
    }
}
