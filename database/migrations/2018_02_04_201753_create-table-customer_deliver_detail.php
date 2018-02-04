<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomerDeliverDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customerDeliverDetails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('batch');
            $table->integer('quantity');
            $table->integer('trade_price');
            $table->integer('retail_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customerDeliverDetails');
    }
}
