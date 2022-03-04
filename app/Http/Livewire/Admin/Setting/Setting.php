<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\banner;
use Livewire\Component;

class Setting extends Component
{
    public function render()
    {
        $banner = banner::get();
        return view('livewire.admin.setting.setting',['banner'=>$banner])->layout('admin.layouts.master');
    }
}
