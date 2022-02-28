<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class Home extends Component
{
    public $slug='',$bycat='';
    public function productbycategory($slug){
      $this->slug = $slug;
     

    }
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
        $ids= Category::where('slug',  $this->slug)->first();
        $this->bycat = (!empty($ids->id))? $ids->id :'';
    
        $category =  Category::parent()->select('id','name','slug')
         ->with(['childrens' => function($q){ $q->select('id','parent_id','name','slug');
        $q->with(['childrens' => function($qq){$qq->select('id','parent_id','name','slug');}]);
         }])->get();


            $product = Product::whereHas('warehouse_product', function($q){
                $q->where('category_id','like', '%'. $this->bycat . '%'); })->get();


        return view('livewire.front.home',[ 'category' => $category  , 'product' =>$product ])->layout('front.layout.master');
    }

}
