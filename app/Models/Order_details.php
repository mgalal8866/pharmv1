<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    public $timestamps = true;
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function warehouse_product()
    {
        return $this->belongsTo(Warehouse_product::class);
    }

}
