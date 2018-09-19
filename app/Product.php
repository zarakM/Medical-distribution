<?php

namespace App;
use App\ProductDetail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['code','name'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function strength()
    {
        return $this->hasMany(Strength::class);
    }

    public function product_details()
    {
        return $this->hasOne(ProductDetail::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
