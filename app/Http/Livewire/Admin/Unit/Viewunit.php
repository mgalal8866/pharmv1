<?php

namespace App\Http\Livewire\Admin\Unit;

use App\Models\Unit;
use Livewire\Component;
use Livewire\WithPagination;

class Viewunit extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

             public $slug, $name ,$searchtxt;

            protected $rules = [
                'name' => 'required|unique:units',
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
                $unit = Unit::where('slug', $slug )->first();
                $this->slug = $slug;
                $this->name = $unit->name;
            }
            public function delete()
            {
                $unit = Unit::where('slug',  $this->slug )->first();
                $unit->delete();
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Delete Done']);
            }
            public function create()
            {
                $this->validate();
                Unit::create([
                    'name' => $this->name,
                ]);
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created '.$this->name.' Done']);

            }
            public function update()
            {
                $this->validate();
                $unit = Unit::where('slug',  $this->slug)->first();
                $unit->update([
                    'name' => $this->name,
                ]);
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'update '.$this->name.' Done']);
            }
    public function render()
    {
        $units = Unit::where('name','like', '%'. $this->searchtxt . '%')->orderBy('id','desc')->latest()->paginate(20);
        return view('livewire.admin.unit.viewunit',['units' => $units])->layout('admin.layouts.master');
    }
}
