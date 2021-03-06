<?php

namespace App\Http\Livewire\Front;

use App\Models\banner;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Warehouse_product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;

class Home extends Component
{
    protected $listeners = ['home' => 'render'];
    public $slug='',$bycat='';
    public function productbycategory($slug){
      $this->slug = $slug;
            // $this->emit('home');
    }

    public function mount($slug=null){
        $this->slug = $slug;
    }
    public function addtowish($id,$name,$price)
    {
            Cart::instance('wishlist')->add($id,$name,1,$price)->associate('App\Models\Warehouse_product');
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
        Cart::instance('cart')->add($id,$name, 1,$price)->associate('App\Models\Warehouse_product');
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

            $banner = banner::get();
            
            $newproduct = Warehouse_product::whereHas('product')->latest()->limit(20)->get();
            $flashproduct = Warehouse_product::whereHas('product')->where('special_enddate','!=' , null)->latest()->take(40)->get();

            return view('livewire.front.home',[
            'category' => $category,
            'product' =>$product,
            'banner' =>$banner,

            'newproduct'=>  $newproduct,
            'flashproduct' => $flashproduct
        ])->layout('front.layout.master');
    }

}
