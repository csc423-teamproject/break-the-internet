<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventory_items', function (Blueprint $table) {
            $table->increments('ItemId');
            $table->string('Description');
            $table->string('Size');
            $table->string('Division');
            $table->string('Department');
            $table->string('Category');
            $table->double('ItemCost', 8, 2);
            $table->double('ItemRetail', 8, 2);
            $table->string('ImageFileName');
            $table->unsignedInteger('VendorId');
            $table->foreign('VendorId')->references('id')->on('vendors');
            $table->enum('ActiveStatus', ['Enabled', 'Disabled']);
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
        Schema::dropIfExists('inventory_items');
    }
}
