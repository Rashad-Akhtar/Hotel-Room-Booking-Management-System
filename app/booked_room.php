<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class booked_room extends Model
{
    protected $fillable = ['order_id','hotelroom_id','title','price','advance_amount'];
}
