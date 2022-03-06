<?php

namespace App\Http\Livewire\Front;

use App\Models\companyinfo;
use App\Models\contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $phone,$name,$email,$message;
    public function send(){
        $contact = ModelsContact::create([
        'name'   =>  $this->name,
        'phone'  =>  $this->phone,
        'email'  =>  $this->email,
        'message'=>  $this->message]);
        if($contact){
            $this->dispatchBrowserEvent('Toast',['ev' => 'success','msg' => 'تم الارسال  .. ']);
        $this->reset();
        }
    }
    public function render()
    {
        $company = companyinfo::first();
        return view('livewire.front.contact',['company'=>$company])->layout('front.layout.master');
    }
}
