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
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address');
            $table->text('additional_address_info')->nullable();
            $table->bigInteger('state_id')->index();
            $table->bigInteger('lgarea_id')->index();
            $table->bigInteger('contact_number');
            $table->bigInteger('additional_contact_number')->nullable();
            $table->boolean('address_default')->default(1)->change();
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
