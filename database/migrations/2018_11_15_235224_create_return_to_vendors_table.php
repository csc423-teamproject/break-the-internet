<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReturnToVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('return_to_vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('VendorId');
            $table->foreign('VendorId')->references('id')->on('vendors');
            $table->unsignedInteger('StoreId');
            $table->foreign('StoreId')->references('id')->on('retail_stores');
            $table->unsignedInteger('DateTimeOfReturn')->nullable();
            $table->enum('Status', ['Pending', 'Complete']);
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
        Schema::dropIfExists('return_to_vendors');
    }
}
