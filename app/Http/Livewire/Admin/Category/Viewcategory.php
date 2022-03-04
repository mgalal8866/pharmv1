<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Viewcategory extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

             public $slug, $name ,$searchtxt,$section;



            protected $rules = [
                'name' => 'required|unique:categorys',
            ];
            public function updated($propertyName,$propertySection)
            {
                $this->validateOnly($propertyName);

                dd( $this->section);
            }

            public function view($slug){
                $this->slug = $slug;
            }

            public function edit($slug)
            {
                $this->slug = $slug;
                $category = Category::where('slug', $slug )->first();
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
                Category::create([
                    'name' => $this->name,
                ]);
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created '.$this->name.' Done']);
            }
            public function update()
            {
                $this->validate();
                $category = Category::where('slug',  $this->slug)->first();
                $category->update([
                    'name' => $this->name,
                ]);
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
