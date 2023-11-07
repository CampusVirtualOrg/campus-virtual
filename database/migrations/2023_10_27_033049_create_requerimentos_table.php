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
        Schema::create('requerimentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_usuario');
            $table->string('email_usuario');
            $table->string('matricula_usuario');
            $table->enum('tipo_requerimento', [
                "Admissão por Transferência e Análise Curricular",
                "Ajuste de Matrícula Semestral",
                "Autorização para cursar disciplinas em outras Instituições de Ensino Superior",
                "Cancelamento de Matrícula",
                "Cancelamento de Disciplina",
                "Certificado de Conclusão",
                "Certidão - Autencidade",
                "Complementação de Matrícula",
                "Cópia Xerox de Documento",
                "Declaração de Colação de Grau e Tramitação de Diploma",
                "Declaração de Matrícula ou Matrícula Vínculo",
                "Declaração de Monitoria",
                "Declaração para Estágio",
                "Diploma 1ºvia/2º",
                "Dispensa da prática de Educação Física",
                "Declaração Tramitação de Diploma",
                "Ementa de disciplina",
                "Guia de Transferência",
                "Histórico Escolar",
                "Isenção de disciplinas cursadas",
                "Justificativa de falta(s) ou prova 2º chamada",
                "Matriz curricular",
                "Reabertura de Matrícula",
                "Reintegração para Cursar",
                "Solicitação de Conselho de Classe",
                "Trancamento de Matrícula",
                "Transferência de Turno",
                "Lançamento de Nota",
                "Revisão de Nota",
                "Revisão de Faltas",
                "Tempo de escolaridade",
                "Outros",
            ]);
            $table->string('observacoes');
            $table->enum('status', ['Aceito', 'Pendente', 'Recusado']);
            $table->integer('usuario_id');
            // $table->unsignedBigInteger('usuario_id');
            // $table->foreign('usuario_id')->references('id')->on('usuarios')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requerimentos');
    }
};
