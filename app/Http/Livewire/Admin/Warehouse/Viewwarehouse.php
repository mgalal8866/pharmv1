<?php

namespace App\Http\Livewire\Admin\Warehouse;

use Livewire\Component;
use App\Models\Warehouse;
use Livewire\WithPagination;

class Viewwarehouse extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

             public $slug, $name ,$phone =null ,$address=null,$searchtxt;

            protected $rules = [
                'name' => 'required|unique:warehouses',
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
                $warehouse = Warehouse::where('slug', $slug )->first();
                $this->slug = $slug;
                $this->name = $warehouse->name;
                $this->phone = $warehouse->phone;
                $this->address = $warehouse->address;
            }
            public function delete()
            {
                $warehouse = Warehouse::where('slug',  $this->slug )->first();
                $warehouse->delete();
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Delete Done']);
            }
            public function create()
            {
                // $this->validate();
                Warehouse::create([
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
                $warehouse = Warehouse::where('slug',  $this->slug)->first();
                $warehouse->update([
                    'name' => $this->name,
                    'phone' => $this->phone,
                    'address' => $this->address,
                ]);
                $this->dispatchBrowserEvent('closeModal');
                $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'update '.$this->name.' Done']);
            }

    public function render()
    {
        $warehouses = Warehouse::where('name','like', '%'. $this->searchtxt . '%')->orderBy('id','desc')->latest()->paginate(20);

        return view('livewire.admin.warehouse.viewwarehouse',['warehouses'=>$warehouses])->layout('admin.layouts.master');
    }
}
