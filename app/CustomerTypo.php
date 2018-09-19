<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerTypo extends Model
{
    protected $fillable = ['name'];
    public function customer()
    {
        return $this->hasMany(Customer::class);
    }
}
