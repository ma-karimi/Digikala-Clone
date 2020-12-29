<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('store_product', function (Blueprint $table) {
            $table->id();
            $table->id();
            $table->foreignId("user_id")
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();

            $table->foreignId("product_id")
                ->references('id')
                ->on('products')
                ->cascadeOnDelete();
            $table->integer('quantity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_product');
    }
}
