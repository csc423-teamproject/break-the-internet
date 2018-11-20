<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnToVendorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_to_vendor_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ReturnToVendorId');
            $table->foreign('ReturnToVendorId')->references('id')->on('return_to_vendors');
            $table->unsignedInteger('ItemId');
            $table->foreign('ItemId')->references('id')->on('inventory_items');
            $table->unsignedInteger('QuantityReturned');
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
        Schema::dropIfExists('return_to_vendor_details');
    }
}
