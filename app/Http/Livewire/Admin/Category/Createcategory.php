<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;

class Createcategory extends Component
{
    
    public function render()
    {
        // $categorys = Category::where('name','like', '%'. $this->searchtxt . '%')->orderBy('id','desc')->latest()->paginate(20);

        return view('livewire.admin.category.createcategory');
    }
}
