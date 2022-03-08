<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Brandaccount extends Authenticatable
{
    use HasFactory, Notifiable , HasRoles;

    protected $guarded = ['brandaccount'];
    // protected $guarded = [];
    protected $fillable = [
        'name',
        'namebrand',
        'phone',
        'address',
        'email',
        'password',
        'remember_token',
        'license',
        'is_active'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    // public function setPasswordAttribute($value)
    // {
    //     $this->attributes['password'] = Hash::make($value);
    //     dd( $this->attributes['password']);
    // }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function scopeIsActive($query)
    {
        return $query->where('is_active',1);
    }
    public function getIsActiveAttribute($val){
        return ($val == 1 ) ? 'Active' : 'Deactivate';
    }

    public function getLicenseAttribute($val){
        $path = base_path('public/assets/files/license/'. $val);
            if(File::exists($path)) {

                return ($val !== null ) ? asset('assets/files/license/' . $val) :null;
            }else{
                return null;
            }
       }

}
