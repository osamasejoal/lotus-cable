<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->integer('area_id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('image')->default('default.png');
            $table->string('phone');
            $table->string('address');
            $table->integer('status')->default('1')->comment('1 = Active; 0 = Deactive;')->nullable();
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
        Schema::dropIfExists('staff');
    }
}
