<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->unsignedBigInteger('store_id');
            $table->string('subtotal');
            $table->string('total');
            $table->string('customer_firstname');
            $table->string('customer_lastname');
            $table->string('customer_phone');
            $table->string('payment_status');
            $table->string('payment_method');
            $table->string('payment_credit_card_company');
            $table->string('payment_installments');

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
};
