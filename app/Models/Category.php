<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categorys';
    public $timestamps = true;
    protected $guarded = [];

    public function setNameAttribute($value)
        {
            $this->attributes['name'] = $value;
            $this->attributes['slug'] = Str::slug($value);
        }

Public function scopeParent($query)
{
    return $query -> whereNull('parent_id');
}

Public function childrens(){
        return $this->hasMany(self::class,'parent_id');
}
public function warehouse_product()
{
    return $this->hasOne(Warehouse_product::class);
}
Public function _parent(){
    return $this->belongsTo(self::class,'parent_id');
}

}
