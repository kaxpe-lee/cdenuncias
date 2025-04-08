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
        Schema::create('denuncias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id');
            $table->foreignId('denunciante_id');
            $table->foreignId('terceros_id');
            $table->foreignId('estado_id');
            $table->foreignId('conciencia_id');
            $table->foreignId('relacion_id');
            
            $table->boolean('condiciones');
            $table->boolean('proteccion_datos');
            $table->boolean('anonimato');
            $table->string('identifica');
            $table->string('sosfecha');
            $table->string('nombre_terceros')->nullable();
            $table->string('lugar');
            $table->text('descripcion');
            $table->string('fichero');
            $table->uuid('uuid')->unique();
            $table->string('password',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncias');
    }
};
