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
        Schema::create('disciplina_turmas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disciplina_id');
            $table->timestamps();
            $table->unsignedBigInteger('turmas_id');
            $table->foreign('disciplina_id')->references('id')->on('disciplinas')->cascadeOnDelete();
            $table->foreign('turmas_id')->references('id')->on('turmas')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disciplina_turmas');
    }
};
