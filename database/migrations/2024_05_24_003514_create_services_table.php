<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('status');
            $table->string('photo');
            $table->integer('discount_percentage')->default(0);
            $table->string('date_one');
            $table->string('date_two');
            $table->text('reason');
            $table->text('function');
            $table->text('complement');
            $table->text('effects');
            $table->text('procces');
            $table->text('goal');
            $table->string('duration');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
