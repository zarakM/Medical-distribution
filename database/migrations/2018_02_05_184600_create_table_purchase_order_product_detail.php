<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePurchaseOrderProductDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_order_product_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_order_id');
            $table->integer('product_detail_id');
            $table->string('batch_no',50);
            $table->string('expiry');
            $table->integer('quantity');
            $table->integer('disc')->nullable()->default(0);
            $table->integer('net')->nullable()->default(0);
            $table->string('bonus');
            $table->integer('total');
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
        //
    }
}
