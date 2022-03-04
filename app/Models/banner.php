<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class banner extends Model
{
    use HasFactory;
        protected $guarded = [];

        public function getImageAttribute($val){
            $path = public_path('assets/images/banners/'. $val);
            if(File::exists($path)) {
                return ($val !== null ) ? asset('assets/images/banners/' . $val) : asset('assets/images/banners/noimage.png');
            }else{
                return asset('assets/images/banners/noimage.png');

            }
           }
}
