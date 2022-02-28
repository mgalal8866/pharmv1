<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class Countcart extends Component
{
    protected $listeners = ['updatecart' => 'render'];
    public function render()
    {
        return view('livewire.front.countcart',['cartcounter' => Cart::instance('cart')->content()->count()]);
    }
}
