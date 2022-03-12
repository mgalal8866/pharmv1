<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use App\Models\Warehouse_product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Singelproduct extends Component
{

    public $slug,$product;
    public array $qty = [];
    public $satt=[];
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

                $product = Warehouse_product::whereHas('product', function($q){
                    $q->where('slug',$this->slug); })->first();
               $this->product =  $product;
                $productlikethis = Warehouse_product::whereHas('product')->where('category_id', $this->product->category_id)->inRandomOrder()->take(4)->get();

        return view('livewire.front.singelproduct',['product'=> $product,'productlikethis'=> $productlikethis])->layout('front.layout.master');
    }
}
