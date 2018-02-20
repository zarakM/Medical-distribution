<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name','address','mobile_no','phone_no'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function customer_orders()
    {
        return $this->hasMany(CustomerOrder::class);
    }
}
