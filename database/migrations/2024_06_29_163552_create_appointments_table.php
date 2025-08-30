<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name_father');
            $table->string('last_name_mother');
            $table->string('address');
            $table->string('phone');
            $table->string('family_phone');
            $table->text('consultation_reason');
            $table->integer('age');
            $table->integer('consulting_room_id');
            $table->string('service');
            $table->string('doctor');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('sex');
            $table->string('pathology');
            $table->boolean('invoice');
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
        Schema::dropIfExists('appointments');
    }
}
