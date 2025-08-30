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
        Schema::create('testimonios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('titulo');
            $table->text('contenido');
            $table->integer('calificacion')->nullable();
            $table->date('fecha');
            $table->string('estado')->nullable();
            $table->string('imagen')->nullable();
            $table->string('video')->nullable();
            $table->string('producto_servicio')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonios');
    }
};
