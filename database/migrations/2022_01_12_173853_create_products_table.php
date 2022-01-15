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
            $table->bigIncrements('id');
            $table->BigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('imageUrl')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->string('quantity');
            $table->integer('size');
            $table->text('description')->nullable();
            $table->boolean('visible')->nullable()->default(true);
            $table->boolean('featured')->nullable()->default(false);
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
