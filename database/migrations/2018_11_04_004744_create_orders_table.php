<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('OrderId');
            $table->unsignedInteger('VendorId');
            $table->foreign('VendorId')->references('id')->on('vendors');
            $table->unsignedInteger('StoreId');
            $table->foreign('StoreId')->references('id')->on('retail_stores');
            $table->dateTime('DateTimeOfOrder')->nullable();
            $table->enum('Status', ['Open', 'Pending', 'Delivered', 'Canceled']);
            $table->dateTime('DateTimeOfFulfilment')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
