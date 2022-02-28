<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;


class Countwish extends Component
{
    protected $listeners = ['refreshwish' => 'render'];
    public function render()
    {
        return view('livewire.front.countwish',['countwish' => Cart::instance('wishlist')->content()->count()]);
    }
}
