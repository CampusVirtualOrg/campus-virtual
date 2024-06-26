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
        Schema::create('usuario_turmas', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('turma_id');
            $table->timestamps();

            $table->foreign('aluno_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('turma_id')->references('id')->on('turmas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_turmas');
    }
};
