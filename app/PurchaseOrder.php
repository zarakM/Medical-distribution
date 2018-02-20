<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = ['quantity','tradePrice','expiry','bonus','batch'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function product_details()
    {
		return $this->belongsToMany(ProductDetail::class, 'purchase_order_product_detail','purchase_order_id','product_detail_id')->withPivot('quantity','retail_price','trade_price','bonus')->withTimestamps();
    }
}
