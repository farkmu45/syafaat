<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qurban extends Model
{
    protected $guarded = ['id'];

    public function items()
    {
        return $this->hasMany(QurbanItem::class);
    }
}
