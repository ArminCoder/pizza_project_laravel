<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'lname', 'address', 'phone', 'message', 'order_id'];
}
