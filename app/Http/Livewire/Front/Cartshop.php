<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Cartshop extends Component
{

    public $qty;
    public function clearcart(){
        Cart::instance('cart')->destroy();
        $this->emit('updatecart');
        $this->emit('updatecartlist');
    }
    public function increaseQty($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty +1;
        $this->qty = $qty;
        Cart::instance('cart')->update($rowId,$qty);
       $this->emit('updatecart');
        $this->emit('updatecartlist');
    }

    public function decreaseQty($rowId){
        $product = Cart::instance('cart')->get($rowId);
        $qty = $product->qty -1;
        $this->qty = $qty;
        Cart::instance('cart')->update($rowId,$qty);
       $this->emit('updatecart');
        $this->emit('updatecartlist');
    }
    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
       $this->emit('updatecart');
        $this->emit('updatecartlist');
    }

    public function render()
    {
        return view('livewire.front.cartshop')->layout('front.layout.master');
    }
}
