<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\companyinfo;
use App\Models\Order;
use Livewire\Component;
use App\Models\Order_details;
use Illuminate\Support\Facades\Auth;

class Viewdetailsorder extends Component
{
    public $ordernumber=1;
    public function mount($ordernumber){
    $this->ordernumber = $ordernumber;
    }
    public function render()
    {
        if(Auth::guard('web')->user()->warehouse_id == null){
            $order = Order::with('brandaccount')->whereHas('order_details')->where('numberorder' ,$this->ordernumber)->first();
        }else{
            $order = Order::with('brandaccount')->whereHas('order_details', function($q){$q->where('warehouse_product_id' ,Auth::guard('web')->user()->warehouse_id);})->where('numberorder' ,$this->ordernumber)
            ->first();

        }

            $info = companyinfo::first();
        return view('livewire.admin.order.viewdetailsorder',['order'=>$order,'info' =>$info])->layout('admin.layouts.master');
    }
}
