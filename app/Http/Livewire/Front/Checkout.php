<?php

namespace App\Http\Livewire\Front;

use App\models\Order;
use Livewire\Component;
use Illuminate\Support\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;

class Checkout extends Component
{

    public function sendorder(){
        $Car = Cart::instance('cart');
        $order = Order::create([
        'brandaccount_id' => 1,
        'numberorder'=>  str_pad('9', 8, "3", STR_PAD_LEFT),
        'total' => $Car->total(),
        'date' => Carbon::now(),
        ]);
        foreach( $Car->content() as $item )
        {
            $order->order_details()->create([
            'warehouse_product_id' =>  $item->id,
            'qty' =>   $item->qty,
            'price' =>   $item->price,
            'total' =>  $item->qty*$item->price,
            ]);
        }
        Cart::instance('cart')->destroy();
        $this->emit('updatecart');
        $this->emit('updatecartlist');
        redirect( route('placeorder',$order->numberorder));

    }
    public function render()
    {
        return view('livewire.front.checkout')->layout('front.layout.master');
    }
}
