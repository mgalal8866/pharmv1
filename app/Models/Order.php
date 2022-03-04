<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

      public $timestamps = true;
    protected $guarded = [];

    public function order_details()
    {
        return $this->hasMany(Order_details::class);
    }
    public function brandaccount()
    {
        return $this->belongsTo(Brandaccount::class);
    }
}
