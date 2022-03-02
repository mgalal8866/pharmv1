<?php

namespace App\Http\Livewire\Front;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Orderlist extends Component
{
    public function render()
    {
        $order = Order::where('brandaccount_id',Auth::guard('brandaccount')->User()->id)->get();
        return view('livewire.front.orderlist',['order'=>$order])->layout('front.layout.master');
    }
}
