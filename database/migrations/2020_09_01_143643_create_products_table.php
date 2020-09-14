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
            $table->bigInteger('category_id');
            $table->bigInteger('subcategory_id')->nullable();
            $table->bigInteger('brand_id')->nullable();

            $table->string('product_name');
            $table->bigInteger('product_code');
            $table->bigInteger('product_quantity');
            $table->text('product_details');
            $table->string('product_colour');
            $table->string('product_size');
            $table->bigInteger('selling_price');
            $table->bigInteger('discount_price')->nullable();
            $table->string('video_link')->nullable();
            $table->bigInteger('main_slider')->nullable();
            $table->bigInteger('hot_deal')->nullable();
            $table->bigInteger('best_rated')->nullable();
            $table->bigInteger('mid_slider')->nullable();
            $table->bigInteger('hot_new')->nullable();
            $table->bigInteger('trend')->nullable();
            $table->string('image_one');
            $table->string('image_two')->nullable();
            $table->string('image_three')->nullable();
            $table->string('image_four')->nullable();
            $table->string('status');

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
