<?php

namespace App\Http\Livewire\Admin\Unit;

use App\Models\Unit;
use Livewire\Component;

class Deleteunit extends Component
{
    // public $slug;
    // public function delete($slug)
    // {
    //      $unit = Unit::where('sluge',  $this->slug )->first();
    //        $unit->delete();
    //     // $this->name = $user->name;
    //     // $this->email = $user->email;
    // }
    public function render()
    {
        return view('livewire.admin.unit.deleteunit');
    }
}
