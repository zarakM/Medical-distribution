<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable= ['batch_no','quantity','disc','net','expiry'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
