<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{

    protected $table = 'warehouses';
    public $timestamps = true;
    protected $guarded = [];

    public function setNameAttribute($value)
        {
            $this->attributes['name'] = $value;
            $this->attributes['slug'] = Str::slug($value);
        }
        public function warehouse_product()
        {
            return $this->hasOne(Warehouse_product::class);
        }

}
