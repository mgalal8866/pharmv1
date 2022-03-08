<?php

namespace App\Http\Livewire\Front;

use tosta;
use Livewire\Component;
use App\Models\Brandaccount;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;

class Signup extends Component
{
 use WithFileUploads;
    public $pharm,$name,$password,$password2,$phone,$email,$address,$userid,$license;

    function rules() {
        return  [
        'name' => 'required|unique:brandaccounts,name,' . $this->userid,
        'pharm' => 'required',
        'email' => 'required|email|unique:brandaccounts,email,'. $this->userid,
        'password' => 'required',
        'password2' => 'required_with:password|same:password|min:6',
        'phone' => 'required',
        'address' => 'required|min:6',
        'license' => 'required',
         ];
    }
    function messages() {
        return  [
        'name.required' =>'Required',
        'pharm.required' => 'Required',
        'email.unique' => 'taken',
        'email.required' => 'Required',
        'password.required' => 'Required',
        'password2.required_with' => 'Not match',
        'phone.required' => 'Required',
        'address.required' => 'Required',
        'license.required' => 'Required',
         ];
    }
    protected $rules;
public function register()
{
    $this->validate();
    $this->license = uploadimages('license', $this->license);
    Brandaccount::create([
    'name' => $this->name,
    'namebrand' => $this->pharm,
    'phone' => $this->phone,
    'address' => $this->address,
    'email' => $this->email,
    'license' => ($this->license)??null,
    'password' => Hash::make($this->password)]);
     $this->reset();

     $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'تم انشاء الحساب بنجاج . يرجى انتظار تاكيد البيانات و تفعيل الايميل']);

}

    public function render()
    {
        return view('livewire.front.signup')->layout('front.layout.master');
    }
}
