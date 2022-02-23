<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Models\User;
class Viewusers extends Component
{
    public function render()
    {
        $data = User::orderBy('id','DESC')->paginate(500);
        return view('livewire.admin.user.viewusers',['users' => $data]);
    }
}
