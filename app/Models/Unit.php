<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Unit extends Model
{

    protected $table = 'Units';
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
