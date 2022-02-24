<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Viewusers extends Component
{
    public $userid,$name,$phone,$email,$role=[],$password,$passwordconfirm;

    protected $rules = [
        'name' => 'required|unique:users',
        'phone' => 'required',
        'role.*' => 'required',

    ];
public function create(){
    $this->validate();
    dd($this->role,$this->name);
}
public function view($id){
    $this->userid = $id;
    $this->name = User::find($this->userid )->name;
}

public function edit($id)
{
    $this->userid = $id;
    $user =  User::find($this->userid);
    $this->name = $user->name;
    $this->phone = $user->phone;
    $this->email = $user->email;
    $this->address = $user->address;
}
public function delete()
{
    $user = User::find($this->userid );
    $user->delete();
    $this->dispatchBrowserEvent('closeModal');
    $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Delete Done']);
}
    public function render()
    {
        $roles = Role::where('guard_name' , 'web')->get();

        $data = User::orderBy('id','DESC')->paginate(500);
        return view('livewire.admin.user.viewusers',['users' => $data,'roles'=> $roles]);
    }
}
