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
        Schema::create('personas', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('doc');
            $table->string('provincia');
            $table->string('partido');
            $table->string('localidad');
            $table->string('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('referente')->nullable();
            $table->string('unidad_ges');
            $table->date('fec_ini');
            $table->date('fec_alta');
            $table->string('direccion');
            $table->string('usu_ing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
