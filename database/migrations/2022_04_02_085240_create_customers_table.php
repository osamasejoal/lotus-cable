<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->integer('area_id');
            $table->integer('package_id');
            $table->integer('customer_id');
            $table->string('name');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->integer('nid');
            $table->integer('due')->nullable();
            $table->integer('status')->default('1')->comment('1 = Active; 2 = Deactive');
            $table->date('register_date');
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
        Schema::dropIfExists('customers');
    }
}
