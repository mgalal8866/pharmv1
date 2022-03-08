<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;
use App\Models\Brandaccount;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Response;

class Brand extends Component
{
    use WithPagination;
    public $searchtxt;
    public function edit($id){
        $Brandaccount = Brandaccount::find($id);

        if( $Brandaccount->is_active === 'Active') {
            // dd('d');
            $Brandaccount->update(['is_active' => 0,]);
        }else {
            $Brandaccount->update(['is_active' => 1,]);
        }
    }

    public function downloude($filepath){
        // dd($filepath);       return  Response::download($filepath);
        if(!empty($filepath))
        return Response()->download('assets/files/license/'. $filepath);
    }
    public function render()
    {
        $brand = Brandaccount::where('name','like', '%'. $this->searchtxt . '%')->
        orwhere('namebrand','like', '%'. $this->searchtxt . '%')->
        orderBy('id','desc')->latest()->paginate(20);

        return view('livewire.admin.brand.brand',['brand'=>$brand])->layout('admin.layouts.master');
    }
}
