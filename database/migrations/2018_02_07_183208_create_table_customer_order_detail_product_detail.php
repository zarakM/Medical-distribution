<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomerOrderDetailProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_order_detail_product_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_order_detail_id');
            $table->integer('product_detail_id');
            $table->integer('quantity');
            $table->integer('retail_price');
            $table->integer('trade_price');
            $table->string('bonus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer_order_detail_product_detail');
    }
}
