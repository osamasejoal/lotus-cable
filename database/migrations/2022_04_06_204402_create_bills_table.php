<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->integer('staff_id');
            $table->integer('area_id');
            $table->integer('package_id');
            $table->integer('transaction_option_id')->nullable();
            $table->integer('transaction_type_id');
            $table->integer('year');
            $table->integer('month');
            $table->integer('month_wise_amount');
            $table->integer('discount');
            $table->integer('paid_amount');
            $table->date('bill_generate_date');
            $table->date('payment_date')->nullable();
            $table->integer('status')->default('1')->comment('1 = Active; 0 = Deactive;');
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
        Schema::dropIfExists('bills');
    }
}
