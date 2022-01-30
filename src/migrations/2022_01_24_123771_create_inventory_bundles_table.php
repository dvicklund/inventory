<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryBundlesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('inventory_bundles', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
            $table->integer('inventory_id')->unsigned();
            $table->integer('component_id')->unsigned();
            $table->integer('quantity')->nullable();

            $table->foreign('inventory_id')->references('id')->on('inventories')->onDelete('cascade');
            $table->foreign('component_id')->references('id')->on('inventories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('inventory_bundles');
    }
}