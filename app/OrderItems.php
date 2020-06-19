<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    protected $guarded = ['id'];

    protected $table = 'orders_items';

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function item()
    {
        return $this->belongsTo(QurbanItem::class, 'qurban_item_id');
    }
}
