<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;
use App\Models\Category;

class Categoyside extends Component
{
    public function productbycategory($slug){
        $this->slug = $slug;
              // $this->emit('home');
      }
    public function render()
    {
        $category =  Category::parent()->select('id','name','slug')
        ->with(['childrens' => function($q){ $q->select('id','parent_id','name','slug');
       $q->with(['childrens' => function($qq){$qq->select('id','parent_id','name','slug');}]);
        }])->get();

        return view('livewire.front.categoyside',['category'=> $category]);
    }
}
