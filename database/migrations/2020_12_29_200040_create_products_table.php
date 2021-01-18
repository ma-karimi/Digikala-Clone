<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('en_title');
            $table->string('slug');
            $table->longText('review')->nullable();
            $table->integer('price');
            $table->integer('quantity');
            $table->foreignId('brand_id');
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->cascadeOnDelete();
            $table->enum('status',['draft', 'waiting', 'published', 'denied', 'unavailable'])->default('draft');
            $table->json('detail');
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
        Schema::dropIfExists('products');
    }
}
