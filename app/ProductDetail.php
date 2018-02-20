<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    protected $fillable = ['batch_no','strength','pack','expiry'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function purchase_orders()
    {
		return $this->belongsToMany('App\PurchaseOrder', 'purchase_order_product_detail','product_detail_id','purchase_order_id')->withPivot('quantity','retail_price','trade_price','bonus')->withTimestamps();
    }

    public function customer_order_details()
    {
		return $this->belongsToMany(CustomerOrderDetail::class, 'customer_order_detail_product_detail','product_detail_id','customer_order_detail_id')->withPivot('quantity','retail_price','trade_price','bonus')->withTimestamps();
    }
}
