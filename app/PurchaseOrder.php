<?php

namespace App;
use App\ProductDetail;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    protected $fillable = ['quantity','batch_no','expiry','disc','net','bonus','total'];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function product_details()
    {
		return $this->belongsToMany('App\ProductDetail', 'purchase_order_product_detail','purchase_order_id','product_detail_id')->withPivot('quantity','batch_no','expiry','disc','net','bonus','total')->withTimestamps();
    }
}
