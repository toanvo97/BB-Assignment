<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
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
            $table->string('name');
            $table->text('images')->nullable();
            $table->integer('quantity')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('brand_id')->nullable();
            $table->double('price')->unsigned()->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });

        Schema::create('product_category_product', function (Blueprint $table){
            $table->foreignId('category_id')->index();
            $table->foreignId('product_id')->index();
            $table->primary(['product_id', 'category_id'], 'product_categories_product_primary_key');
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
        Schema::dropIfExists('product_category_product');
    }
}
