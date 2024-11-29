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
            $table->id();
            $table->unsignedBigInteger('aluno_id'); // Define a coluna aluno_id
            $table->unsignedBigInteger('professor_id'); // Define a coluna professor_id
            $table->unsignedBigInteger('plano_id'); // Define a coluna plano_id
            $table->date('data_matricula');
            $table->string('status')->default('ativa');
            $table->timestamps();

            // Configuração das chaves estrangeiras
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('restrict');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('restrict');
            $table->foreign('plano_id')->references('id')->on('planos')->onDelete('restrict');
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
