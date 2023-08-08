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
        Schema::create('personas_his', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
            $table->id();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('doc')->nullable();
            $table->string('provincia')->nullable();
            $table->string('partido')->nullable();
            $table->string('localidad')->nullable();
            $table->string('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('referente')->nullable();
            $table->string('unidad_ges')->nullable();
            $table->date('fec_ini')->nullable();
            $table->date('fec_alta')->nullable();
            $table->string('direccion')->nullable();
            $table->string('usu_ing')->nullable();
            $table->string('usu_mod')->nullable();
            $table->string('usu_sup')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas_his');
    }
};
