<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class companyinfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function getLogoAttribute($val){
    //     $path = base_path('public/assets/front/images/'. $val);
    //         if(File::exists($path)) {
    //             return ($val !== null ) ? asset('assets/front/images/' . $val) : asset('assets/images/product/noimage.jpg');
    //         }else{
    //             return asset('assets/images/product/noimage.jpg');
    //         }
    //    }
    //    public function getFavAttribute($val){
    //     $path = base_path('public/assets/front/images/'. $val);
    //         if(File::exists($path)) {
    //             return ($val !== null ) ? asset('assets/front/images/' . $val) : asset('assets/images/product/noimage.jpg');
    //         }else{
    //             return asset('assets/images/product/noimage.jpg');
    //         }
    //    }
}
