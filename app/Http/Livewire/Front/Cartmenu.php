<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Cartmenu extends Component
{
    protected $listeners = ['updatemenucart' => 'render'];
    public function destroy($rowId){
        Cart::instance('cart')->remove($rowId);
        $this->emit('updatecartlist');
        $this->emit('updateCart');
    }
    public function render()
    {
        return view('livewire.front.cartmenu');
    }
}
