<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;

class Vieworder extends Component
{
    public function render()
    {
        $orders = Order::latest()->paginate(20);
        return view('livewire.admin.order.vieworder' ,['orders'=> $orders]);
    }
}
