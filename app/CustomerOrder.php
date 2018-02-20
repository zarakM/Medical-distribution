<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    public function salesman()
    {
        return $this->belongsTo(Salesman::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customer_order_detail()
    {
        return $this->hasOne(CustomerOrderDetail::class);
    }
}
