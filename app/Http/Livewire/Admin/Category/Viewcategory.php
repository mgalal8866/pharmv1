<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Viewcategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

             public $slug, $name ,$searchtxt,$section,$parent;



            protected $rules = [
                'name' => 'required|unique:categorys,name',
            ];
            public function updated($propertyName,$propertyParent)
            {
                $this->validateOnly($propertyName);

                // dd($propertyParent);
            }

            public function view($slug){
                $this->slug = $slug;
             
            }

            public function edit($slug,$parent)
            {
                $this->slug = $slug;
                $category = Category::where('slug', $slug )->first();
                if($parent){
                     $parent = Category::where('slug',  $parent)->first();  
                      $this->parent = $parent->slug;
                }else{
                    $this->parent='';
                }
               
                $this->slug = $slug;
                $this->name = $category->name;
             
            
            }
            public function delete()
            {
                $category = Category::where('slug',  $this->slug )->first();
                $category->delete();
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Delete Done']);
            }
            public function create()
            {

                $this->validate();
                $parent = Category::where('slug',  $this->parent)->first();
                Category::create([
                    'name' => $this->name,
                    'parent_id'=>  ($parent->id)??null
                ]);
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created '.$this->name.' Done']);
                $this->reset();
            }
            public function update()
            {
                // $this->validate();
              
                $category = Category::where('slug',  $this->slug)->first();
                $parent = Category::where('slug',  $this->parent)->first(); 
                $category->update([
                    'name' => $this->name,
                    'parent_id' =>   ($parent->id)??null
                ]);
                $this->reset();
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'update '.$this->name.' Done']);
            }
    public function render()
    {

    //     $categorys = Category::where('name','like', '%'. $this->searchtxt . '%')->parent()->select('id','name','slug')
    // ->with(['childrens' => function($q){ $q->select('id','parent_id','name','slug');
    //     $q->with(['childrens' => function($qq){$qq->select('id','parent_id','name','slug');}]);
    // }])->orderBy('id','desc')->latest()->paginate(20);
    $categorys = Category::where('name','like', '%'. $this->searchtxt . '%')->orderBy('id','desc')->latest()->paginate(20);

        return view('livewire.admin.category.viewcategory',['categorys'=>$categorys])->layout('admin.layouts.master');
    }
}
