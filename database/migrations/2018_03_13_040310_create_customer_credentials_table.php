<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerCredentialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_credentials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->string('demo_url');
            $table->string('admin_id');
            $table->string('admin_pass');
            $table->string('employee_id');
            $table->string('employee_pass');
            $table->string('student_id');
            $table->string('student_pass');
            $table->string('parent_id');
            $table->string('parent_pass');
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
        Schema::dropIfExists('customer_credentials');
    }
}
