<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','name','email','address','phone','due_amount','status','total_advance','payment_method'];
}
