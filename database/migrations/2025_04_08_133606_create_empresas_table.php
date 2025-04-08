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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->tinyInteger('p1')->nullable();
            $table->tinyInteger('p2')->nullable();
            $table->tinyInteger('p3')->nullable();
            $table->tinyInteger('alto')->unsigned()->nullable();
            $table->boolean('estado');
            $table->char('hash2',32)->unique();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
