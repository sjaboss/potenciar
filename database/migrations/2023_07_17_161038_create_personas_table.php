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
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('doc');
            $table->string('provincia');
            $table->string('partido');
            $table->string('localidad');
            $table->string('cp');
            $table->string('telefono');
            $table->string('email');
            $table->string('referente');
            $table->string('unidad_ges');
            $table->date('fec_ini');
            $table->date('fec_alta');
            $table->string('direccion');
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
