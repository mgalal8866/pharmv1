<?php

namespace App\Http\Livewire\Front;

use App\Models\companyinfo;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $company = companyinfo::first();
        return view('livewire.front.contact',['company'=>$company])->layout('front.layout.master');
    }
}
