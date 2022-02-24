<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Viewusers extends Component
{
    public $name ,$phone,$email,$role=[],$password,$passwordconfirm;


public function create(){
    dd($this->role,$this->name);
}

    public function render()
    {
        $roles = Role::where('guard_name' , 'web')->get();

        $data = User::orderBy('id','DESC')->paginate(500);
        return view('livewire.admin.user.viewusers',['users' => $data,'roles'=> $roles]);
    }
}
