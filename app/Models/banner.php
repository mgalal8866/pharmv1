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
            $path = base_path('public/assets/images/banner/'. $val);
        
            if(File::exists($path)) {
                return ($val !== null ) ? asset('assets/images/banner/' . $val) : asset('assets/images/banner/noimage.png');
            }else{
                return asset('assets/images/banner/noimage.png');

            }
           }
}
