<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Vieworder extends Component
{
    public $searchtxt;
    
    public function render()
    {
            if(Auth::guard('web')->user()->warehouse_id == null){
                $orders = Order::whereHas('order_details')
                ->latest()->where('numberorder','like', '%'. $this->searchtxt . '%')->paginate(20);
            }else{
                $orders = Order::whereHas('order_details', function($q){$q->where('warehouse_product_id' ,Auth::guard('web')->user()->warehouse_id);})
                ->where('warehouse_product_id' ,'')->where('numberorder','like', '%'. $this->searchtxt . '%')
                ->latest()->paginate(20);}
        return view('livewire.admin.order.vieworder' ,['orders'=> $orders])->layout('admin.layouts.master');
    }
}
