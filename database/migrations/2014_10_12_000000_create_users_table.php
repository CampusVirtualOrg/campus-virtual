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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('tipo', ['Administrador', 'Professor', 'Aluno']);
            $table->string('matricula')->nullable();
            $table->string('telefone')->nullable();
            $table->string('cpf')->nullable();
            $table->enum('sexo', ['Masculino', 'Feminino', 'Outro'])->nullable();
            $table->string('endereco')->nullable();
            $table->string('imagem')->nullable();
            $table->date('data_nasc')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
