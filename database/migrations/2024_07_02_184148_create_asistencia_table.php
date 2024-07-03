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
    {;
        Schema::create('asistencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_id')->unsigned()->nullable(); // Permitir 
            $table->integer('estudiante')->unsigned()->nullable();
            $table->foreign('grupo_id')->references('id')->on('grupo');
            $table->foreign('estudiante_id')->references('id')->on('estudiante');
            $table->string('codigoEstudiante');
            $table->date('fecha');
            $table->time('hora_entrada')->nullable()->default(now()); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia');
    }
};