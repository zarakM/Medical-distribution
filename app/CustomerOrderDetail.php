<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerOrderDetail extends Model
{
    public function customer_order()
    {
        return $this->belongsTo(CustomerOrder::class);
    }

    public function product_details()
    {
		return $this->belongsToMany(ProductDetail::class, 'customer_order_detail_product_detail','customer_order_detail_id','product_detail_id')->withPivot('quantity','retail_price','trade_price','expire','batch','bonus')->withTimestamps();
    }
}
