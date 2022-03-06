<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

use Livewire\WithPagination;
use App\Models\Warehouse_product;
use Gloudemans\Shoppingcart\Facades\Cart;

class Bycategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['thisme' => 'render'];
    public $slug ='',$bycat ,$min_price,$max_price;
    public function mount( ){
        $this->min_price= 1;
        $this->max_price= 1000;

    }

    public function qt($slug){
        $this->slug= $slug ;
        $this->bycat =Category::where('slug',$slug)->first()->name;
        $this->emit('thisme');
        // $this->product = Product::whereHas('warehouse_product', function($q){
        //     $q->whereHas('category', function($qq){
        //         $qq->where('slug','like', '%'. $this->slug . '%');});
        //      })->get();
        // dd($slug);
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
        $category =  Category::parent()->select('id','name','slug')
        ->with(['childrens' => function($q){ $q->select('id','parent_id','name','slug');
       $q->with(['childrens' => function($qq){$qq->select('id','parent_id','name','slug');}]);
        }])->get();

            $product = Warehouse_product::whereHas('product')->whereBetween('price_sale', [$this->min_price,$this->max_price])
            ->whereHas('category', function($qq)  {
                    $qq->where('slug','like','%'.  $this->slug . '%');
                })->latest()->paginate(50);

        return view('livewire.front.bycategory',['product'=>$product
           ,'category'=>$category])->layout('front.layout.master');
    }
}
