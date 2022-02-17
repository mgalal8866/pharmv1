<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brandaccount extends Model
{
    use HasFactory, Notifiable , HasRoles;

    protected $guarded = [];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::make($value);
    }

    public function scopeIsActive($query)
    {
        return $query->where('is_active',1);
    }
}
