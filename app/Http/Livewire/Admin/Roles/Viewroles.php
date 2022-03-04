<?php

namespace App\Http\Livewire\Admin\Roles;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Viewroles extends Component
{
    public $permission=[],$name,$roleid;

    function rules() {
        return  [
        'name' => 'required|unique:roles,name,' . $this->roleid,
        'permission' => 'required',
    ];
    }
    protected $rules;

    public function create(){
        $this->validate();
        $role = Role::create(['name' => $this->name]);
        $role->syncPermissions($this->permission);
        $this->dispatchBrowserEvent('closeModal');
        $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Created  Role Done']);

    }

    public function update(){
        $this->validate();
        $role =  Role::find($this->roleid);
        $role->update([
            'name'        => $this->name,
        ]);
       $role->syncPermissions($this->permission);

       $this->dispatchBrowserEvent('closeModal');
       $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Edit Done']);

   }
   public function edit($id)
{
    $this->roleid = $id;
    $role =  Role::find($this->roleid);
    $this->name = $role->name;



}
    public function view($id){
        $this->roleid = $id;
        $this->name = Role::find($id)->name;
    }
    public function delete()
{
    DB::table("roles")->where('id', $this->roleid)->delete();
    $this->dispatchBrowserEvent('closeModal');
    $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'Delete Done']);
}
    public function render()
    {
        // $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
        // ->where("role_has_permissions.role_id", $id)
        // ->get();
        $permissions = Permission::where('guard_name' , 'web')->get();
        $roles = Role::where('guard_name' , 'web')->with('permissions')->paginate(500);
        // dd($roles->permissions);
        return view('livewire.admin.roles.viewroles',['roles'=> $roles,'permissions' => $permissions])->layout('admin.layouts.master');
    }
}
