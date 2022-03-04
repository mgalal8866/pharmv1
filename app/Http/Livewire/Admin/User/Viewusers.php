<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use App\Models\Warehouse;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class Viewusers extends Component
{
    public $searchtxt, $warehouseuser, $roleuser,$userid,$name,$phone,$email,$role=[],$password,$passwordconfirm;



    function rules() {
        return  [
        'name' => 'required|unique:users,name,' . $this->userid,
        'phone' => 'required',
        'email' => 'required|email|unique:users,email,'. $this->userid,
        'role' => 'required',
        'role.*' => 'required',
        'warehouseuser' => 'required',
        'password' => 'required|min:6',
        'passwordconfirm' => 'required_with:password|same:password|min:6'
    ];
    }
    protected $rules;
public function create(){
    $this->validate();
    $user = User::create([
       'name'        => $this->name,
       'phone'       => $this->phone,
       'email'       => $this->email,
       'password'    => $this->password,
       'warehouse_id' => $this->warehouseuser
    ]);
    $user->assignRole($this->role);
    $this->dispatchBrowserEvent('closeModal');
    $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created Done']);

}
public function view($id){
    $this->userid = $id;
    $this->name = User::find($this->userid )->name;
}
public function update(){
     $this->validate();
    $user =  User::find($this->userid);
    $user->update([
        'name'        => $this->name,
        'phone'       => $this->phone,
        'email'       => $this->email,
        'password'    =>Hash::make($this->password),
        'warehouse_id' => $this->warehouseuser
    ]);
    DB::table('model_has_roles')->where('model_id',$this->userid)->delete();
    $user->assignRole($this->role);
    $this->dispatchBrowserEvent('closeModal');
    $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Edit Done']);

}
public function edit($id)
{
    $this->userid = $id;
    $user =  User::find($this->userid);
    $this->name = $user->name;
    $this->phone = $user->phone;
    $this->email = $user->email;
    $this->warehouseuser = $user->warehouse_id;
    $this->role =  $user->roles->pluck('name')->all();
//  dd(  $this->roleuser );
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
        $warehouses = Warehouse::all();
        $roles = Role::where('guard_name' , 'web')->get();
        $data = User::orderBy('id','DESC')->paginate(500);
        return view('livewire.admin.user.viewusers',['users' => $data,'roles'=> $roles,'warehouses' =>$warehouses])->layout('admin.layouts.master');
    }
}
