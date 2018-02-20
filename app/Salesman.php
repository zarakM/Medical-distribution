<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    protected $fillable =['name','mobileNo'];

    public function Area()
    {
        return $this->belongsTo(Area::class);
    }
    public function customer_orders()
    {
        return $this->hasMany(CustomerOrder::class, 'foreign_key', 'local_key');
    }
}
