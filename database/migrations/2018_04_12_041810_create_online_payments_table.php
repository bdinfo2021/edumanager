<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlinePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transaction_id');
            $table->float('amount',10,2);
            $table->string('bank_transaction_id');
            $table->string('ip');
            $table->string('domain');
            $table->string('banktransactionid');
            $table->string('transactionid');
            $table->string('bank_name');
            $table->timestamp('created_time')->nullable();
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
        Schema::dropIfExists('online_payments');
    }
}
