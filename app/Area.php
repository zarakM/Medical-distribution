<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['name'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function salesmen()
    {
        return $this->hasMany(Salesman::class);
    }
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
