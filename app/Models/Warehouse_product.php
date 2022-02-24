<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Warehouse_product extends Model
{
    use HasFactory;
    protected $table = 'warehouse_product';
    public $timestamps = true;
    protected $guarded = [];

    // public function setNameAttribute($value)
    //     {
    //         $this->attributes['name'] = $value;
    //         $this->attributes['slug'] = Str::slug($value);
    //     }

    public function getImageAttribute($val){
        $path = base_path('assets/images/product/'. $val);
            if(File::exists($path)) {
                return ($val !== null ) ? asset('assets/images/product/' . $val) : asset('assets/images/product/noimage.jpg');
            }else{
                return asset('assets/images/product/noimage.jpg');

            }
       }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
