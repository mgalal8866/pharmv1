<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Wishlist extends Component
{
    public $qty;
    public function increaseQty($rowId){
        $product = Cart::instance('wishlist')->get($rowId);
        $qty = $product->qty +1;
        $this->qty = $qty;
        Cart::instance('wishlist')->update($rowId,$qty);
    }

    public function decreaseQty($rowId){
        $product = Cart::instance('wishlist')->get($rowId);
        $qty = $product->qty -1;
        $this->qty = $qty;
        Cart::instance('wishlist')->update($rowId,$qty);
    }
    public function destroy($rowId){
        Cart::instance('wishlist')->remove($rowId);
        $this->emit('refreshwish');
    }

    public function addtocart($rowId){
        $product = Cart::instance('wishlist')->get($rowId);
        Cart::instance('cart')->add($product->id,$product->name, $product->qty,$product->price)->associate('App\Models\Product');
        $this->emit('updatecart');
        $this->emit('updatecartlist');
    }
    public function render()
    {
        return view('livewire.front.wishlist')->layout('front.layout.master');

    }
}
