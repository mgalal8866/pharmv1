<?php

namespace App\Models;
use App\Scopes\HasActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

Public function scopeParent($query)
{
    return $query -> whereNull('parent_id');
}

Public function childrens(){
        return $this->hasMany(self::class,'parent_id');
}

Public function _parent(){
    return $this->belongsTo(self::class,'parent_id');
}
}
