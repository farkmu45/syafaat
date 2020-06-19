<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(OrderItems::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
