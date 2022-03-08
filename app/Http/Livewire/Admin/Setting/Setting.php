<?php

namespace App\Http\Livewire\Admin\Setting;

use App\Models\banner;
use Livewire\Component;
use App\Models\companyinfo;
use Livewire\WithFileUploads;
use Facades\App\Helper\Helper;

class Setting extends Component
{    use WithFileUploads;
public $link,$type,$txtheader,$width,$images,$name,$phone,$email,$tax,$address;

            public function create(){

                if(!empty($this->images)){
                    $this->images = uploadimages('banner',$this->images);
                   }
                //    dd($this->images);
                    banner::create([
                        'link' => ($this->link)??null,
                        'type' => $this->type,
                        'header' => ($this->txtheader)??null,
                        'width' => ($this->width)??null,
                        'image' => ($this->images)??null
                    ]);
            }

            public function mount(){
                $companyinfo = companyinfo::first();
                $this->name = $companyinfo->name;
                $this->phone = $companyinfo->phone;
                $this->email= $companyinfo->email;
                $this->tax= $companyinfo->tax;
                $this->address= $companyinfo->address;
            }
    public function render()
    {
        $banner = banner::get();


        return view('livewire.admin.setting.setting',['banner'=>$banner])->layout('admin.layouts.master');
    }
}
