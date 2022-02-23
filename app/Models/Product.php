<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'Products';
    public $timestamps = true;
    protected $guarded = [];
    public function setNameAttribute($value)
        {
            $this->attributes['name'] = $value;
            $this->attributes['slug'] = Str::slug($value);
        }
        public function warehouse_product()
        {
            return $this->hasMany(Warehouse_product::class);
        }

}
