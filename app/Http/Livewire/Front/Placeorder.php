<?php

namespace App\Http\Livewire\Front;

use App\Models\Order;
use Livewire\Component;

class Placeorder extends Component
{
    public $codeorder;
    public function mount($codeorder){
        $this->codeorder = $codeorder;
    }
    public function render()
    {
        $order = Order::where('numberorder',$this->codeorder)->first();
        return view('livewire.front.placeorder',['order'=> $order])->layout('front.layout.master');
    }
}
