<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class Home extends Component
{
    public function addtowish($id,$name,$price)
    {
            Cart::instance('wishlist')->add($id,$name,1,$price)->associate('App\Models\Product');
            $this->emit('refreshwish');
    }
    public function removewish($id)
    {
        foreach(Cart::instance('wishlist')->content() as $witem){
            if($witem->id == $id){
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emit('refreshwish');
            }
        }
    }

    public function store($id,$name,$price)
    {

        Cart::instance('cart')->add($id,$name, 1,$price)->associate('App\Models\Product');
        $this->emit('updatecart');
        $this->emit('updatecartlist');
    }


    public function render()
    {
        $category = Category::all();
        $product = Product::all();
        return view('livewire.front.home',[ 'category' => $category  , 'product' =>$product ])->layout('front.layout.master');
    }

}
