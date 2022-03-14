<?php

namespace App\Http\Livewire\Front;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Searchfront extends Component
{
    use WithPagination;
    // public $txtsearch = "";

    public $query;
    // public $products;
    public $highlightIndex;

    public function mount()
    {
        $this->reset();
    }

    // public function reset()
    // {
    //     $this->query = '';
    //     $this->products = [];
    //     $this->highlightIndex = 0;
    // }

    public function incrementHighlight()
    {
        if ($this->highlightIndex === count($this->products) - 1) {
            $this->highlightIndex = 0;
            return;
        }
        $this->highlightIndex++;
    }

    public function decrementHighlight()
    {
        if ($this->highlightIndex === 0) {
            $this->highlightIndex = count($this->products) - 1;
            return;
        }
        $this->highlightIndex--;
    }

    public function selectProduct()
    {
        $product = $this->products[$this->highlightIndex] ?? null;
        if ($product) {
            $this->redirect(route('show-product', $product['id']));
        }
    }

    // public function updatedQuery()
    // {
    //     $this->products = Product::whereHas('warehouse_product')->where('name','like', '%'. $this->query . '%')->orderBy('id','desc')->latest()->paginate(20);
    // }


    public function render()
    {
        // $products = Product::whereHas('warehouse_product')->where('name','like', '%'. $this->txtsearch . '%')->orderBy('id','desc')->latest()->paginate(20);
        $products = Product::whereHas('warehouse_product')->where('name','like', '%'. $this->query . '%')->orderBy('id','desc')->latest()->paginate(10);

        return view('livewire.front.searchfront',['products'=>$products]);
    }
}
