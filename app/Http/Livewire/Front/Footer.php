<?php

namespace App\Http\Livewire\Front;

use App\Models\companyinfo;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $info = companyinfo::first();

        return view('livewire.front.footer',['info'=>$info]);
    }
}
