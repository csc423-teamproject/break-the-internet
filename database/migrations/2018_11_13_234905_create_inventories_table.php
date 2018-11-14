<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventories', function (Blueprint $table) {
            $table->increments('InventoryId');
            $table->unsignedInteger('StoreId');
            $table->foreign('StoreId')->references('StoreId')->on('retail_stores');
            $table->unsignedInteger('ItemId');
            $table->foreign('ItemId')->references('ItemId')->on('inventory_items');
            $table->unsignedInteger('QuantityInStock');
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
        Schema::dropIfExists('inventories');
    }
}
