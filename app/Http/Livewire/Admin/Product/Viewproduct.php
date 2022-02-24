<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Viewproduct extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

             public $slug, $name ,$phone =null ,$address=null,$searchtxt;

            protected $rules = [
                'name' => 'required|unique:products',
                'phone' => 'required',
                'address' => 'required',

            ];
            public function updated($propertyName)
            {

                $this->validateOnly($propertyName);
            }
            public function view($slug){
                $this->slug = $slug;

            }

            public function edit($slug)
            {
                $this->slug = $slug;
                $product = product::where('slug', $slug )->first();
                $this->slug = $slug;
                $this->name = $product->name;
                $this->phone = $product->phone;
                $this->address = $product->address;
            }
            public function delete()
            {
                $product = Product::where('slug',  $this->slug )->first();
                $product->delete();
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Delete Done']);
            }
            public function create()
            {
                // $this->validate();
                product::create([
                    'name' => $this->name,
                    'phone' => $this->phone,
                    'address' => $this->address,

                ]);
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created '.$this->name.' Done']);

            }
            public function update()
            {
                $this->validate();
                $product = product::where('slug',  $this->slug)->first();
                $product->update([
                    'name' => $this->name,
                    'phone' => $this->phone,
                    'address' => $this->address,
                ]);
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'update '.$this->name.' Done']);
            }

    public function render()
    {
        // $product = Product::where('active',1)->orderBy('id', 'desc')->
        //     whereHas('category', function($q){$q->where('active' ,1);})->latest()->paginate($this->limitPerPage);

        $products = Product::whereHas('warehouse_product')->where('name','like', '%'. $this->searchtxt . '%')->orderBy('id','desc')->latest()->paginate(20);

        // return view('livewire.admin.product.viewproduct',['products'=>$products]);

        return view('livewire.admin.product.viewproduct',['products'=>$products]);
    }
}
