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
        Schema::create('matriculas', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('curso_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('curso_id')->references('id')->on('cursos')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matriculas');
    }
};
