<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('OrderDetailId');
            $table->unsignedInteger('OrderId');
            $table->foreign('OrderId')->references('OrderId')->on('orders');
            $table->unsignedInteger('ItemId');
            $table->foreign('ItemId')->references('ItemId')->on('inventory_items');
            $table->unsignedInteger('QuantityOrdered');
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
        Schema::dropIfExists('order_details');
    }
}
