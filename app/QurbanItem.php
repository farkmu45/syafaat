<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QurbanItem extends Model
{
    protected $table = 'qurbans_items';
    protected $guarded = ['id'];
}
