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
        Schema::create('nos_triagem', function (Blueprint $table) {
            $table->id();
            $table->string('pergunta')->nullable();
            $table->unsignedBigInteger('sim')->nullable(); // referencia para proximo nodo se resposta for "sim"
            $table->unsignedBigInteger('nao')->nullable(); // referencia para proximo nodo se resposta for "nao"
            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->foreign('departamento_id')->references('id')->on('departamentos')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nos_triagem');
    }
};
