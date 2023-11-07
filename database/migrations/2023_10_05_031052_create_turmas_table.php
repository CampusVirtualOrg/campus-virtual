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
        Schema::create('turmas', function (Blueprint $table) {
            $table->id('id');
            $table->string('nome');
            $table->string('semestre');
            $table->string('turno');
            // $table->unsignedBigInteger('disciplina_id');
            $table->unsignedBigInteger('professor_id');
            $table->timestamps();

            // $table->foreign('disciplina_id')->references('id')->on('disciplinas')->cascadeOnDelete();
            $table->foreign('professor_id')->references('id')->on('usuarios')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('turmas');
    }
};
