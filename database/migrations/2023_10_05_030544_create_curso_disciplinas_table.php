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
        Schema::create('curso_disciplinas', function (Blueprint $table) {
            $table->id('id');

            $table->timestamps();
			$table->unsignedBigInteger('curso_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->foreign('curso_id')->references('id')->on('cursos')->cascadeOnDelete();
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_disciplinas');
    }
};
