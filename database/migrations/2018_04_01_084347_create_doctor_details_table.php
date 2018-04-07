<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('specialisation');
            $table->string('degree');
            $table->boolean('surgeon')->default(0);
            $table->boolean('verified')->default(0);
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
        Schema::dropIfExists('doctor_details');
    }
}
