<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->float('order_total',10,2);
            $table->string('shipping_address');
            $table->string('country');
            $table->string('state');
            $table->string('zip');
            $table->string('payment_type');
            $table->text('deposit_slip');
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
        Schema::dropIfExists('order_details');
    }
}
