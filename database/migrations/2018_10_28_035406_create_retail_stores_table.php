<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRetailStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retail_stores', function (Blueprint $table) {
            $table->increments('StoreId');
            $table->unsignedInteger('StoreCode');
            $table->unique('StoreCode');
            $table->string('StoreName');
            $table->string('Address');
            $table->string('City');
            $table->string('State');
            $table->string('ZIP');
            $table->string('Phone');
            $table->string('ManagerName');
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
        Schema::dropIfExists('retail_stores');
    }
}
