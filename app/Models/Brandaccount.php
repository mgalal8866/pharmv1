<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brandaccount extends Authenticatable
{
    use HasFactory, Notifiable , HasRoles;

    protected $guarded = ['brandaccount'];
    // protected $guarded = [];
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    //     dd( $this->attributes['password']);
    // }

    public function scopeIsActive($query)
    {
        return $query->where('is_active',1);
    }
}
