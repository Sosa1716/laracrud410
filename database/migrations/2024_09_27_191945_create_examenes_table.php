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
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('asignaturas_id')-> unsigned();
            $table->string('titulo', 50)-> nullable();

            $table->foreignId('estudiantes_id')-> unsigned();
            $table->string('nota', 50)-> nullable();
            $table->bigInteger('matricula')-> nullable();

            $table->foreignId('periodo_id')-> unsigned();
            $table->string('parcial', 50)-> nullable();



            $table->foreign('asignaturas_id')->references('id')->on('asignaturas')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('estudiantes_id')->references('id')->on('estudiantes')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('periodo_id')->references('id')->on('periodo')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examenes');
    }
};
