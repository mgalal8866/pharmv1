<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $timestamps = false;
    protected $guarded = [];

    public function order_details()
    {
        return $this->hasMany(Order_details::class);
    }
}
