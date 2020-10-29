<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->index();
            $table->bigInteger('shipping_address_id')->index();
            $table->bigInteger('coupon')->nullable();
            $table->float('discount_price', 15, 2)->nullable();
            $table->float('shipping_fee', 15, 2);
            $table->float('subtotal', 15, 2);
            $table->float('order_price', 15, 2);
            $table->bigInteger('order_status');
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
        Schema::dropIfExists('orders');
    }
}
