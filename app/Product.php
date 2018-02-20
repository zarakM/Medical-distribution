<?php

namespace App;
use App\ProductDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name'];

    public function product_details()
    {
        return $this->hasMany(ProductDetail::class);
    }
}
