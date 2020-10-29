<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_address', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address');
            $table->text('additional_address_info')->nullable();
            $table->integer('state_id')->index();
            $table->integer('lgarea_id')->index();
            $table->integer('contact_number');
            $table->integer('additional_contact_number')->nullable();
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
        Schema::dropIfExists('shipping_address');
    }
}
