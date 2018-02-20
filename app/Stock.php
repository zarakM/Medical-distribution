<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable= ['quantity','retail_price','trade_price'];

    public function product_detail()
    {
        return $this->belongsTo(ProductDetail::class);
    }
}
